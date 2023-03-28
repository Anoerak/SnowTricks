<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SignupType;
use App\Repository\UserRepository;
use Symfony\Component\Mime\Address;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;


class SignupController extends AbstractController
{

    private $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    #[Route('/signup', name: 'app_signup')]
    public function signup(Request $request, EntityManagerInterface $entityManager, VerifyEmailHelperInterface $verifyEmailHelper, MailerInterface $mailer): Response
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
            | We generate the confirmation URL.
            |--------------------------------------------
            */
            $signatureComponents = $verifyEmailHelper->generateSignature(
                'app_verify_email',
                $user->getId(),
                $user->getEmail(),
                ['id' => $user->getId()]
            );

            /*
            |--------------------------------------------
            | We send an email with a confirmation link.
            |--------------------------------------------
            */

            $email = (new TemplatedEmail())
                ->from(new Address('largowick@gmail.com', 'SnowTricks Daemon'))
                ->to($user->getEmail())
                ->subject('Please Confirm your Email')
                ->htmlTemplate('emails/confirmation_email.html.twig')
                ->context([
                    'signedUrl' => $signatureComponents->getSignedUrl(),
                    'expiresAtMessageKey' => $signatureComponents->getExpirationMessageKey(),
                    'expiresAtMessageData' => $signatureComponents->getExpirationMessageData(),
                ]);

            $mailer->send($email);

            /*
            |--------------------------------------------
            | We check if the user has been created.
            |--------------------------------------------
            */
            if ($user->getId()) {
                $this->addFlash('success', 'You\'re signed up. Please check your email to verify your account.' . $signatureComponents->getSignedUrl());
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

    #[Route('/verify', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, EntityManagerInterface $entityManager, VerifyEmailHelperInterface $verifyEmailHelper, UserRepository $userRepository): Response
    {
        $user = $userRepository->findOneBy(['id' => $request->get('id')]);

        dump($request->get('id'));

        if (null === $user) {
            throw $this->createNotFoundException('User not found.');
        }

        try {
            $verifyEmailHelper->validateEmailConfirmation(
                $request->getUri(),
                $user->getId(),
                $user->getEmail()
            );
        } catch (VerifyEmailExceptionInterface $e) {
            $this->addFlash('danger', $e->getReason());

            return $this->redirectToRoute('app_signin');
        }


        $user->setIsVerified(true);
        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash('success', 'Your email address has been verified.');
        return $this->redirectToRoute('app_signin');
    }
}
