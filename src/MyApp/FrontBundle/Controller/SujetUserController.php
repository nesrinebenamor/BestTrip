<?php

namespace MyApp\FrontBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\FrontBundle\Entity\Sujet;
use Symfony\Component\HttpFoundation\Response;


class SujetUserController  extends Controller{
    
    function  listeSujetUserAction()
    {
 $em = $this->getDoctrine()->getManager();
$sujets = $em->getRepository
 ('MyAppFrontBundle:Sujet')->findAll();
  return 
 $this->render
('MyAppFrontBundle:SujetU:ListeSujetUser.html.twig',
  array('sujets'=>$sujets));
 
    }
    
    public function supprimerAction($id)
    {           $em = $this->getDoctrine()->getManager();
                 $sujets = $em->getRepository
                         ('MyAppFrontBundle:Sujet')
                         ->find($id);
                 $em->remove($sujets);
                 $em->flush();
      return $this->redirect($this->generateUrl("liste_sujet_User"));
    }
}
