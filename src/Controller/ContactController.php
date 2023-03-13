<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        $form = $this->createFormBuilder()
            ->add('name')
            ->add('email')
            ->add('subject')
            ->add('message', TextareaType::class, [
                'attr' => [
                    'rows' => 10,
                    'cols' => 50
                ]
            ])
            ->getForm();

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'form' => $form->createView()
        ]);
    }
}
