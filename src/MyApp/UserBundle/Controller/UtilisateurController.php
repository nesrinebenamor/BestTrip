<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use MyApp\UserBundle\Entity\Utilisateur;
use MyApp\UserBundle\Form\UtilisateurType;
use MyApp\UserBundle\Form\UtilisateurRechercheForm;

/**
 * Description of UtilisateurController
 *
 * @author esprit
 */

/**
 * Utilisateur controller.
 *
 * @Route("/utilisateur")
 */
class UtilisateurController extends Controller
{
    
    
  /**
     * Lists all Utilisateur entities.
     *
     * @Route("/", name="utilisateur")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MyAppUserBundle:Utilisateur')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Utilisateur entity.
     *
     * @Route("/", name="utilisateur_create")
     * @Method("POST")
     * @Template("MyAppUserBundle:Utilisateur:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Utilisateur();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('utilisateur_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Utilisateur entity.
     *
     * @param Utilisateur $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Utilisateur $entity)
    {
        $form = $this->createForm(new UtilisateurType(), $entity, array(
            'action' => $this->generateUrl('utilisateur_create'),
            'method' => 'POST',
        ));
        $form->add('image', 'file', array('required' => false))
              ->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Utilisateur entity.
     *
     * @Route("/new", name="utilisateur_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Utilisateur();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Utilisateur entity.
     *
     * @Route("/{id}", name="utilisateur_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppUserBundle:Utilisateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateur entity.');
        }

        $deleteForm = $this->createDeleteForm($entity,$id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Utilisateur entity.
     *
     * @Route("/admin/{id}/update", name="utilisateur_update_admin")
     * @Method("PUT")
     * @Template()
     */
    public function editeAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppUserBundle:Utilisateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateur entity.');
        }

        $editForm = $this->createEditForm($entity,$id);
        $deleteForm = $this->createDeleteForm($entity,$id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
        
     
    }

    /**
    * Creates a form to edit a Utilisateur entity.
    *
    * @param Utilisateur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm($utilisateur,$id)
    {
       $form = $this->createForm(new UtilisateurType(), $utilisateur, array(
           'action' => $this->generateUrl('utilisateur_update_admin1',array('id' => $id)),
            'method' => 'PUT',
        ));
         $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    
    public function ModifierAction($id) {
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository
               ('MyAppUserBundle:Utilisateur')->find($id);
//        $form = $this->createForm(new UtilisateurType()
//                , $utilisateur);
        $form = $this->createEditForm($utilisateur,$id);
        $Request = $this->getRequest();
        if ($form->handleRequest($Request)->isValid()) {

            $em->persist($utilisateur);
            $deleteForm = $this->createDeleteForm($id);
            
            $em->flush();
            return $this->redirect($this->
                 generateUrl("utilisateur"));
        }
        return $this->render
      ('MyAppUserBundle:Utilisateur:edit.html.twig', array('edit_form' => $form->createView() , 'delete_form' => $deleteForm->createView()));
    }
    
    /**
     * Edits an existing Utilisateur entity.
     *
     * @Route("/{id}", name="utilisateur_update")
     * @Method("PUT")
     * @Template("MyAppUserBundle:Utilisateur:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppUserBundle:Utilisateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('utilisateur_show_admin', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Utilisateur entity.
     *
     * @Route("/admin/{id}/delete", name="utilisateur_delete_admin")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
         $em = $this->getDoctrine()->getManager();
        $utilisateur=$em->getRepository('MyAppUserBundle:Utilisateur')->find($id);
        $form = $this->createDeleteForm($utilisateur,$id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MyAppUserBundle:Utilisateur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Utilisateur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('utilisateur'));
    }

    /**
     * Creates a form to delete a Utilisateur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($utilisateur,$id)
    {
        
        $form = $this->createForm(new UtilisateurType(), $utilisateur, array(
           'action' => $this->generateUrl('utilisateur_delete_admin1',array('id' => $id)),
            'method' => 'DELETE',
        ));
          $form ->add('submit', 'submit', array('label' => 'Delete'))
        ;
        return $form;         
    }
    
    
      function supprimerAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $utilisateur=$em->getRepository('MyAppUserBundle:Utilisateur')->find($id);
        $em->remove($utilisateur);
        $em->flush();
        return $this->redirect($this->generateUrl("utilisateur"));
    }
    
    
    public function listerAction()
{
        $em = $this->getDoctrine()->getManager();
        $utilisateurs = $em->getRepository('MyAppUserBundle:Utilisateur')->findAll();
	$form = $this->container->get('form.factory')->create(new UtilisateurRechercheForm());
	return $this->container->get('templating')->renderResponse('MyAppUserBundle:Utilisateur:listerUtilisateur.html.twig', array(
		'utilisateurs' => $utilisateurs,
		'form' => $form->createView()
	));
}
 
public function rechercherUtilisateurAction()
{               
    $request = $this->container->get('request');

    if($request->isXmlHttpRequest())
    {
        
        $motcle = '';
        $motcle = $request->request->get('motcle');

        $em = $this->container->get('doctrine')->getEntityManager();

        if($motcle != '')
        {
               $qb = $em->createQueryBuilder();

               $qb->select('a')
                  ->from('MyAppUserBundle:Utilisateur', 'a')
                  ->where("a.nom LIKE :motcle OR a.prenom LIKE :motcle")
                  ->orderBy('a.nom', 'ASC')
                  ->setParameter('motcle', '%'.$motcle.'%');

               $query = $qb->getQuery();               
               $utilisateur = $query->getResult();
        }
        else {
            $utilisateurs = $em->getRepository('MyAppUserBundle:Utilisateur')->findAll();
        }

        return $this->container->get('templating')->renderResponse('MyAppUserBundle:Utilisateur:listerUtilisateur.html.twig', array(
            'utilisateurs' => $utilisateurs
            ));
    }
    else {
        return $this->listerAction();
    }
}

  function modifierUtilisateurAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $utilisateur=$em->getRepository('MyAppUserBundle:Utilisateur')->find($id);
        $form=$this->createForm(new UtilisateurType,$utilisateur);
        $request=$this->getRequest();
       if($form->handleRequest($request)->isValid())
       {
        $em->persist($utilisateur);   
        $em->flush();
        return $this->redirect($this->generateUrl("utilisateur"));
       }
        return $this->render('MyAppUserBundle:Utilisateur:edite.html.twig',array('form'=>$form->createView()));     
    }




}
