<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SignupType;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class SignupController extends AbstractController
{

    private $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    #[Route('/signup', name: 'app_signup')]
    public function signup(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();

        $form = $this->createForm(SignupType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

            /*
            |--------------------------------------------
            | We check if there already is a user with this username
            |--------------------------------------------
            */
            $userExists = $entityManager->getRepository(User::class)->findOneBy(['username' => $user->getUsername()]);
            if ($userExists) {
                $this->addFlash('danger', 'This username is already taken');
                return $this->redirectToRoute('app_signup');
            }



            $user->setCreatedAt(new \DateTimeImmutable());
            $user->setRoles(['ROLE_USER']);
            $password = $this->encoder->hashPassword($user, $user->getPassword());
            $user->setPassword($password);

            $entityManager->persist($user);
            $entityManager->flush();

            /*
            |--------------------------------------------
            | We check if the user has been created.
            |--------------------------------------------
            */
            if ($user->getId()) {
                $this->addFlash('success', 'You\'re signed up');
                return $this->redirectToRoute('app_signin');
            } else {
                $this->addFlash('danger', 'Something went wrong');
                return $this->redirectToRoute('app_signup');
            }
        }

        return $this->render('signup/signup.html.twig', [
            'controller_name' => 'SignupController',
            'form' => $form->createView(),
        ]);
    }
}
