<?php

namespace App\Form;

use App\Entity\Challenge;
use App\Entity\Examen;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class ChallengeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titrec', TextType::class)
            ->add('descriptionc', TextareaType::class)
            ->add('objectifscore', NumberType::class, [
                'required' => true,
                'html5' => true,
                'scale' => 2,
            ])
 ->add('question', TextareaType::class, [
        'label' => 'Questions (JSON)',
        'required' => false,
        'mapped' => false, // si tu gères la conversion JSON toi-même
        'data' => $options['data'] && $options['data']->getQuestion()
            ? json_encode($options['data']->getQuestion(), JSON_PRETTY_PRINT)
            : ''
    ])
        ->add('niveaudifficulte', ChoiceType::class, [
                'choices' => [
                    'Facile' => 'facile',
                    'Moyen' => 'moyen',
                    'Difficile' => 'difficile',
                ],
                'placeholder' => '--- Choisir ---',
            ])
            ->add('niveauatteint', TextType::class)
            ->add('typerecomponse', TextType::class)
            ->add('contenurecompense', TextareaType::class)
            ->add('etat', ChoiceType::class, [
                'choices' => [
                    'Planifié' => 'planifie',
                    'Actif' => 'actif',
                    'Terminé' => 'termine',
                    'Annulé' => 'annule',
                ],
            ])
           ->add('dated', DateType::class, [
    'widget' => 'single_text',
    'input' => 'datetime',
    'html5' => true,
    'required' => true, // <-- rend le champ obligatoire
])
->add('images', FileType::class, [
        'label' => 'Photo du challenge',
        'mapped' => false, // Important : ne mappe pas directement à l'entité
        'required' => false,
        'constraints' => [
            new File([
                'maxSize' => '5M',
                'mimeTypes' => [
                    'image/jpeg',
                    'image/png',
                    'image/gif',
                ],
                'mimeTypesMessage' => 'Veuillez uploader une image valide (jpeg, png, gif)',
            ]),
        ],
    ])
     ->add('interactyHash', TextType::class, [
                'required' => false,
                'label' => 'Iteracty Hash',
                'attr' => ['placeholder' => 'Entrez l’ID ou Hash Interacty'],
            ])
            ->add('datef', DateType::class, [
                'widget' => 'single_text',
                'input' => 'datetime',
                'html5' => true,
                'required' => true,
            ])
            ->add('datelimite', DateType::class, [
                'widget' => 'single_text',
                'input' => 'datetime',
                'html5' => true,
                'required' => true,
            ])
            ->add('alerte', CheckboxType::class, [
                'required' => false,
            ])
            ->add('examen', EntityType::class, [
                'class' => Examen::class,
                'choice_label' => 'titre',
                'placeholder' => '--- Choisir un examen ---',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Challenge::class,
        ]);
    }
}
