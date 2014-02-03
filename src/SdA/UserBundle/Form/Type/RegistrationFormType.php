<?php
// src/SdA/UserBundle/Form/Type/RegistrationFormType.php
namespace Sda\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use SdA\UserBundle\Form\Type\LanguageFormType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('firstName', 'text', array('label' => 'Nom'))
                ->add('lastName', 'text', array('label' => 'Prénom'))
                ->add('age')
                ->add('experience', 'choice', array(
                                'choices'   => array(
                                    '0'   => 'Néophyte',
                                    '1' => 'Connaisseur',
                                    '2'   => 'Expérimenté',
                                    '3' => 'Vétéran'
                                ),
                                'multiple'  => false,
                            ))
                ->add('status', 'choice', array(
                                'choices'   => array(
                                    'etudiant'   => 'Etudiant',
                                    'salarie' => 'Salarié',
                                    'freelance'   => 'Freelance',
                                    'autre' => 'Autre'
                                ),
                                'multiple'  => false,
                            ))
                ->add('languages')
                ;

    }

    public function getName()
    {
        return 'sda_user_registration';
    }
}