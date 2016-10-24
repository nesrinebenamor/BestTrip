<?php

namespace MyApp\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\FrontBundle\Entity\Newsletter;
use Symfony\Component\HttpFoundation\Response;
use MyApp\FrontBundle\Form\NewsletterType;

class NewsletterController extends Controller {

    function AjoutAction() {
        $newsletter = new Newsletter();
        $form = $this->createForm
                (new NewsletterType, $newsletter);
        $request = $this->getRequest();

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($newsletter);
            $em->flush();
            return $this->redirect($this->generateUrl("affich"));
        }
        return $this->render
                        ('MyAppFrontBundle:NewsletterD:ajoutNewsletter.html.twig', array('form' => $form->createView()));
    }

    function AffichageAction() {
        $em = $this->getDoctrine()->getManager();
        $newsletter = $em->getRepository
                        ('MyAppFrontBundle:Newsletter')->findAll();
        return
                $this->render('MyAppFrontBundle:NewsletterD:listNewsletter.html.twig', array('newsletter' => $newsletter));
    }

    public function supprimerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $newsletter = $em->getRepository
                        ('MyAppFrontBundle:Newsletter')
                ->find($id);
        $em->remove($newsletter);
        $em->flush();
        return $this->redirect($this->generateUrl("affich"));
    }

    public function ModifierAction($id) {
        $em = $this->getDoctrine()->getManager();
        $newsletter = $em->getRepository
                        ('MyAppFrontBundle:Newsletter')->find($id);
        $form = $this->createForm(new NewsletterType()
                , $newsletter);
        $Request = $this->getRequest();
        if ($form->handleRequest($Request)->isValid()) {

            $em->persist($newsletter);
            $em->flush();
            return $this->redirect($this->
                                    generateUrl("affich"));
        }
        return $this->render
                        ('MyAppFrontBundle:NewsletterD:modifier.html.twig', array('form' => $form->createView()));
    }

    public function RechercheAction() {
        $em = $this->getDoctrine()->getManager();
        $newsletter = $em->getRepository('MyAppFrontBundle:Newsletter')->findAll();
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $search = $request->get('search');
            $newsletter = $em->getRepository('MyAppFrontBundle:Newsletter')->
                    findBy(array("nom" => $search));
        }

        return $this->render('MyAppFrontBundle:NewsletterD:recherche.html.twig', array("newsletter" => $newsletter));
    }

}
