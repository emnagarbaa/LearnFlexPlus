<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class CommunicationSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('keyword', TextType::class, [
                'label' => 'Mot-clé',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Rechercher par description, lien...',
                    'class' => 'form-control'
                ]
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'required' => false,
                'choices' => [
                    'Tous les types' => '',
                    'En direct' => 'live',
                    'Enregistré' => 'record'
                ],
                'attr' => ['class' => 'form-select']
            ])
            ->add('etat', ChoiceType::class, [
                'label' => 'État',
                'required' => false,
                'choices' => [
                    'Tous les états' => '',
                    'Planifié' => 'planifie',
                    'En cours' => 'en_cours',
                    'Terminé' => 'termine',
                    'Annulé' => 'annule'
                ],
                'attr' => ['class' => 'form-select']
            ])
            ->add('dateFrom', DateType::class, [
                'label' => 'Du',
                'required' => false,
                'widget' => 'single_text',
                'html5' => true, // ← Change à TRUE pour utiliser le datepicker HTML5
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'AAAA-MM-JJ', // Format ISO
                    'type' => 'date' // Force le type date
                ]
            ])
            ->add('dateTo', DateType::class, [
                'label' => 'Au',
                'required' => false,
                'widget' => 'single_text',
                'html5' => true, // ← Change à TRUE
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'AAAA-MM-JJ', // Format ISO
                    'type' => 'date'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'method' => 'GET',
            'csrf_protection' => false,
            'data_class' => null,
        ]);
    }
}