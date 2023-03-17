<?php

namespace App\Controller;

use App\Repository\MediaRepository;
use App\Repository\TrickRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(TrickRepository $repo): Response
    {
        // We get the first 8 Tricks
        $tricks = $repo->findBy([], ['id' => 'ASC'], 8, 0);

        // We get how many rows are in this table
        $tricksCount = $repo->count([]);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'tricks' => $tricks,
            'tricksCount' => $tricksCount,
        ]);
    }

    #[Route('/load-more-tricks/{lastTrickIndex}', name: 'app_load_more_tricks')]
    public function loadMoreTricks(TrickRepository $repo, $lastTrickIndex): Response
    {
        // We get the next 9 Tricks
        $tricks = $repo->findBy([], ['id' => 'ASC'], 9, $lastTrickIndex);

        return $this->render('home/display_tricks/more.html.twig', [
            'controller_name' => 'HomeController',
            'tricks' => $tricks,
        ]);
    }
}
