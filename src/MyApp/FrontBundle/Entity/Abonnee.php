<?php

namespace MyApp\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnee
 *
 * @ORM\Table(name="abonnee")
 * @ORM\Entity
 */
class Abonnee
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_utilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUtilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_newsletter", type="integer", nullable=false)
     */
    private $idNewsletter;



    /**
     * Get idUtilisateur
     *
     * @return integer 
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set idNewsletter
     *
     * @param integer $idNewsletter
     * @return Abonnee
     */
    public function setIdNewsletter($idNewsletter)
    {
        $this->idNewsletter = $idNewsletter;

        return $this;
    }

    /**
     * Get idNewsletter
     *
     * @return integer 
     */
    public function getIdNewsletter()
    {
        return $this->idNewsletter;
    }
}
