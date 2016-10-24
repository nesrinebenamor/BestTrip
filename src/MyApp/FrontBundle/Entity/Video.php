<?php

namespace MyApp\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use \Symfony\Component\HttpFoundation\File\MimeType;
/**
 * Video
 *
 * @ORM\Table(name="video", indexes={@ORM\Index(name="id_experience", columns={"id_experience"})})
 * @ORM\Entity
 */
class Video
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=255, nullable=false)
     */
    private $extension;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="integer", nullable=true)
     */
    private $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=3000, nullable=false)
     * @Assert\File(
     *     maxSize = "6000000M",
     *     mimeTypes = {"video/avi", "video/mpeg", "video/vosaic", "video/quicktime", "video/vivo", "video/mp4"},
     *     mimeTypesMessage = "ce format de video est inconnu",
     *     maxSizeMessage = "fichier trop volumineux"
     * )
     */
    private $source;

    /**
     * @var \Experience
     *
     * @ORM\ManyToOne(targetEntity="Experience")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_experience", referencedColumnName="Id")
     * })
     */
    private $idExperience;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set extension
     *
     * @param string $extension
     * @return Video
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string 
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     * @return Video
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return integer 
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return Video
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set idExperience
     *
     * @param \MyApp\FrontBundle\Entity\Experience $idExperience
     * @return Video
     */
    public function setIdExperience(\MyApp\FrontBundle\Entity\Experience $idExperience = null)
    {
        $this->idExperience = $idExperience;

        return $this;
    }

    /**
     * Get idExperience
     *
     * @return \MyApp\FrontBundle\Entity\Experience 
     */
    public function getIdExperience()
    {
        return $this->idExperience;
    }
}
