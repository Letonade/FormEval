<?php

namespace AppBundle\Form;

use AppBundle\Entity\Hobby;
use AppBundle\Entity\OperatingSystem;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\DomCrawler\Tests\Field\TextareaFormFieldTest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Count;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*
         * add
         *      - nom du champ qui est utilisé dans la vue
         *      - type de champs : https://symfony.com/doc/current/reference/forms/types.html
         *      - option du champ
         *          contraintes de validation : https://symfony.com/doc/current/reference/constraints.html
         *
         * */
        $builder
            ->add('firstname',TextType::class,[
                'constraints' => [
                    new NotBlank([
                        'message' =>"Vous n'avez pas saisi votre prénom"
                    ]),
                    new Length([
                        'min' => 2,
                        'minMessage' => "Votre prénom doit comporter 2 caractères au minimum"
                    ])
                ]
            ])
            ->add('lastname',TextType::class,[
                    'constraints' => [
                        new NotBlank([
                            'message' =>"Vous n'avez pas saisi votre nom"
                        ]),
                        new Length([
                            'min' => 2,
                            'minMessage' => "Votre nom doit comporter 2 caractères au minimum"
                        ])
                    ]
                ]
            )
            ->add('email',EmailType::class)
            ->add('message',TextareaType::class)
            /*
             *EntityType permet de relier un champs à une entité
             * class permet de définir l'entité ciblée
             * choice_label : choix de la propriété de l'entité à afficher
             */
            /*
             * Choix de l'affichage
             *      expanded : affichage de plusieurs champs; par défaut False
             *      multiple : sélection de plusieurs choix; par défaut False
             *  Combinaisons possibles :
             *      liste déroulante : expanded false / multiple false
             *      bouton radios : expanded true / multiple false
             *      cases à cocher : expanded true / multiple true : obligatoire pour les many to many
             * */
            ->add('hobbies',EntityType::class,[
                'class' => Hobby::class,
                'choice_label' => 'name',
                'expanded' => true,
                'multiple' => true,
                'constraints' => [
                    new Count([
                        'min' => 1,
                        'minMessage' => 'Vous devez sélectionner au minimum un loisir',
                    ])
                ]
            ])
        -> add('operatingSystem',EntityType::class,[
            'class' => OperatingSystem::class,
            'choice_label' => 'name',
            'expanded' => true,
            'multiple' => false,
    ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Contact'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_contact';
    }


}
