<?php

namespace App\Controller\Frontend;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/categories', name: 'app.categories')]
class CategorieController extends AbstractController
{
    public function __construct(
        private CategorieRepository $categorieRepository
    ) {
    }

    // Affiche toutes les catégories
    #[Route('', name: '.index', methods: ['GET'])]
    public function index(): Response
    {
        // Récupère toutes les catégories depuis le repository
        $categories = $this->categorieRepository->findAll();

        // Affiche la vue index avec la liste des catégories
        return $this->render('Frontend/Categorie/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    // Affiche les détails d'une catégorie en fonction de son ID
    #[Route('/details/{id}', name: '.show', methods: ['GET'])]
    public function show(?int $id): Response
    {
        // Récupère la catégorie en fonction de l'ID fourni
        $categorie = $this->categorieRepository->find($id);

        // Vérifie si la catégorie existe, sinon redirige vers la liste des catégories avec un message d'erreur
        if (!$categorie) {
            $this->addFlash('error', 'Catégorie non trouvée');
            return $this->redirectToRoute('app.categories.index');
        }

        // Affiche la vue des détails de la catégorie
        return $this->render('Frontend/Categorie/show.html.twig', [
            'categorie' => $categorie,
        ]);
    }
}
