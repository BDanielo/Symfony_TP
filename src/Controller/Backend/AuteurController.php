<?php

// AuteurController.php

namespace App\Controller\Backend;

use App\Entity\Auteur;
use App\Form\AuteurType;
use App\Repository\AuteurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// Route globale du controlleur
#[Route('/admin/auteurs', name: 'admin.auteurs')]
class AuteurController extends AbstractController
{
    // Constructeur prenant le dépôt d'auteurs et le gestionnaire d'entités
    public function __construct(
        private AuteurRepository $repository,
        private EntityManagerInterface $entityManager
    ) {
    }

    // Affiche tous les auteurs dans une vue index
    #[Route('', name: '.index', methods: ['GET'])]
    public function index(): Response
    {
        // Récupère tous les auteurs, et on les passe à la vue
        return $this->render('Backend/Auteur/index.html.twig', [
            'auteurs' => $this->repository->findAll(),
        ]);
    }

    // Affiche le formulaire de création d'un nouvel auteur et le traite pour l'enregistrement en base de données
    #[Route('/create', name: '.create', methods: ['GET', 'POST'])]
    public function create(Request $request): Response|RedirectResponse
    {
        // Crée un nouvel auteur
        $auteur = new Auteur();

        // Crée le formulaire en lui passant l'auteur
        $form = $this->createForm(AuteurType::class, $auteur);

        // Traite le formulaire
        $form->handleRequest($request);

        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {

            // Enregistre l'auteur en base de données
            $this->entityManager->persist($auteur);
            $this->entityManager->flush();

            // Ajoute un message flash de succès
            $this->addFlash('success', 'Auteur créé avec succès');

            // Redirige vers la liste des auteurs
            return $this->redirectToRoute('admin.auteurs.index');
        }

        // Affiche la vue du formulaire
        return $this->render('Backend/Auteur/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Affiche le formulaire de modification d'un auteur et le traite pour mettre à jour en base de données
    #[Route('/{id}/update', name: '.update', methods: ['GET', 'POST'])]
    public function update(Auteur $auteur, Request $request): Response|RedirectResponse
    {
        // Vérifie si l'auteur existe, sinon redirige avec un message d'erreur
        if (!$auteur instanceof Auteur) {
            $this->addFlash('error', 'Auteur non trouvée');
            return $this->redirectToRoute('admin.auteurs.index');
        }

        // Crée le formulaire en lui passant l'auteur
        $form = $this->createForm(AuteurType::class, $auteur);

        // Traite le formulaire
        $form->handleRequest($request);

        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Enregistre l'auteur en base de données
            $this->entityManager->flush();

            // Ajoute un message flash de succès
            $this->addFlash('success', 'Auteur mis à jour avec succès');

            // Redirige vers la liste des auteurs
            return $this->redirectToRoute('admin.auteurs.index');
        }

        // Affiche la vue du formulaire
        return $this->render('Backend/Auteur/update.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Supprime un auteur en fonction de son ID
    #[Route('/{id}/delete', name: '.delete', methods: ['POST'])]
    public function delete(Auteur $auteur, Request $request): RedirectResponse
    {
        // Vérifie si l'auteur existe, sinon redirige avec un message d'erreur
        if (!$auteur instanceof Auteur) {
            $this->addFlash('error', 'Auteur non trouvée');
            return $this->redirectToRoute('admin.auteurs.index');
        }

        // Vérifie si le jeton CSRF est valide
        $this->entityManager->remove($auteur);
        $this->entityManager->flush();

        // Ajoute un message flash de succès
        $this->addFlash('success', 'Auteur supprimé avec succès');

        // Redirige vers la liste des auteurs
        return $this->redirectToRoute('admin.auteurs.index');
    }
}
