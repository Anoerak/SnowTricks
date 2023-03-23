<?php

namespace App\Controller;

use App\Entity\Media;
use App\Entity\Trick;

use App\Form\CommentType;
use App\Form\AddTrickType;
use App\Form\EditTrickType;

use App\Service\FileUploader;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TrickController extends AbstractController
{
    #[Route('/trick/{id}', name: 'app_trick')]
    public function index(Trick $trick, Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
        $medias = $trick->getMedia();
        $comments = $trick->getComments();

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

    #[Route('/trick/category/{category}', name: 'app_trick_category')]
    public function category(string $category, EntityManagerInterface $manager): Response
    {
        // We get all the tricks of the category
        $tricks = $manager->getRepository(Trick::class)->findBy(['category' => $category]);

        return $this->render('trick/category/trick_category.html.twig', [
            'controller_name' => 'TrickController',
            'tricks' => $tricks,
            'category' => $category,
        ]);
    }

    #[Route('/new/trick', name: 'app_trick_new')]
    public function new(Request $request, EntityManagerInterface $entityManagerInterface, FileUploader $fileUploader): Response
    {
        $trick = new Trick();

        $form = $this->createForm(AddTrickType::class, $trick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // We take care of the main_picture
            $mainPicture = $form->get('main_picture')->getData();
            $fileName = $fileUploader->upload($mainPicture);
            $trick->setMainPicture($fileName);
            // Then we deal with the medias collection
            if (!empty($form->get('medias')->getData())) {
                foreach ($form->get('medias')->getData() as $media) {
                    $fileName = $fileUploader->upload($media);
                    $media = new Media();
                    $media->setPath($fileName);
                    $media->setTrick($trick);
                    // We find the extension to set the type
                    $extension = pathinfo($fileName, PATHINFO_EXTENSION);
                    if (
                        $extension === 'mp4' || $extension === 'webm' || $extension === 'ogg'
                    ) {
                        $media->setType('video');
                    } elseif ($extension === 'png' || $extension === 'jpg' || $extension === 'jpeg') {
                        $media->setType('picture');
                    } else {
                        throw new \Exception('The file extension is not supported');
                    }
                    $entityManagerInterface->persist($media);
                }
            }

            $trick->setCreatedAt(new \DateTimeImmutable());
            $trick->setUser($this->getUser());
            $trick = $form->getData();

            $entityManagerInterface->persist($trick);
            $entityManagerInterface->flush();

            return $this->redirectToRoute('app_trick', ['id' => $trick->getId()]);
        }

        return $this->render('trick/add/add_trick.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    #[Route('/trick/{id}/edit', name: 'app_trick_edit')]
    public function edit(Trick $trick, Request $request, EntityManagerInterface $entityManagerInterface, FileUploader $fileUploader): Response
    {

        $medias = $trick->getMedia();

        $form = $this->createForm(EditTrickType::class, $trick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (!empty($form->get('name')->getData())) {
                $trick->setName($form->get('name')->getData());
            }
            if (!empty($form->get('description')->getData())) {
                $trick->setDescription($form->get('description')->getData());
            }
            if (!empty($form->get('category')->getData())) {
                $trick->setCategory($form->get('category')->getData());
            }
            // We take care of the main_picture if it has been changed
            if (!empty($form->get('main_picture')->getData())) {
                $mainPicture = $form->get('main_picture')->getData();
                $fileName = $fileUploader->upload($mainPicture);
                $trick->setMainPicture($fileName);
            }
            // Then we deal with the multiple files of the medias collection
            if (!empty($form->get('medias')->getData())) {
                foreach ($form->get('medias')->getData() as $media) {
                    $fileName = $fileUploader->upload($media);
                    $media = new Media();
                    $media->setPath($fileName);
                    $media->setTrick($trick);
                    // We find the extension to set the type
                    $extension = pathinfo($fileName, PATHINFO_EXTENSION);
                    if ($extension === 'mp4' || $extension === 'webm' || $extension === 'ogg') {
                        $media->setType('video');
                    } elseif ($extension === 'png' || $extension === 'jpg' || $extension === 'jpeg') {
                        $media->setType('picture');
                    } else {
                        throw new \Exception('The file extension is not supported');
                    }
                    $entityManagerInterface->persist($media);
                }
            }

            $trick->setModifiedAt(new \DateTimeImmutable());

            $entityManagerInterface->persist($trick);
            $entityManagerInterface->flush();

            return $this->redirectToRoute('app_trick', ['id' => $trick->getId()]);
        }

        return $this->render('trick/edit/edit_trick.html.twig', [
            'form' => $form->createView(),
            'trick' => $trick,
            'medias' => $medias,
        ]);
    }

    #[Route('/trick/{id}/delete', name: 'app_trick_delete')]
    public function delete(Trick $trick, EntityManagerInterface $entityManagerInterface): Response
    {
        $entityManagerInterface->remove($trick);
        $entityManagerInterface->flush();

        return $this->redirectToRoute('app_home');
    }

    #[Route('/trick/{id}/delete/media/{media_id}', name: 'app_trick_delete_media')]
    public function deleteMedia(Trick $trick, $media_id, EntityManagerInterface $entityManagerInterface): Response
    {
        // We Get the media based on the id passed through the url
        $media = $entityManagerInterface->getRepository(Media::class)->find($media_id);

        $entityManagerInterface->remove($media);
        $entityManagerInterface->flush();

        return $this->redirectToRoute('app_trick_edit', ['id' => $trick->getId()]);
    }
}
