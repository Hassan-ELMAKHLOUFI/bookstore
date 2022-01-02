<?php

namespace App\Form;

use App\Entity\Auteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_prenom',TextType::class,[
                'attr'=>[
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le nom et le prénom de l\'auteur ',
                ],
            ])
            ->add('sexe')
            ->add('date_de_naissance')
            ->add('nationalite')
            ->add('Livres')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Auteur::class,
        ]);
    }
}
