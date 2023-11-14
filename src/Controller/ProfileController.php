<?php

namespace App\Controller;

use App\Form\UserProfileType;
use App\Service\FileUploader;

use App\Controller\SigninController;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class ProfileController extends AbstractController
{
    private $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    #[Route('/profile', name: 'app_profile')]
    public function getProfile(Request $request, EntityManagerInterface $entityManager, FileUploader $fileUploader): Response
    {
        $user = $this->getUser();

        $form = $this->createForm(UserProfileType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->getData();

            $profilePicture = $form->get('profile_picture')->getData();
            if (!empty($profilePicture)) {
                $fileName = $fileUploader->upload($profilePicture, 'profile');
                $user->setProfilePicture($fileName);
            }

            if (!empty($form->get('password')->getData()) && !empty($form->get('confirm_password')->getData())) {
                $password = $this->encoder->hashPassword($user, $form->get('password')->getData());
                $user->setPassword($password);
            }
            $user->setModifiedAt(new \DateTimeImmutable());

            $entityManager->persist($user);
            $entityManager->flush();

            // We check if the modifications worked
            $modifiedAt = $user->getModifiedAt();
            if ($modifiedAt->getTimestamp() > time() - 5) {
                $this->addFlash('success', 'Your profile has been updated.');
            } else {
                $this->addFlash('danger', 'An error occurred while updating your profile.');
            }

            return $this->redirectToRoute('app_profile');
        }

        return $this->render('profile/profile.html.twig', [
            'controller_name' => 'ProfileController',
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/profile/delete', name: 'app_profile_delete')]
    public function deleteProfile(EntityManagerInterface $entityManager): Response
    {
        // We need to get the user, logout and delete the user
        $user = $this->getUser();

        // We delete the user
        $entityManager->remove($user);
        $entityManager->flush();
        // refresh session
        session_destroy();
        // We logout the user
        $signinController = new SigninController();
        $signinController->logout();
        // We send a flash message
        $this->addFlash('success', 'Your account has been deleted.');
        // We wait for 3 seconds
        sleep(3);
        // We redirect to the homepage
        return $this->redirectToRoute('app_home');
    }
}
