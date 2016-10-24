<?php

namespace MyApp\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\FrontBundle\Entity\Flux;
use Symfony\Component\HttpFoundation\Response;
use MyApp\FrontBundle\Form\FluxType;

class FluxController extends Controller {

    function AjoutAction() {
        $flux = new Flux();
        $form = $this->createForm
                (new FluxType, $flux);
        $request = $this->getRequest();

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($flux);
            $em->flush();
            return $this->redirect($this->generateUrl("affichF"));
        }
        return $this->render
                        ('MyAppFrontBundle:FluxD:joutFlux.html.twig', array('form' => $form->createView()));
    }

    function AffichageAction() {
        $em = $this->getDoctrine()->getManager();
        $flux = $em->getRepository
                        ('MyAppFrontBundle:Flux')->findAll();
        return
                $this->render
                        ('MyAppFrontBundle:FluxD:listFlux.html.twig', array('flux' => $flux));
    }

    public function supprimerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $flux = $em->getRepository
                        ('MyAppFrontBundle:Flux')->find($id);
        $em->remove($flux);
        $em->flush();
        return $this->redirect($this->generateUrl("affichF"));
    }

    public function ModifierAction($id) {
        $em = $this->getDoctrine()->getManager();
        $flux = $em->getRepository
                        ('MyAppFrontBundle:Flux')->find($id);
        $form = $this->createForm(new FluxType()
                , $flux);
        $Request = $this->getRequest();
        if ($form->handleRequest($Request)->isValid()) {

            $em->persist($flux);
            $em->flush();
            return $this->redirect($this->
                                    generateUrl("affichF"));
        }
        return $this->render
                        ('MyAppFrontBundle:FluxD:modifierFlux.html.twig', array('form' => $form->createView()));
    }

    public function newsAction() {
        $em = $this->getDoctrine()->getManager();
        $flux = $em->getRepository('MyAppFrontBundle:Flux')->findAll();
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $search = $request->get('search');
            $flux = $em->getRepository('MyAppFrontBundle:Flux')->
                    findBy(array("nom" => $search));
        }

        return $this->render('MyAppFrontBundle:FluxD:rechercheFlux.html.twig', array("flux" => $flux));
    }

}
