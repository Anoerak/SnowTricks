<?php

namespace App\Controller;


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
        $tricks = $repo->findBy([], ['createdAt' => 'DESC'], 8, 0);

        // We get how many rows are in this table
        $tricksCount = $repo->count([]);

        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
            'tricks' => $tricks,
            'tricksCount' => $tricksCount,
        ]);
    }

    #[Route('/load-more-tricks/{lastTrickIndex}/{tricksMarker}', name: 'app_load_more_tricks')]
    public function loadMoreTricks(TrickRepository $repo, int $lastTrickIndex, int $tricksMarker): Response
    {
        $tricksMarker = $tricksMarker < 4 ? $tricksMarker : 4;
        // We get the next 9 Tricks
        $tricks = $repo->findBy([], ['id' => 'ASC'], $tricksMarker, $lastTrickIndex);

        return $this->render('home/display_tricks/display_more_tricks.html.twig', [
            'controller_name' => 'HomeController',
            'tricks' => $tricks,
        ]);
    }
}
