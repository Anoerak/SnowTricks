<?php

namespace App\Controller;

use App\Entity\Trick;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrickController extends AbstractController
{
    #[Route('/trick/{id}', name: 'app_trick')]
    public function index(Trick $trick): Response
    {
        // We get the media for this trick
        $media = $trick->getMedia();

        return $this->render('trick/index.html.twig', [
            'controller_name' => 'TrickController',
            'trick' => $trick,
            'medias' => $media,
        ]);
    }
}
