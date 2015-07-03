<?php

namespace DL2015\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voilier
 *
 * @ORM\Table(name="voilier", indexes={@ORM\Index(name="CIF_2_FK", columns={"NUMCLAS"}), @ORM\Index(name="APPARTENIR_FK", columns={"IDMBR"})})
 * @ORM\Entity(repositoryClass="DL2015\IndexBundle\Entity\VoilierRepository")
 */
class Voilier
{
    /**
     * @var string
     *
     * @ORM\Column(name="NUMVOIL", type="decimal", precision=4, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numvoil;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMVOIL", type="string", length=15, nullable=false)
     */
    private $nomvoil;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBRPTS", type="integer", nullable=true)
     */
    private $nbrpts;

    /**
     * @var \Proprietaire
     *
     * @ORM\ManyToOne(targetEntity="Proprietaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDMBR", referencedColumnName="IDMBR")
     * })
     */
    private $idmbr;

    /**
     * @var \Classe
     *
     * @ORM\ManyToOne(targetEntity="Classe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NUMCLAS", referencedColumnName="NUMCLAS")
     * })
     */
    private $numclas;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Challenge", inversedBy="numvoil")
     * @ORM\JoinTable(name="classer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="NUMVOIL", referencedColumnName="NUMVOIL")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="CDOCHAL", referencedColumnName="CDOCHAL")
     *   }
     * )
     */
    private $cdochal;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cdochal = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set numvoil
     *
     * @param string $numvoil
     * @return Voilier
     */
    public function setNumvoil($numvoil)
    {
        $this->numvoil = $numvoil;

        return $this;
    }

    /**
     * Get numvoil
     *
     * @return string 
     */
    public function getNumvoil()
    {
        return $this->numvoil;
    }

    /**
     * Set nomvoil
     *
     * @param string $nomvoil
     * @return Voilier
     */
    public function setNomvoil($nomvoil)
    {
        $this->nomvoil = $nomvoil;

        return $this;
    }

    /**
     * Get nomvoil
     *
     * @return string 
     */
    public function getNomvoil()
    {
        return $this->nomvoil;
    }

    /**
     * Set nbrpts
     *
     * @param integer $nbrpts
     * @return Voilier
     */
    public function setNbrpts($nbrpts)
    {
        $this->nbrpts = $nbrpts;

        return $this;
    }

    /**
     * Get nbrpts
     *
     * @return integer 
     */
    public function getNbrpts()
    {
        return $this->nbrpts;
    }

    /**
     * Set idmbr
     *
     * @param \DL2015\IndexBundle\Entity\Proprietaire $idmbr
     * @return Voilier
     */
    public function setIdmbr(\DL2015\IndexBundle\Entity\Proprietaire $idmbr = null)
    {
        $this->idmbr = $idmbr;

        return $this;
    }

    /**
     * Get idmbr
     *
     * @return \DL2015\IndexBundle\Entity\Proprietaire 
     */
    public function getIdmbr()
    {
        return $this->idmbr;
    }

    /**
     * Set numclas
     *
     * @param \DL2015\IndexBundle\Entity\Classe $numclas
     * @return Voilier
     */
    public function setNumclas(\DL2015\IndexBundle\Entity\Classe $numclas = null)
    {
        $this->numclas = $numclas;

        return $this;
    }

    /**
     * Get numclas
     *
     * @return \DL2015\IndexBundle\Entity\Classe 
     */
    public function getNumclas()
    {
        return $this->numclas;
    }

    /**
     * Add cdochal
     *
     * @param \DL2015\IndexBundle\Entity\Challenge $cdochal
     * @return Voilier
     */
    public function addCdochal(\DL2015\IndexBundle\Entity\Challenge $cdochal)
    {
        $this->cdochal[] = $cdochal;

        return $this;
    }

    /**
     * Remove cdochal
     *
     * @param \DL2015\IndexBundle\Entity\Challenge $cdochal
     */
    public function removeCdochal(\DL2015\IndexBundle\Entity\Challenge $cdochal)
    {
        $this->cdochal->removeElement($cdochal);
    }

    /**
     * Get cdochal
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCdochal()
    {
        return $this->cdochal;
    }
}
