<?php

namespace App\Controller\Frontend;

use App\Entity\Livre;
use App\Repository\LivreRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/livres', name: 'app.livres')]
class LivreController extends AbstractController
{
    public function __construct(
        private LivreRepository $livreRepo
    ) {
    }

    // Affiche la liste des derniers livres (limite de 5) sur la page d'accueil des livres
    #[Route('', name: '.index', methods: ['GET'])]
    public function index(): Response
    {
        // Récupère les derniers 5 livres depuis le repository des livres
        $livres = $this->livreRepo->findLatestWithLimit(5);

        // Affiche la vue de la liste des derniers livres
        return $this->render('Frontend/Livre/index.html.twig', [
            'livres' => $livres,
        ]);
    }

    // Affiche les détails d'un livre spécifique
    #[Route('/details/{id}', name: '.show', methods: ['GET'])]
    public function show(?Livre $livre): Response
    {
        // Vérifie si le livre existe, sinon redirige avec un message d'erreur
        if (!$livre instanceof Livre) {
            $this->addFlash('error', 'Livre non trouvé');

            return $this->redirectToRoute('app.livres.index');
        }

        // Affiche les détails du livre sélectionné
        return $this->render('Frontend/Livre/show.html.twig', [
            'livre' => $livre,
        ]);
    }
}
