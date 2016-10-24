<?php

namespace MyApp\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SujetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('text','textarea')
            ->add('categorie','choice', array('choices' => array('Vacance' => 'Vacances', 'Expatriation' => 'Expatriation', 'Déplacement professionel' => 'Déplacement professionel'
                        , 'Week end' => 'Week end', 'Journée découverte' => 'Journée découverte', 'Chez moi' => 'Chez moi'
                        , 'Voyage de noce' => 'Voyage de noce', 'Au pair, étude et stage' => 'Au pair, étude et stage', 'Humanitaire' => 'Humanitaire', 'Croisière' => 'Croisière', 'Trek' => 'Trek', 'Tour du monde' => 'Tour du monde'
                        , 'Voyage scolaire' => 'Voyage scolaire', 'Journée découverte' => 'Journée découverte', 'Chez moi' => 'Chez moi'
                        , 'Trip sac a dos' => 'Trip sac a dos', 'Gros budget' => 'Gros budget', 'Classique' => 'Classique', 'Ptit budget' => 'Ptit budget', 'Total impro' => 'Total impro', 'Hôtel Club' => 'Hôtel Club', 'Vacances en famille' => 'Vacances en famille', 'Séjours de golf' 
                => 'Séjours de golf', 'Vacances de luxe' => 'Vacances de luxe', 'Voyage expérimental' => 'Voyage expérimental', 'aventure' => 'aventure')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyApp\FrontBundle\Entity\Sujet'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'myapp_frontbundle_sujet';
    }
}
