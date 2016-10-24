<?php

namespace MyApp\UserBundle\Form\Type;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

class ProfileFormType extends BaseType
{ 
    private $class;
    
    public function __construct($class)
    {
       parent:: __construct($class);
    }
    
//    public function buildForm(FormBuilderInterface $builder, array $options)
//    {
//        parent::buildForm($builder, $options);
//        $this->buildUserForm($builder, $options);
//                $builder->add('nom', 'text')
//                        ->add('prenom', 'text')
//                        ->add('age', "integer")
//                        ->add('image', "file")
//        ;
//    }
    
    public function getParent()
    {
        return 'fos_user_profile';
    }

    public function getName()
    {
        return 'myapp_user_profile';
    }
    
     protected function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'MyAppserBundle'))
            ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'MyAppserBundle'))
            ->add('nom', 'text', array('label' => 'form.nom', 'translation_domain' => 'MyAppserBundle'))
            ->add('prenom', 'text', array('label' => 'form.prenom', 'translation_domain' => 'MyAppUserBundle'))
            ->add('age', 'integer', array('label' => 'form.age', 'translation_domain' => 'MyAppserBundle'))
            ->add('current_password', 'password', array(
            'label' => 'form.current_password',
            'translation_domain' => 'FOSUserBundle',
            'mapped' => false,
        ))    
           ->add('image', 'text', array('label' => 'form.image', 'translation_domain' => 'MyAppserBundle'))
        ;
    }
    
     public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
         
        $resolver->setDefaults(array(
            'data_class' => 'MyApp\UserBundle\Entity\Utilisateur',
           // 'intention'  => 'profile',
        ));
    }

}