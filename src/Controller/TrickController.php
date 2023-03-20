<?php

namespace App\Controller;

use App\Entity\Trick;

use App\Form\CommentType;
use App\Form\AddTrickType;
use App\Form\EditTrickType;

use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
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

    #[Route('/new/trick', name: 'app_trick_new')]
    public function new(Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
        $trick = new Trick();

        $form = $this->createForm(
            AddTrickType::class
        );

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $trick = $form->getData();
            $trick->setCreatedAt(new \DateTimeImmutable());
            $trick->setUser($this->getUser());

            $entityManagerInterface->persist($trick);
            $entityManagerInterface->flush();

            return $this->redirectToRoute('app_home');
        }

        return $this->render('trick/add/add_trick.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    #[Route('/trick/{id}/edit', name: 'app_trick_edit')]
    public function edit(Trick $trick, Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
        $form = $this->createForm(EditTrickType::class, $trick);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $trick = $form->getData();

            $entityManagerInterface->persist($trick);
            $entityManagerInterface->flush();

            return $this->redirectToRoute('app_trick', ['id' => $trick->getId()]);
        }

        return $this->render('trick/edit/edit_trick.html.twig', [
            'form' => $form->createView(),
            'trick' => $trick,
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
