<?php



namespace MyApp\FrontBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\FrontBundle\Entity\Reponse;
use Symfony\Component\HttpFoundation\Response;



class ReponseUserController  extends Controller{

function  listeReponseUserAction($id)
    {
 $em = $this->getDoctrine()->getManager();
$reponses = $em->getRepository
 ('MyAppFrontBundle:Reponse')->findBy(array("idSujet"=>$id));
  return 
 $this->render
('MyAppFrontBundle:ReponseU:ListeReponseUser.html.twig',
  array('reponses'=>$reponses));
 
    }
    
    public function supprimerRepAction($id)
    {           $em = $this->getDoctrine()->getManager();
                 $sujets = $em->getRepository
                         ('MyAppFrontBundle:Reponse')
                         ->find($id);
                 $em->remove($sujets);
                 $em->flush();
      return $this->redirect($this->generateUrl("liste_reponse_User"));
    }
}
