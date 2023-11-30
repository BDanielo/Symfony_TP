<?php

namespace App\Controller\Backend;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// Route globale du controlleur
#[Route('/admin/categories', name: 'admin.categories')]
class CategorieController extends AbstractController
{
    // Constructeur prenant le dépôt de catégories et le gestionnaire d'entités
    public function __construct(
        private CategorieRepository $repository,
        private EntityManagerInterface $entityManager
    ) {
    }

    // Affiche toutes les catégories dans une vue index
    #[Route('', name: '.index', methods: ['GET'])]
    public function index(): Response
    {
        // Récupère toutes les catégories et les passe à la vue
        return $this->render('Backend/Categorie/index.html.twig', [
            'categories' => $this->repository->findAll(),
        ]);
    }

    // Affiche le formulaire de création d'une nouvelle catégorie et le traite pour l'enregistrement en base de données
    #[Route('/create', name: '.create', methods: ['GET', 'POST'])]
    public function create(Request $request): Response|RedirectResponse
    {
        // Crée une nouvelle catégorie
        $categorie = new Categorie();

        // Crée le formulaire en lui passant la catégorie
        $form = $this->createForm(CategorieType::class, $categorie);

        // Traite le formulaire
        $form->handleRequest($request);

        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {

            // Enregistre la catégorie en base de données
            $this->entityManager->persist($categorie);
            $this->entityManager->flush();

            // Ajoute un message flash de succès
            $this->addFlash('success', 'Catégorie créée avec succès');

            // Redirige vers la liste des catégories
            return $this->redirectToRoute('admin.categories.index');
        }

        // Affiche la vue du formulaire
        return $this->render('Backend/Categorie/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Affiche le formulaire de modification d'une catégorie et le traite pour mettre à jour en base de données
    #[Route('/{id}/update', name: '.update', methods: ['GET', 'POST'])]
    public function update(Categorie $categorie, Request $request): Response|RedirectResponse
    {
        // Vérifie si la catégorie existe, sinon redirige avec un message d'erreur
        if (!$categorie instanceof Categorie) {
            $this->addFlash('error', 'Catégorie non trouvée');
            return $this->redirectToRoute('admin.categories.index');
        }

        // Crée le formulaire en lui passant la catégorie
        $form = $this->createForm(CategorieType::class, $categorie);

        // Traite le formulaire
        $form->handleRequest($request);

        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {

            // Enregistre la catégorie mise à jour en base de données
            $this->entityManager->flush();

            // Ajoute un message flash de succès
            $this->addFlash('success', 'Catégorie mise à jour avec succès');

            // Redirige vers la liste des catégories
            return $this->redirectToRoute('admin.categories.index');
        }

        // Affiche la vue du formulaire
        return $this->render('Backend/Categorie/update.html.twig', [
            'form' => $form->createView(),
            'categorie' => $categorie,
        ]);
    }

    // Supprime une catégorie en fonction de son ID
    #[Route('/{id}/delete', name: '.delete', methods: ['POST'])]
    public function delete(Categorie $categorie, Request $request): RedirectResponse
    {
        // Vérifie si la catégorie existe, sinon redirige avec un message d'erreur
        if (!$categorie instanceof Categorie) {
            $this->addFlash('error', 'Catégorie non trouvée');
            return $this->redirectToRoute('admin.categories.index');
        }

        // Supprime la catégorie de la base de données
        $this->entityManager->remove($categorie);
        $this->entityManager->flush();

        // Ajoute un message flash de succès
        $this->addFlash('success', 'Catégorie supprimée avec succès');

        // Redirige vers la liste des catégories
        return $this->redirectToRoute('admin.categories.index');
    }
}
