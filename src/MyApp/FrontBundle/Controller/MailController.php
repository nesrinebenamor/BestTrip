<?php

namespace MyApp\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\FrontBundle\Entity\Mail;
use MyApp\FrontBundle\Form\MailType;

class MailController extends Controller {

    public function indexAction() {

        return $this->render('MyAppFrontBundle:Default:mail.html.twig', array());
    }

    public function sendMailAction($personne) {

//        $liste_mail = array("");
//        $em = $this->getDoctrine()->getManager();
//        $query = $em->createQuery("Select u.email from MyAppUserBundle:Utilisateur u");
//        $users = $query->getResult();
//        foreach ($users as $user) {
//            array_push($liste_mail, $user->getEmail);
//        }
//
        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
            $sql = "SELECT email FROM utilisateur";
            $message = $Request->get('text');
            $subject = $Request->get('nom');
            $email = $Request->get('from');
            $mailer = $this->container->get('mailer');
            $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                    ->setUsername('besttrippidev@gmail.com')
                    ->setPassword('esprittd123456789');
            $mailer = \Swift_Mailer::newInstance($transport);
            $mail = \Swift_Message::newInstance('Test')
                    ->setSubject($subject)
                    ->setFrom('besttrippidev@gmail.com')
                    ->setTo($personne)
                    ->setBody("http://localhost/besttrip/web/app_dev.php/newsletter");
           $this->get('mailer')->send($mail);
            echo("<script>alert(' mail : " . $personne . "')</script>");
        }

        return $this->render('MyAppFrontBundle:Default:mail.html.twig');
    }

    public function newAction() {

        $mail = new Mail();
        $em = $this->getDoctrine()->getManager();
        //$form= $this->container->get('form.factory')->create(new MailType(), $mail);
        $newsletter = $em->getRepository('MyAppFrontBundle:Newsletter')->findAll();
        $request = $this->getRequest();

        $liste_mail = array();
        //$em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("Select u.email from MyAppFrontBundle:Utilisateur u");
        $users = $query->getResult();

        foreach ($users as $user) {
            array_push($liste_mail, $user['email']);
        }

        if ($request->getMethod() == 'POST') {

            //$form->bind($request);
            //if ($form->isValid()) {
            //$this->sendMailAction('your_email@gmail.com', $mail-> getFrom(), $mail->getNom(), $mail->getText());
            foreach ($liste_mail as $email) {
                $this->sendMailAction($email);
            }
        }

        //return $this->render('MyAppFrontBundle:Default:new.html.twig', array('form' =>$form->createView())); 

        return $this->render('MyAppFrontBundle:NewsletterD:listNewsletter.html.twig', array('newsletter' => $newsletter));
    }

}
