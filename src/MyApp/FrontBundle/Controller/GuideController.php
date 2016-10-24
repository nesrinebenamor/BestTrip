<?php

namespace MyApp\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MyApp\FrontBundle\Entity\Guide;
use MyApp\FrontBundle\Form\GuideType;

/**
 * Guide controller.
 *
 */
class GuideController extends Controller
{

    /**
     * Lists all Guide entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MyAppFrontBundle:Guide')->findAll();

        return $this->render('MyAppFrontBundle:Guide:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Guide entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Guide();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Guide_show', array('id' => $entity->getId())));
        }

        return $this->render('MyAppFrontBundle:Guide:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Guide entity.
     *
     * @param Guide $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Guide $entity)
    {
        $form = $this->createForm(new GuideType(), $entity, array(
            'action' => $this->generateUrl('Guide_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Guide entity.
     *
     */
    public function newAction()
    {
        $entity = new Guide();
        $form   = $this->createCreateForm($entity);

        return $this->render('MyAppFrontBundle:Guide:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
           
        ));
    }

    /**
     * Finds and displays a Guide entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppFrontBundle:Guide')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Guide entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyAppFrontBundle:Guide:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    
    public function modifierAction($id) {
        $em = $this->container->get('doctrine')->getManager();
        $guide = $em->getRepository('MyAppFrontBundle:Guide')->find($id);
        $form = $this->container->get('form.factory')->create(new GuideType(), $guide);
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $form->bind($request);
            if ($form->isValid()) {
                $em->persist($guide);
                $em->flush();
                return $this->redirect($this->generateUrl("Guide"));
            }
        }
        return $this->render('MyAppFrontBundle:Guide:edit.html.twig', array
                    ("Form" => $form->createView()));
    }
    /**
     * Displays a form to edit an existing Guide entity.
     *
     */
//    public function editAction($id)
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('MyAppFrontBundle:Guide')->find($id);
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find Guide entity.');
//        }
//
//        $editForm = $this->createEditForm($entity);
//        $deleteForm = $this->createDeleteForm($id);
//
//        return $this->render('MyAppFrontBundle:Guide:edit.html.twig', array(
//            'entity'      => $entity,
//            'edit_form'   => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
//        ));
//        
//    }
//
//    /**
//    * Creates a form to edit a Guide entity.
//    *
//    * @param Guide $entity The entity
//    *
//    * @return \Symfony\Component\Form\Form The form
//    */
//    private function createEditForm(Guide $entity)
//    {
//        $form = $this->createForm(new GuideType(), $entity, array(
//            'action' => $this->generateUrl('Guide_update', array('id' => $entity->getId())),
//            'method' => 'PUT',
//        ));
//
//        $form->add('submit', 'submit', array('label' => 'Update'));
//
//        return $form;
//    }
//    /**
//     * Edits an existing Guide entity.
//     *
//     */
//    public function updateAction(Request $request, $id)
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('MyAppFrontBundle:Guide')->find($id);
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find Guide entity.');
//        }
//
//        $deleteForm = $this->createDeleteForm($id);
//        $editForm = $this->createEditForm($entity);
//        $editForm->handleRequest($request);
//
//        if ($editForm->isValid()) {
//            $em->flush();
//
//            return $this->redirect($this->generateUrl('Guide_edit', array('id' => $id)));
//        }
//
//        return $this->render('MyAppFrontBundle:Guide:edit.html.twig', array(
//            'entity'      => $entity,
//            'edit_form'   => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
//        ));
//    }
    /**
     * Deletes a Guide entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MyAppFrontBundle:Guide')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Guide entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Guide'));
    }

    /**
     * Creates a form to delete a Guide entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Guide_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
     
}
