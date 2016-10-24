<?php

namespace MyApp\UserBundle\Controller;

/**
 * Description of PageController
 *
 * @author esprit
 */

use MyApp\UserBundle\Entity\Enquiry;
use MyApp\UserBundle\Form\EnquiryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function contactAction()
{
    $enquiry = new Enquiry();
    $form = $this->createForm(new EnquiryType(), $enquiry);

    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
        $form->bind($request);

        if ($form->isValid()) {
            $message = \Swift_Message::newInstance()
            ->setSubject('Contact enquiry from best trip')
            ->setFrom('enquiries@symblog.co.uk')
            ->setTo($this->container->getParameter('myapp_user.emails.contact_email'))
            ->setBody($this->renderView('MyAppUserBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));
        $this->get('mailer')->send($message);

        $this->get('session')->getFlashBag()->add('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');

        // Redirect - This is important to prevent users re-posting
        // the form if they refresh the page
            return $this->redirect($this->generateUrl('MyApp_user_contact'));
        }
    }

    return $this->render('MyAppUserBundle:Page:contact.html.twig', array(
        'form' => $form->createView()
    ));
}

public function accueilAction()
    {
        return $this->render('MyAppUserBundle:Page:accueil.html.twig');
    }
    
public function accueilAdminAction()
    {
        return $this->render('MyAppUserBundle:Page:accueilAdmin.html.twig');
    }


}
