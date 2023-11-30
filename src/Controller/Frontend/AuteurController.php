<?php

namespace App\Controller\Frontend;

use App\Repository\AuteurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/auteurs', name: 'app.auteurs')]
class AuteurController extends AbstractController
{
    public function __construct(
        private AuteurRepository $auteurRepository
    ) {
    }

    // Affiche tous les auteurs
    #[Route('', name: '.index', methods: ['GET'])]
    public function index(): Response
    {
        // Récupère tous les auteurs depuis le repository
        $auteurs = $this->auteurRepository->findAll();

        // Affiche la vue index avec la liste des auteurs
        return $this->render('Frontend/Auteur/index.html.twig', [
            'auteurs' => $auteurs,
        ]);
    }

    // Affiche les détails d'un auteur en fonction de son ID
    #[Route('/details/{id}', name: '.show', methods: ['GET'])]
    public function show(?int $id): Response
    {
        // Récupère l'auteur en fonction de l'ID fourni
        $auteur = $this->auteurRepository->find($id);

        // Vérifie si l'auteur existe, sinon redirige vers la liste des auteurs avec un message d'erreur
        if (!$auteur) {
            $this->addFlash('error', 'Auteur non trouvé');
            return $this->redirectToRoute('app.auteurs.index');
        }

        // Affiche la vue des détails de l'auteur
        return $this->render('Frontend/Auteur/show.html.twig', [
            'auteur' => $auteur,
        ]);
    }
}
