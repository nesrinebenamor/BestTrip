<?php

namespace MyApp\FrontBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class Utilisateur extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $nom;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $prenom;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @var string
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $image;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $estadministrateur;

    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;
    
    /**
     * @var string
     * @ORM\Column(name="facebook_id", type="string", length=255, nullable=true)
     */
    protected $facebookId;
    
     /**
     * @var string
     *@ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true)
     */
    private $facebookAccessToken;
    
    function getFacebookId() {
        return $this->facebookId;
    }

    function setFacebookId($facebookId) {
        $this->facebookId = $facebookId;
    }
    

    public function __construct() {
        parent::__construct();
// your own logic
    }
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getAge() {
        return $this->age;
    }

    function getImage() {
        return $this->image;
    }

    function getEstadministrateur() {
        return $this->estadministrateur;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setAge($age) {
        $this->age = $age;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setEstadministrateur($estadministrateur) {
        $this->estadministrateur = $estadministrateur;
    }

   
     public function getAbsolutePath()
    {
        return null === $this->image ? null : $this->getUploadRootDir().'/'.$this->image;
    }

    public function getWebPath()
    {
        return null === $this->image ? null : $this->getUploadDir().'/'.$this->image;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads/photos';
    }
    
    
    public function upload()
{
    // la propriété « file » peut être vide si le champ n'est pas requis
    if (null === $this->file) {
        return;
    }

    // utilisez le nom de fichier original ici mais
    // vous devriez « l'assainir » pour au moins éviter
    // quelconques problèmes de sécurité

    // la méthode « move » prend comme arguments le répertoire cible et
    // le nom de fichier cible où le fichier doit être déplacé
    $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());

    // définit la propriété « path » comme étant le nom de fichier où vous
    // avez stocké le fichier
    $this->image = $this->file->getClientOriginalName();

    // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
    $this->file = null;
}

}

?>