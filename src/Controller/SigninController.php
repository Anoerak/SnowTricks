<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SigninController extends AbstractController
{
    #[Route('/signin', name: 'app_signin')]
    public function index(): Response
    {
        $form = $this->createFormBuilder()
            ->add('username')
            ->add('password')
            ->getForm();

        return $this->render('signin/index.html.twig', [
            'controller_name' => 'SigninController',
            'form' => $form->createView(),
        ]);
    }
}