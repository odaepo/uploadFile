<?php

namespace Tool\Bundle\EntityFileBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EntityFileType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameFile')
            ->add('shortDescription')
            ->add('description')
            ->add('updateAt')
            ->add('deleted')
            ->add('deletedAt')
            ->add('uploadedFromUser')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tool\Bundle\EntityFileBundle\Entity\EntityFile'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tool_bundle_entityfilebundle_entityfile';
    }
}
