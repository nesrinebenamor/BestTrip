<?php

namespace MyApp\FrontBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\FrontBundle\Entity\Sujet;
use Symfony\Component\HttpFoundation\Response;
use MyApp\FrontBundle\Form\SujetType;

class SujetController  extends Controller{

    function ajouterAction()
    {
             $sujet=new Sujet();  
        $form = $this->createForm
                (new SujetType(),$sujet);
          $request = $this->getRequest();
         
         if( $form->handleRequest($request)->isValid())
             {
        $em = $this->getDoctrine()->getManager();
        $em->persist($sujet);
        $em->flush();
        return $this->redirect($this->generateUrl("liste_sujets"));
      }
   return $this->render
 ('MyAppFrontBundle:SujetD:Ajouter.html.twig',  
  array('form' => $form->createView()));
   
      }
      
      function  listeSujetsAction()
    {
 $em = $this->getDoctrine()->getManager();
$sujets = $em->getRepository
 ('MyAppFrontBundle:Sujet')->findAll();
  return 
 $this->render
('MyAppFrontBundle:SujetD:ListeSujets.html.twig',
  array('sujets'=>$sujets));
 
    }
    
    public function supprimerAction($id)
    {           $em = $this->getDoctrine()->getManager();
                 $sujets = $em->getRepository
                         ('MyAppFrontBundle:Sujet')
                         ->find($id);
                 $em->remove($sujets);
                 $em->flush();
      return $this->redirect($this->generateUrl("liste_sujets"));
    }
    
    
    public function ModifierAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sujet = $em->getRepository
        ('MyAppFrontBundle:Sujet')->find($id);
       $form = $this->createForm(new SujetType
               ,$sujet);
          $Request = $this->getRequest();
         if( $form->handleRequest($Request)->isValid()){
            
               $em->persist($sujet);
                $em->flush();
                return $this->redirect($this->
                        generateUrl("liste_sujets") );
            }
           return $this->render
  ('MyAppFrontBundle:SujetD:modifier.html.twig',
  array('form' => $form->createView()));
            
     }
     function rechercheAction() {
        $em = $this->getDoctrine()->getManager();
        $sujet = $em->getRepository('MyAppFrontBundle:Sujet')->findAll(); //rechercher/afficher
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $recherche = $request->get('recherche');
            
            
         $sujet = $em->getRepository('MyAppFrontBundle:Sujet')->findBy(array("categorie" => $recherche));        
            
        
    }
     return $this->render('MyAppFrontBundle:SujetD:recherche.html.twig', array('sujet' => $sujet));
     
     }
}


