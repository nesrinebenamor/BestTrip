<?php

namespace MyApp\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\FrontBundle\Entity\Recommandation;
use MyApp\FrontBundle\Form\RecommandationType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Ob\HighchartsBundle\Highcharts\Highchart;

/**
 * Recommandation controller.
 *
 */
class RecommandationController extends Controller {

    /**
     * Lists all Recommandation entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MyAppFrontBundle:Recommandation')->findAll();

        return $this->render('MyAppFrontBundle:Recommandation:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Recommandation entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Recommandation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $entity->setNombre(1);
            $em->flush();

            return $this->redirect($this->generateUrl('recommandation_show', array('id' => $entity->getId())));
        }
        return $this->render('MyAppFrontBundle:Recommandation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Recommandation entity.
     *
     * @param Recommandation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Recommandation $entity) {
        $form = $this->createForm(new RecommandationType(), $entity, array(
            'action' => $this->generateUrl('recommandation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Recommandation entity.
     *
     */
    public function newAction() {
        $entity = new Recommandation();
        $form = $this->createCreateForm($entity);

        return $this->render('MyAppFrontBundle:Recommandation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Recommandation entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppFrontBundle:Recommandation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Recommandation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyAppFrontBundle:Recommandation:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Recommandation entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppFrontBundle:Recommandation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Recommandation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyAppFrontBundle:Recommandation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Recommandation entity.
     *
     * @param Recommandation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Recommandation $entity) {
        $form = $this->createForm(new RecommandationType(), $entity, array(
            'action' => $this->generateUrl('recommandation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Recommandation entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppFrontBundle:Recommandation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Recommandation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('recommandation_show', array('id' => $id)));
        }

        return $this->render('MyAppFrontBundle:Recommandation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Recommandation entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MyAppFrontBundle:Recommandation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Recommandation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('recommandation'));
    }

    /**
     * Creates a form to delete a Recommandation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('recommandation_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    public function ajoutRecommandationAction() {
        $recommandation = new Recommandation();

        $form = $this->container->get('form.factory')->create(new RecommandationType(), $recommandation);
        $Request = $this->getRequest();
        if ($Request->getMethod() == "POST") {
            $form->bind($Request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($recommandation);
                $em->flush();
                return $this->redirect($this->generateUrl("affichage_recommandation"));
            }
        }

        return $this->render('MyAppUserBundle:Recommandation:ajoutRecommandation.html.twig', array('Form' => $form->createView()
        ));
    }

    public function supprimerAction($id) {
        $em = $this->container->get('doctrine')->getManager();
        $recommandation = $em->getRepository('MyAppFrontBundle:Recommandation')->find($id);
        $em->remove($recommandation);
        $em->flush();
        return $this->redirect($this->generateUrl("recommandation"));
    }

    public function supprimeAction($id) {
        $em = $this->container->get('doctrine')->getManager();
        $recommandation = $em->getRepository('MyAppFrontBundle:Recommandation')->find($id);
        $em->remove($recommandation);
        $em->flush();
        return $this->redirect($this->generateUrl("affichage"));
    }

    public function afficherAction() {

        $em = $this->getDoctrine()->getManager();
        $recommandation = $em->getRepository('MyAppFrontBundle:Recommandation')
                ->findAll();
        return $this->render('MyAppFrontBundle:Recommandation:list.html.twig', array('recommandation' => $recommandation, 'Form' => $em));
    }

    /////iciii////

    public function incrementerAction($id) {
        $em = $this->container->get('doctrine')->getManager();
        $recommandation = $em->getRepository('MyAppFrontBundle:Recommandation')->find($id);
        $query = $em->createQuery("update 
        MyAppFrontBundle:Recommandation c set c.nombre = c.nombre+1 where c.id =" . $id);
        $query->execute();
        $em->flush();
        return $this->redirect($this->generateUrl("affichage"));
    }

    public function modifierAction($id) {
        $em = $this->container->get('doctrine')->getManager();
        $recommandation = $em->getRepository('MyAppFrontBundle:Recommandation')->find($id);
        $form = $this->container->get('form.factory')->create(new RecommandationType(), $recommandation);
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $form->bind($request);
            if ($form->isValid()) {
                $em->persist($recommandation);
                $em->flush();
                return $this->redirect($this->generateUrl("affichage"));
            }
        }
        return $this->render('MyAppFrontBundle:Recommandation:modifier.html.twig', array
                    ("Form" => $form->createView()));
    }

    function afficheAction() {
        $em = $this->getDoctrine()->getManager();
        $recommandation = $em->getRepository('MyAppFrontBundle:Recommandation')->findAll();

        return $this->render('MyAppFrontBundle:Recommandation:affichage.html.twig', array('recommandations' => $recommandation));
    }

    public function ajoutAction() {
        $em = $this->getDoctrine()->getManager();
        $recommandation = new Recommandation();
        $form = $this->createForm(new RecommandationType, $recommandation);
        $request = $this->container->get('request');


        if ($request->getMethod() == 'POST') {

            $form->bind($request);
            if ($form->isValid()) {

                $em->persist($recommandation);
                $recommandation->setNombre(1);
                $em->flush();
                // redirection à la liste d'étudiant aprés la création
                return new RedirectResponse($this->get('router')->generate('affichage'));
            }
        }

        return $this->render('MyAppFrontBundle:Recommandation:ajout.html.twig', array('form' => $form->createView()));
    }

    function searchAction() {
        $em = $this->getDoctrine()->getManager();
        $recommandation = $em->getRepository('MyAppFrontBundle:Recommandation')->findAll(); //rechercher/afficher
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $search = $request->get('search');
            $search1= $request->get('search1');
            if($search == null)
            {
         $recommandation = $em->getRepository('MyAppFrontBundle:Recommandation')->findBy(array("nom" => $search1));        
            }
            else{
            $recommandation = $em->getRepository('MyAppFrontBundle:Recommandation')->findBy(array("adresse" => $search));}
        }
        return $this->render('MyAppFrontBundle:Recommandation:rechercher.html.twig', array('recommandation' => $recommandation));
    }

    
    
    //////stat
    public function chartPieAction() {
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('Chart des recommandations dans notre site Best Trip');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
        $em = $this->container->get('doctrine')->getEntityManager();

        $entities = $em->getRepository('MyAppFrontBundle:Recommandation')->findAll(); // avec query recuperer where estcompagnie=1 vs estcompagnie=0
        $tableauNom = array();
        $tableauNombre = array();
        $tableauAdresse = array();
        $rec = new Recommandation();
        foreach ($entities as $rec) {
            $tableauNom[] = $rec->getNom();
            $tableauNombre[] = $rec->getNombre();
            $tableauAdresse[] = $rec->getAdresse();
        }
        //$adresserec = $em->getRepository('MyAppFrontBundle:Recommandation')->findBy('nombre'); 
        $data = array(
            array('Compagnie', count($tableauNom)),
            array('Lieu', count($tableauAdresse)),
        );
        $ob->series(array(array('type' => 'pie', 'name' => 'Browser share', 'data' => $data)));
        return $this->render('MyAppFrontBundle:Recommandation:pie.html.twig', array(
                    'chart' => $ob
        ));
    }
    
    
       public function chartPieCompagnieAction() {
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('Chart des recommandations des compagnies dans notre site Best Trip');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
    
         $em = $this->container->get('doctrine')->getEntityManager();
       $entities = $em->getRepository('MyAppFrontBundle:Recommandation')->findBy(array('estcompagnie'=>1));
        $data=array();
        $rec = new Recommandation();
        foreach ($entities as $rec) {
          $data[]=array($rec->getNom(),$rec->getNombre());   
        }
        $ob->series(array(array('type' => 'pie', 'name' => 'Browser share', 'data' => $data)));
        return $this->render('MyAppFrontBundle:Recommandation:pie.html.twig', array(
                    'chart' => $ob
        ));
    }
    
      public function chartPieCompagnieuserAction() {
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('Chart des recommandations des compagnies dans notre site Best Trip');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
    
         $em = $this->container->get('doctrine')->getEntityManager();
       $entities = $em->getRepository('MyAppFrontBundle:Recommandation')->findBy(array('estcompagnie'=>1));
        $data=array();
        $rec = new Recommandation();
        foreach ($entities as $rec) {
          $data[]=array($rec->getNom(),$rec->getNombre());   
        }
        $ob->series(array(array('type' => 'pie', 'name' => 'Browser share', 'data' => $data)));
        return $this->render('MyAppFrontBundle:Recommandation:pie2.html.twig', array(
                    'chart' => $ob
        ));
    }
    
    
    public function chartPieLieuuserAction() {
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('Chart des recommandations des lieux dans notre site Best Trip');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
    
         $em = $this->container->get('doctrine')->getEntityManager();
       $entities = $em->getRepository('MyAppFrontBundle:Recommandation')->findBy(array('estcompagnie'=>0));
        $data=array();
        $rec = new Recommandation();
        foreach ($entities as $rec) {
          $data[]=array($rec->getAdresse(),$rec->getNombre());   
        }
        $ob->series(array(array('type' => 'pie', 'name' => 'Browser share', 'data' => $data)));
        return $this->render('MyAppFrontBundle:Recommandation:pie2.html.twig', array(
                    'chart' => $ob
        ));
    }


     public function chartPieLieuAction() {
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('Chart des recommandations des lieux dans notre site Best Trip');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
    
         $em = $this->container->get('doctrine')->getEntityManager();
       $entities = $em->getRepository('MyAppFrontBundle:Recommandation')->findBy(array('estcompagnie'=>0));
        $data=array();
        $rec = new Recommandation();
        foreach ($entities as $rec) {
          $data[]=array($rec->getAdresse(),$rec->getNombre());   
        }
        $ob->series(array(array('type' => 'pie', 'name' => 'Browser share', 'data' => $data)));
        return $this->render('MyAppFrontBundle:Recommandation:pie.html.twig', array(
                    'chart' => $ob
        ));
    }

    
    
}
