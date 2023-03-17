<?php

namespace App\Controller;

use App\Entity\Trick;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class TrickController extends AbstractController
{
    #[Route('/trick/{id}', name: 'app_trick')]
    public function index(Trick $trick): Response
    {
        // We get the media for this trick
        $medias = $trick->getMedia();

        // We get the comments for this trick
        $comments = $trick->getComments();

        // We create the form we'll use to post a comment
        $form = $this->createFormBuilder()
            ->add('Comment', TextareaType::class, [
                'attr' => [
                    'rows' => 10,
                    'cols' => 50
                ]
            ])
            ->getForm();

        return $this->render('trick/index.html.twig', [
            'controller_name' => 'TrickController',
            'trick' => $trick,
            'medias' => $medias,
            'comments' => $comments,
            'form' => $form->createView(),
        ]);
    }
}
