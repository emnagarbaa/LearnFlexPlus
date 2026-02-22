<?php

namespace App\Form;

use App\Entity\Examen;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;





class ExamenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
               ->add('pdfFile', FileType::class, [
        'label' => 'Fichier PDF',
        'mapped' => false,  // IMPORTANT ! Ce champ n’est pas directement lié à l’entité
        'required' => false,
        'constraints' => [
            new File([
                'maxSize' => '10M',
                'mimeTypes' => [
                    'application/pdf',
                    'application/x-pdf',
                ],
                'mimeTypesMessage' => 'Veuillez uploader un fichier PDF valide',
            ])
        ],
    ])
        ->add('matiere')
            ->add('niveauexamen', ChoiceType::class, [
                            'choices' => [
                                'Facile' => 'facile',
                                'Moyen' => 'moyen',
                                'Difficile' => 'difficile',
                            ]
                        ])   
                   ->add('description', TextareaType::class, [
        'label' => 'Description',
        'required' => true,
    ])      
            ->add('datedebut')
            ->add('datefin')
            ->add('duree')
            ->add('nbquestion')
            ->add('scoretotal')
            ->add('coefficient')
            ->add('typeexamen', ChoiceType::class, [
                'choices' => [
                    'Blanc' => 'blanc',
                    'Officiel' => 'officiel',
                    'Entrainement' => 'entrainement',
                ]
            ])
            ->add('etat', ChoiceType::class, [
                            'choices' => [
                                'Planifié' => 'planifie',
                                'Actif' => 'actif',
                                'Terminé' => 'termine',
                                'Annulé' => 'annule',
                            ]
                        ])           
            ->add('save',submitType::class)

                    ;
                }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Examen::class,
        ]);
    }
}
