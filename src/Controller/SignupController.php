<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignupController extends AbstractController
{
    #[Route('/signup', name: 'app_signup')]
    public function index(): Response
    {
        $form = $this->createFormBuilder()
            ->add('username')
            ->add('email')
            ->add('password')
            ->getForm();

        return $this->render('signup/index.html.twig', [
            'controller_name' => 'SignupController',
            'form' => $form->createView(),
        ]);
    }
}
