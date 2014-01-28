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

     /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SdA\UserBundle\Entity\Language'
        ));
    }

    public function getName()
    {
        return 'sda_language';
    }
}