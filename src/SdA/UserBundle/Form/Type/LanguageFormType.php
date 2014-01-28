<?php // src/SdA/UserBundle/Form/Type/LanguageFormType.php
namespace SdA\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LanguageFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        
    }

    public function getName()
    {
        return 'sda_language';
    }
}