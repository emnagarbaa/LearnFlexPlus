<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

             ->add('profileImageFile', FileType::class, [
                'label' => 'Photo de profil (optionnel)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                 new File([
                'maxSize' => '2M',
                'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp'],
                'mimeTypesMessage' => 'Veuillez choisir une image valide (JPG, PNG, WEBP).',
            
                        ]),
                    ],
                ])
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'required' => true,
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'required' => true,
            ])
            ->add('age', IntegerType::class, [
                'label' => 'Âge',
                'required' => false,
                'empty_data' => null,
                'attr' => [
                    'min' => 18,
                ],
            ])
             ->add('adresseResidence', TextType::class, [
                'label' => 'Adresse de résidence',
                'required' => false,
                'empty_data' => null,
                'attr' => [
                    'placeholder' => 'ex: 12, Avenue Habib Bourguiba, Tunis',
                ],
            ])

            ->add('telephone', TelType::class, [
                'label' => 'Téléphone',
                'required' => false,
                'empty_data' => null, //
            ])
            // optional password change (NOT mapped to entity directly)
            ->add('newPassword', PasswordType::class, [
                'label' => 'Nouveau mot de passe (optionnel)',
                'required' => false,
                'mapped' => false,
                'attr' => ['minlength' => 8],
            ])
            ->add('confirmPassword', PasswordType::class, [
                'label' => 'Confirmer le mot de passe',
                'required' => false,
                'mapped' => false,
                'attr' => ['minlength' => 8],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
            'validation_groups' => ['update', 'Default'],
        ]);
    }
}
