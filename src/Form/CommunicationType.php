<?php

namespace App\Form;

use App\Entity\Communication;
use App\Entity\Publication;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommunicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'choices' => [
                    'Live' => 'live',
                    'Enregistré' => 'record',
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('lien', UrlType::class, [
                'label' => 'Lien (URL)',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'https://...']
            ])
            ->add('dateHeure', DateTimeType::class, [
                'label' => 'Date et Heure',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control']
            ])
            ->add('duree', IntegerType::class, [
                'label' => 'Durée (minutes)',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: 60']
            ])
            ->add('etat', ChoiceType::class, [
                'label' => 'État',
                'choices' => [
                    'Programmée' => 'programmee',
                    'En cours' => 'en_cours',
                    'Terminée' => 'terminee',
                    'Annulée' => 'annulee',
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('descriptionDetaillee', TextareaType::class, [
                'label' => 'Description détaillée',
                'required' => false,
                'attr' => ['class' => 'form-control', 'rows' => 5]
            ])
           ->add('publication', EntityType::class, [
    'class' => Publication::class,
    'choice_label' => 'titre',
    'label' => 'Publication associée',
    'required' => false,
    'attr' => ['class' => 'form-control']
])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Communication::class,
        ]);
    }
}