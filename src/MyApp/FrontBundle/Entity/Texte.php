<?php

namespace MyApp\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Texte
 *
 * @ORM\Table(name="texte", indexes={@ORM\Index(name="Id_experience", columns={"Id_experience"})})
 * @ORM\Entity
 */
class Texte
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
     * @ORM\Column(name="Contenu", type="string", length=200, nullable=false)
     */
    private $contenu;

    /**
     * @var \Experience
     *
     * @ORM\ManyToOne(targetEntity="Experience")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_experience", referencedColumnName="Id")
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
     * Set contenu
     *
     * @param string $contenu
     * @return Texte
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set idExperience
     *
     * @param \MyApp\FrontBundle\Entity\Experience $idExperience
     * @return Texte
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
