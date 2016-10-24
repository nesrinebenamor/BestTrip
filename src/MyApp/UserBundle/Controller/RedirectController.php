<?php


namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RedirectController extends Controller
{
   public function redirectAction()
    {
         $container=$this->container;
           $security = $container->get('security.context');
//           if($security->getToken()!=null )
//        { return $this->redirect($this->generateUrl('MyApp_user_accueil'));   }
//         
        //return $this->render('ProjetDarnaBundle:Default:redirect.html.twig');
         if (!$this->get('security.context')->isGranted('ROLE_ADMIN'))
         { return $this->redirect($this->generateUrl('acceul_front'));}
         else
             if(!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN'))
         {return $this->redirect($this->generateUrl('home_admin'));}
      
      
    }
}
