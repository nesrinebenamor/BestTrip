<?php

namespace MyApp\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use MyApp\FrontBundle\Entity\Experience;
use MyApp\FrontBundle\Entity\Photo;
use MyApp\FrontBundle\Entity\Video;
use MyApp\FrontBundle\Entity\Commentaire;

use MyApp\FrontBundle\Form\ExperienceType;
use MyApp\FrontBundle\Form\ExpType;
use MyApp\FrontBundle\Form\PhotoType;
use MyApp\FrontBundle\Form\VideoType;
use MyApp\FrontBundle\Form\CommentaireType;
use \Symfony\Component\HttpFoundation\Response;

/**
 * Commentaire controller.
 *
 * @Route("/commentaire")
 */
class CommentaireController extends Controller{
    
        function createAction() {
        $com = new Commentaire();
        $form = $this->createForm
                (new CommentaireType, $com);
        $request = $this->getRequest();

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($com);
            $em->flush();
        }
        return $this->render
                        ('MyAppFrontBundle:Experience:show.html.twig', array('form' => $form->createView()));
    }
}
