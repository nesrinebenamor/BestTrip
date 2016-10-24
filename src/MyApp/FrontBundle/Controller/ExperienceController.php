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
use \Symfony\Component\HttpFoundation\Response;
use \Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Experience controller.
 *
 * @Route("/experience")
 */
class ExperienceController extends Controller {

    /**
     * Lists all Experience entities.
     *
     * @Route("/", name="experience")
     * @Method("GET")
     * @Template()
     */
    function indexAction() {
        return $this->render('MyAppFrontBundle:Experience:accueil.html.twig');
    }

    function createAction() {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $id = $user->getId();
        
        $em = $this->getDoctrine()->getManager();

        $experience = new Experience();
        $form = $this->createForm(new ExperienceType(), $experience);
        $photo = new Photo();
        $video = new Video();
        $form2 = $this->createForm(new VideoType(), $video);
        $form1 = $this->createForm(new PhotoType(), $photo);
        $photo->setSource("");
        $form1->setData($photo);
        $video->setSource("");
        $video->setTaille(0);
        $form->setData($video);
        //$experience->setIdUtilisateur($user);
       
        if ($this->getRequest()->getMethod() == 'POST') {
            $form->handleRequest($this->getRequest());
            $form1->handleRequest($this->getRequest());
            $form2->handleRequest($this->getRequest());
            if ($form->isValid() && $form1->isValid() && $form2->isValid()) {

                //    $files=$form1['source'];
                //    foreach ($files as $n)
                //{
                //     $uploaded_file = $n->getData();

                $uploaded_file = $form1['source']->getData();
                $uploaded_video = $form2['source']->getData();
                if ($uploaded_file) {
                    $image = PhotoType::processImage($uploaded_file, $photo);
                    $photo->setSource($image);
                }
                if ($uploaded_video) {
                    $vid = VideoType::processVideo($uploaded_video, $video);
                    $video->setSource($vid);
                }
                //}
                $em->persist($experience);

                $photo->setIdExperience($experience);
                $video->setIdExperience($experience);

                $em->persist($photo);
                $em->persist($video);
                $em->flush();
                
                $query = $this->getDoctrine()->getEntityManager()
                    ->createQuery("UPDATE MyAppFrontBundle:Experience e SET e.idUtilisateur = :id WHERE e.id = :idExp")
                    ->setParameter('id', $id)
                    ->setParameter('idExp', $experience)
                    ->execute();

                return $this->redirect($this->generateURL('experience_show'));
            }
        }
        return $this->render
                        ('MyAppFrontBundle:Experience:new.html.twig', array('form' => $form->createView(), 'form1' => $form1->createView(), 'form2' => $form2->createView()));
    }

    public function detailAction($id) {
        $em = $this->getDoctrine()->getManager();
        $photo = $em->getRepository
                        ('MyAppFrontBundle:Photo')->findBy(array("idExperience" => $id));
        $video = $em->getRepository
                        ('MyAppFrontBundle:Video')->findBy(array("idExperience" => $id));
        $commentaire = $em->getRepository
                        ('MyAppFrontBundle:Commentaire')->findBy(array("idExperience" => $id));
        $experience = $em->getRepository
                        ('MyAppFrontBundle:Experience')->findBy(array("id" => $id));
        return
                $this->render
                        ('MyAppFrontBundle:Experience:showDetail.html.twig', array('photo' => $photo, 'video' => $video, 'experience' => $experience, 'commentaire' => $commentaire));
    }

    /**
     * Finds and displays a Experience entity.
     *
     * @Route("/{id}", name="experience_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction() {
        $em = $this->getDoctrine()->getManager();
        $experience = $em->getRepository('MyAppFrontBundle:Experience')->findAll();

        return
                $this->render('MyAppFrontBundle:Experience:show.html.twig', array('experience' => $experience));
    }

    public function commenterAction($id) {

        $em = $this->getDoctrine()->getManager();
        $experience = $em->getRepository('MyAppFrontBundle:Experience')->findAll();

        $commentaire = new Commentaire();
        //$ex=new Experience();
        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
            $contenu = $Request->get('com');

            $commentaire->setContenu($contenu);
            $em->persist($commentaire);
            $em->flush();

            $query = $this->getDoctrine()->getEntityManager()
                    ->createQuery("UPDATE MyAppFrontBundle:Commentaire c SET c.idExperience = :id WHERE c.id = :idCommentaire")
                    ->setParameter('id', $id)
                    ->setParameter('idCommentaire', $commentaire)
                    ->execute();


            // return new Response("sahyt");
        }
        return
                $this->render('MyAppFrontBundle:Experience:show.html.twig', array('experience' => $experience));
    }

    public function showMyExperienceAction($id) {
        $em = $this->getDoctrine()->getManager();
        $experience = $em->getRepository('MyAppFrontBundle:Experience')->findBy(array("idUtilisateur" => $id));
        return
                $this->render
                        ('MyAppFrontBundle:Experience:showMyExperience.html.twig', array('experience' => $experience));
    }

    public function supprimerAction($id) {
         $user = $this->container->get('security.context')->getToken()->getUser();
        $id = $user->getId();
        $em = $this->getDoctrine()->getManager();
        $experience = $em->getRepository
                        ('MyAppFrontBundle:Experience')
                ->find($id);
        $em->remove($experience);
        $em->flush();
        return $this->redirect($this->generateURL('my_experiences', array('id' => $id)));
    }

    public function modifierAction($id) {
        $em = $this->getDoctrine()->getManager();
        $experience = $em->getRepository('MyAppFrontBundle:Experience')->find($id);
        $form = $this->createForm(new ExpType, $experience);
        $Request = $this->getRequest();
        if ($form->handleRequest($Request)->isValid()) {

            $em->persist($experience);
            $em->flush();
            return $this->redirect($this->generateURL('my_experiences', array('id' => 14)));
        }
        return $this->render('MyAppFrontBundle:Experience:modifier.html.twig', array('form' => $form->createView()));
    }

    public function RechercheAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $experience="";
        if ($request->getMethod() == "POST") {
            $pays = $request->get('pays');
            $cat = $request->get('categorie');
            $min = $request->get('min');
            $max = $request->get('max');
            $date= $request->get('date');
            

           // $experience = $em->getRepository('MyAppFrontBundle:Experience')->findCherch($pays,$cat,$min,$max,$date);
            $experience = $em->getRepository('MyAppFrontBundle:Experience')->findBy(array("pays" => $pays));
            //return $this->redirect($this->generateUrl('experience_show',array('experience' => $experience)));
           return $this->redirect($this->generateUrl('show_chercher_experiences', array('pays' => $pays, 'categorie' => $cat, 'min' => $min, 'max' => $max, 'date'=> $date)));
        }
        return $this->render('MyAppFrontBundle:Experience:accueil.html.twig');
    }

    public function RechercheShowAction($pays,$categorie,$min,$max,$date) {
        $em = $this->getDoctrine()->getManager();
        //$experience = $em->getRepository('MyAppFrontBundle:Experience')->findBy(array("pays" => $pays));
      //$experience = $em->getRepository('MyAppFrontBundle:Experience')->findCherch($pays,$categorie,$min,$max,$date);
     $query1 = $em->createQuery("SELECT e FROM MyAppFrontBundle:Experience e where (e.pays like '%".$pays."%' and e.type like '%".$categorie."%' and (e.depense between ".$min." and ".$max.")) order by e.id DESC"); 
        
     $experience = $query1->getResult();
      return
                $this->render('MyAppFrontBundle:Experience:show.html.twig', array('experience' => $experience));
    }
    
//   public function ExperienceNews()
//   {
//       $em = $this->getDoctrine()->getManager();
//        //$experience = $em->getRepository('MyAppFrontBundle:Experience')->findBy(array("pays" => $pays));
//      //$experience = $em->getRepository('MyAppFrontBundle:Experience')->findCherch($pays,$categorie,$min,$max,$date);
//     $query1 = $em->createQuery("SELECT e FROM MyAppFrontBundle:Experience e where (e.pays like '%".$pays."%' and e.type like '%".$categorie."%' and (e.depense between ".$min." and ".$max.")) order by e.id DESC"); 
//        
//     $experience = $query1->getResult();
//      return
//                $this->render('MyAppFrontBundle:Experience:show.html.twig', array('experience' => $experience));
//   }
}
