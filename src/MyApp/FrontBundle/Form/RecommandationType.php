<?php

namespace MyApp\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RecommandationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adresse')
             ->add('nom')
            ->add('contenu')
            ->add  ('estCompagnie', 'choice', array(
    'choices'   => array('1' => 'je recommande une compagnie', '0' => 'je recommande un lieu'),
    'required'  => false))
           // ->add('ajouter','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyApp\FrontBundle\Entity\Recommandation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'myapp_frontbundle_recommandation';
    }
}
