<?php

namespace App\Controller;

use App\Entity\Trick;
use App\Form\CommentType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TrickController extends AbstractController
{
    #[Route('/trick/{id}', name: 'app_trick')]
    public function index(Trick $trick, Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
        // We get the media for this trick
        $medias = $trick->getMedia();

        // We get the comments for this trick
        $comments = $trick->getComments();

        // We create the form we'll use to post a comment
        $form = $this->createForm(CommentType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment = $form->getData();
            $comment->setCreatedAt(new \DateTimeImmutable());
            $comment->setTrick($trick);
            $comment->setUser($this->getUser());

            $entityManagerInterface->persist($comment);
            $entityManagerInterface->flush();

            return $this->redirectToRoute('app_trick', ['id' => $trick->getId()]);
        }

        return $this->render('trick/trick.html.twig', [
            'controller_name' => 'TrickController',
            'trick' => $trick,
            'medias' => $medias,
            'comments' => $comments,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/trick/{id}/edit', name: 'app_trick_edit')]
    public function edit(Trick $trick, Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
        // We get the media for this trick
        $medias = $trick->getMedia();

        // We get the comments for this trick
        $comments = $trick->getComments();



        return $this->render('trick/edit/edit_trick.html.twig', [
            'controller_name' => 'TrickController',
            'trick' => $trick,
            'medias' => $medias,
            'comments' => $comments
        ]);
    }

    #[Route('/trick/{id}/delete', name: 'app_trick_delete')]
    public function delete(Trick $trick, EntityManagerInterface $entityManagerInterface): Response
    {
        $entityManagerInterface->remove($trick);
        $entityManagerInterface->flush();

        return $this->redirectToRoute('app_home');
    }
}