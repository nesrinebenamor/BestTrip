<?php

namespace MyApp\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HTML2PDF;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyAppFrontBundle:Default:index.html.twig', array('name' => $name));
    }
    
      public function pdfAction()
    {
         
         $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MyAppFrontBundle:Guide')->findAll();
//        $planning = new Planning();
//        $myPfd = "" ;
//        foreach($entities as $planning)
//        {
//            $myPfd = $myPfd.$planning."<br>";
//            
//                    
//        }
        
         
         
        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->renderView('MyAppFrontBundle:Default:index.html.twig', array('entities' => $entities));
         
        //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
        //le sens de la page "portrait" => p ou "paysage" => l
        //le format A4,A5...
        //la langue du document fr,en,it...
        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');
 
        //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        //fullpage : affiche la page entière sur l'écran
        //fullwidth : utilise la largeur maximum de la fenêtre
        //real : utilise la taille réelle
        $html2pdf->pdf->SetDisplayMode('real');
 
        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
        $html2pdf->writeHTML($html);
 
        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
        $html2pdf->Output('Coupon.pdf');
          var_dump($html); die();
     
        return new Response();
    }
}
