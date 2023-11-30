<?php

namespace App\Form;

use App\Entity\Auteur;
use App\Entity\Categorie;
use App\Entity\Livre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LivreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {


        $builder
            ->add('titre')
            ->add('datePublication', DateType::class, [
                // On change le style du datepicker
                'widget' => 'single_text',
                // On change le label pour Date de publication aux lieux de date publication
                'label' => 'Date de publication'
            ])
            ->add('description')
            ->add('Categories', EntityType::class, [
                'class' => Categorie::class,
                'required' => true,
                // On veut le nom de la catégorie
                'choice_label' => 'nom',
                // Possible d'avoir plusieurs catégories (ManyToMany)
                'multiple' => true,
                'expanded' => false,
            ])
            ->add('auteur', EntityType::class, [
                'class' => Auteur::class,
                // On veut le nom complet de l'auteur
                'choice_label' => 'nomComplet',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livre::class,
        ]);
    }
}
