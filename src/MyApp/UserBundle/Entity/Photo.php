<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use \Symfony\Component\HttpFoundation\File\MimeType;

/**
 * Photo
 *
 * @ORM\Table(name="photo", indexes={@ORM\Index(name="id_experience", columns={"id_experience"}), @ORM\Index(name="id_experience_2", columns={"id_experience"})})
 * @ORM\Entity
 */
class Photo
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
     * @ORM\Column(name="description", type="string", length=30, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="integer", nullable=true)
     */
    private $taille;

     /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=200, nullable=false)
     * @Assert\Image(
     *     maxSize = "2M",
     *     mimeTypes = {"image/jpeg", "image/gif", "image/png" ,"image/jpg"},
     *     mimeTypesMessage = "Le fichier choisi ne correspond pas à un fichier valide",
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
     * Set description
     *
     * @param string $description
     * @return Photo
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     * @return Photo
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
     * @return Photo
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
     * @param \MyApp\UserBundle\Entity\Experience $idExperience
     * @return Photo
     */
    public function setIdExperience(\MyApp\UserBundle\Entity\Experience $idExperience = null)
    {
        $this->idExperience = $idExperience;

        return $this;
    }

    /**
     * Get idExperience
     *
     * @return \MyApp\UserBundle\Entity\Experience 
     */
    public function getIdExperience()
    {
        return $this->idExperience;
    }
}
