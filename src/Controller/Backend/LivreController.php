<?php

namespace App\Controller\Backend;

use App\Entity\Livre;
use App\Form\LivreType;
use App\Repository\LivreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// Route globale du controlleur
#[Route('/admin/livres', name: 'admin.livres')]
class LivreController extends AbstractController
{
    // Constructeur prenant le dépôt de livres et le gestionnaire d'entités
    public function __construct(
        private LivreRepository $repo,
        private EntityManagerInterface $em
    ) {
    }

    // Affiche tous les livres dans une vue index
    #[Route('', name: '.index', methods: ['GET'])]
    public function index(): Response
    {
        // Récupère tous les livres et les passe à la vue
        return $this->render('Backend/Livre/index.html.twig', [
            'livres' => $this->repo->findAll(),
        ]);
    }

    // Affiche le formulaire de création d'un nouveau livre et le traite pour l'enregistrement en base de données
    #[Route('/create', name: '.create', methods: ['GET', 'POST'])]
    public function create(Request $request): Response|RedirectResponse
    {
        // Crée un nouveau livre
        $livre = new Livre();

        // Crée le formulaire en lui passant le livre
        $form = $this->createForm(LivreType::class, $livre);
        $form->handleRequest($request);

        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {

            // Enregistre le livre en base de données
            $this->em->persist($livre);
            $this->em->flush();

            // Ajoute un message flash de succès
            $this->addFlash('success', 'Livre créé avec succès');

            // Redirige vers la liste des livres
            return $this->redirectToRoute('admin.livres.index');
        }

        // Affiche la vue du formulaire
        return $this->render('Backend/Livre/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Affiche le formulaire de modification d'un livre et le traite pour mettre à jour en base de données
    #[Route('/{id}/update', name: '.update', methods: ['GET', 'POST'])]
    public function update(?Livre $livre, Request $request): Response|RedirectResponse
    {
        // Vérifie si le livre existe, sinon redirige avec un message d'erreur
        if (!$livre instanceof Livre) {
            $this->addFlash('error', 'Livre non trouvé');
            return $this->redirectToRoute('admin.livres.index');
        }

        // Crée le formulaire en lui passant le livre
        $form = $this->createForm(LivreType::class, $livre);
        $form->handleRequest($request);

        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {

            // Enregistre le livre mis à jour en base de données
            $this->em->flush();
            $this->addFlash('success', 'Livre mis à jour avec succès');

            // Redirige vers la liste des livres
            return $this->redirectToRoute('admin.livres.index');
        }

        // Affiche la vue du formulaire de mise à jour
        return $this->render('Backend/Livre/update.html.twig', [
            'form' => $form->createView(),
            'livre' => $livre,
        ]);
    }

    // Supprime un livre en fonction de son ID
    #[Route('/{id}/delete', name: '.delete', methods: ['POST'])]
    public function delete(?Livre $livre, Request $request): RedirectResponse
    {
        // Vérifie si le livre existe, sinon redirige avec un message d'erreur
        if (!$livre instanceof Livre) {
            $this->addFlash('error', 'Livre non trouvé');
            return $this->redirectToRoute('admin.livres.index');
        }

        // Supprime le livre de la base de données
        $this->em->remove($livre);
        $this->em->flush();

        // Ajoute un message flash de succès
        $this->addFlash('success', 'Livre supprimé avec succès');

        // Redirige vers la liste des livres
        return $this->redirectToRoute('admin.livres.index');

    }
}
