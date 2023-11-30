<?php

namespace App\Controller\Frontend;

use App\Repository\LivreRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function __construct(
        private LivreRepository $livreRepo
    ) {
    }

    // Affiche la page d'accueil
    #[Route('', name: 'app.homepage')]
    public function index(): Response
    {
        // Récupère tous les livres depuis le repository de livres
        $livres = $this->livreRepo->findAll();

        // Affiche la vue de la page d'accueil avec la liste des livres
        return $this->render('Frontend/Home/index.html.twig', [
            'livres' => $livres,
        ]);
    }
}
