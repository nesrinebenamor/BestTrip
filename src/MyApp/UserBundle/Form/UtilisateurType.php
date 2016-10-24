<?php

namespace MyApp\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use MyApp\UserBundle\Entity\Utilisateur;

class UtilisateurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('age')
            ->add('image', 'file', array(
                'data_class' => null) )   
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'MyApp\UserBundle\Entity\Utilisateur',
        );
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyApp\UserBundle\Entity\Utilisateur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'myapp_userbundle_utilisateur';
    }
    
//    public static function processImage(UploadedFile $uploaded_file, Utilisateur $utilisateur)
//    {
//        $path = 'C:/wamp/www/workshopFOSFOS/web/images/';
//        //getClientOriginalName() => Returns the original file name.
//        $uploaded_file_info = pathinfo($uploaded_file->getClientOriginalName());
//        $file_name =
//            "photo_" .
//            $uploaded_file->getClientOriginalName()
//           
//            ;
//
//        $uploaded_file->move($path, $file_name);
//
//        return $file_name;
//    }
//    
    
    
}
