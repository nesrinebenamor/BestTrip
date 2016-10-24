<?php

namespace MyApp\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Discussion
 *
 * @ORM\Table(name="discussion")
 * @ORM\Entity
 */
class Discussion
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
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=30, nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_utilisateur1", type="integer", nullable=true)
     */
    private $idUtilisateur1;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_utilisateur2", type="integer", nullable=true)
     */
    private $idUtilisateur2;



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
     * @return Discussion
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
     * Set date
     *
     * @param string $date
     * @return Discussion
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idUtilisateur1
     *
     * @param integer $idUtilisateur1
     * @return Discussion
     */
    public function setIdUtilisateur1($idUtilisateur1)
    {
        $this->idUtilisateur1 = $idUtilisateur1;

        return $this;
    }

    /**
     * Get idUtilisateur1
     *
     * @return integer 
     */
    public function getIdUtilisateur1()
    {
        return $this->idUtilisateur1;
    }

    /**
     * Set idUtilisateur2
     *
     * @param integer $idUtilisateur2
     * @return Discussion
     */
    public function setIdUtilisateur2($idUtilisateur2)
    {
        $this->idUtilisateur2 = $idUtilisateur2;

        return $this;
    }

    /**
     * Get idUtilisateur2
     *
     * @return integer 
     */
    public function getIdUtilisateur2()
    {
        return $this->idUtilisateur2;
    }
}
