<?php

namespace MyApp\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use MyApp\FrontBundle\Entity\Photo;
use MyApp\FrontBundle\Form\PhotoType;
use \Symfony\Component\HttpFoundation\Response;
use \Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Photo controller.
 *
 * @Route("/photo")
 */
class PhotoController extends Controller {

    function createAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $photo = new Photo();
        $form = $this->createForm(new PhotoType(), $photo);
        $photo->setSource("");
        $form->setData($photo);
        if ($this->getRequest()->getMethod() == 'POST') {
            $form->handleRequest($this->getRequest());
            if ($form->isValid()) {
                $uploaded_file = $form['source']->getData();
                if ($uploaded_file) {
                    $image = PhotoType::processImage($uploaded_file, $photo);
                    $photo->setSource($image);
                }
                $em->persist($photo);
                $em->flush();
                $this->get('session')->getFlashBag()->add('succes', 'Photo added.');
               
            }
             return $this->redirect($this->generateURL('detail_experience', array('id' => $id_exp)));
        }

        return $this->render('MyAppFrontBundle:Experience:newPhoto.html.twig', array('form1' => $form->createView()));
    }

  public function supprimerAction($id,$id_exp) {
        $em = $this->getDoctrine()->getManager();
        $photo = $em->getRepository
                        ('MyAppFrontBundle:Photo')->find($id);
        $em->remove($photo);
        $em->flush();
        return $this->redirect($this->generateURL('detail_experience', array('id' => $id_exp)));
    }
}
