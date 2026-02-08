<?php

namespace App\Form;

use App\Entity\Cours;
use App\Entity\Matiere;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre du Cours',
                'attr' => ['placeholder' => 'Entrez le titre du cours']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => ['placeholder' => 'Entrez une description']
            ])
            ->add('section', TextType::class, [
                'label' => 'Section',
                'attr' => ['placeholder' => 'Entrez la section']
            ])
            ->add('duree_totale', TextType::class, [
                'label' => 'Durée Totale',
                'attr' => ['placeholder' => 'Entrez la durée (ex: 2h)']
            ])
            ->add('langue', TextType::class, [
                'label' => 'Langue',
                'attr' => ['placeholder' => 'Entrez la langue']
            ])
            ->add('image', FileType::class, [
                'label' => 'Image (Fichier)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                        ],
                        'mimeTypesMessage' => 'Veuillez uploader une image valide (JPEG, PNG, WEBP)',
                    ])
                ],
            ])
            ->add('pdf_file', FileType::class, [
                'label' => 'Document PDF (Optionnel)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '10M',
                        'mimeTypes' => [
                            'application/pdf',
                        ],
                        'mimeTypesMessage' => 'Veuillez uploader un fichier PDF valide',
                    ])
                ],
            ])
            ->add('matiere', EntityType::class, [
                'class' => Matiere::class,
                'choice_label' => 'nom_matiere',
                'label' => 'Matière',
                'placeholder' => 'Sélectionnez une matière'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
            'attr' => ['novalidate' => 'novalidate']
        ]);
    }
}
