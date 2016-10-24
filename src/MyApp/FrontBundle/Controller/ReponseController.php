<?php

namespace MyApp\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\FrontBundle\Entity\Reponse;
use Symfony\Component\HttpFoundation\Response;
use MyApp\FrontBundle\Form\ReponseType;

class ReponseController extends Controller {

    function ajouterAction($id) {
        $reponse = new Reponse();
        $em = $this->getDoctrine()->getManager();
        $reponse->setIdSujet($id);
        $form = $this->createForm(new ReponseType(), $reponse);
        $request = $this->getRequest();

        if ($form->handleRequest($request)->isValid()) {

            //$client= $request->get('idUtilisateur');
            //$reponse->setContenu($cont);
            //$reponse->setIdUtilisateur($client);
            $em = $this->getDoctrine()->getManager();
            $em->persist($reponse);
            $em->flush();
            return $this->redirect($this->generateUrl("liste_reponses", array('id' => $id)));
        }
        return $this->render('MyAppFrontBundle:ReponseD:Ajouter.html.twig', array('form' => $form->createView()));
    }

    function listeReponseAction($id) {
        //$em = $this->getDoctrine()->getManager();
        $reponse = new Reponse();
        $em = $this->getDoctrine()->getManager();
        $reponse->setIdSujet($id);
        $form = $this->createForm(new ReponseType(), $reponse);
        $request = $this->getRequest();
        $reponses = $em->getRepository
                        ('MyAppFrontBundle:Reponse')->findBy(array("idSujet" => $id));
        $sujet = $em->getRepository
                        ('MyAppFrontBundle:Sujet')->findBy(array("id" => $id));
        if ($form->handleRequest($request)->isValid()) {

            //$client= $request->get('idUtilisateur');
            //$reponse->setContenu($cont);
            //$reponse->setIdUtilisateur($client);
            $em = $this->getDoctrine()->getManager();
            $em->persist($reponse);
            $em->flush();
            return $this->redirect($this->generateUrl("liste_reponses", array('id' => $id)));
        }
        
        return
                $this->render('MyAppFrontBundle:ReponseD:ListeReponses.html.twig', array('reponses' => $reponses,'form' => $form->createView(),'sujet' => $sujet));
    }

}
