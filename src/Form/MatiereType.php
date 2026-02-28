<?php

namespace App\Form;

use App\Entity\Matiere;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class MatiereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_matiere', TextType::class, [
                'label' => 'Nom de la Matière',
                'attr' => ['placeholder' => 'Entrez le nom de la matière']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => ['placeholder' => 'Entrez une description']
            ])
            ->add('section', TextType::class, [
                'label' => 'Section',
                'attr' => ['placeholder' => 'Entrez la section']
            ])
            ->add('code_matiere', TextType::class, [
                'label' => 'Code Matière',
                'attr' => ['placeholder' => 'Entrez le code']
            ])
            ->add('niveau', TextType::class, [
                'label' => 'Niveau',
                'attr' => ['placeholder' => 'Entrez le niveau']
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Matiere::class,
            'attr' => ['novalidate' => 'novalidate']
        ]);
    }
}
