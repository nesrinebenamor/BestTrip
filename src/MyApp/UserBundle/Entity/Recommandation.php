<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recommandation
 *
 * @ORM\Table(name="recommandation")
 * @ORM\Entity
 */
class Recommandation
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
     * @ORM\Column(name="contenu", type="string", length=30, nullable=false)
     */
    private $contenu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EstCompagnie", type="boolean", nullable=false)
     */
    private $estcompagnie;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=30, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=100, nullable=true)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nombre", type="integer", nullable=true)
     */
    private $nombre = '1';

   
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
     * @return Recommandation
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
     * Set estcompagnie
     *
     * @param boolean $estcompagnie
     * @return Recommandation
     */
    public function setEstcompagnie($estcompagnie)
    {
        $this->estcompagnie = $estcompagnie;

        return $this;
    }

    /**
     * Get estcompagnie
     *
     * @return boolean 
     */
    public function getEstcompagnie()
    {
        return $this->estcompagnie;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Recommandation
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Recommandation
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set nombre
     *
     * @param integer $nombre
     * @return Recommandation
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return integer 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    
}
