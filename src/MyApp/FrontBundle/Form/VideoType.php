<?php

namespace MyApp\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use MyApp\FrontBundle\Entity\Video;

class VideoType extends AbstractType
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
//                'accept' => 'video/*',
//                'multiple' => 'multiple',
//            ))
//        );
//    }
    
        public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('extension','textarea')
            ->add('source', 'file', array(
                'data_class' => null, 'attr' => array(
                'accept' => 'video/*'))
        );
    }
        public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'MyApp\FrontBundle\Entity\Video',
        );
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyApp\FrontBundle\Entity\Video'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'myapp_frontbundle_video';
    }
    
    public static function processVideo(UploadedFile $uploaded_file, Video $video)
    {
        $path = 'C:/wamp/www/ProjetBestTrip/web/uploads/experience/video/';
        //getClientOriginalName() => Returns the original file name.
        $uploaded_file_info = pathinfo($uploaded_file->getClientOriginalName());
        $file_name =
            "video_" .
            $uploaded_file->getClientOriginalName()
           
            ;

        $uploaded_file->move($path, $file_name);

        return $file_name;
    }
}
