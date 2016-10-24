<?php

namespace MyApp\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use MyApp\FrontBundle\Entity\Photo;

class PhotoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
//    public function buildForm(FormBuilderInterface $builder, array $options)
//    {
//        $builder
//            ->add('description','textarea')
//            ->add('source', 'file', array(
//                'data_class' => null, 'attr' => array(
//                'accept' => 'image/*',
//                'multiple' => 'multiple',
//            ))
//        );
//    }
    
        public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description','textarea')
            ->add('source', 'file', array(
                'data_class' => null, 'attr' => array(
                'accept' => 'image/*'))
        );
    }
        public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'MyApp\FrontBundle\Entity\Photo',
        );
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyApp\FrontBundle\Entity\Photo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'myapp_frontbundle_photo';
    }
    
    public static function processImage(UploadedFile $uploaded_file, Photo $photo)
    {
        $path = 'C:/wamp/www/ProjetBestTrip/web/uploads/experience/images/';
        //getClientOriginalName() => Returns the original file name.
        $uploaded_file_info = pathinfo($uploaded_file->getClientOriginalName());
        $file_name =
            "photo_" .
            $uploaded_file->getClientOriginalName()
           
            ;

        $uploaded_file->move($path, $file_name);

        return $file_name;
    }
}
