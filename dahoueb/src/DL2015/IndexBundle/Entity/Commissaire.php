<?php

namespace DL2015\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commissaire
 *
 * @ORM\Table(name="commissaire")
 * @ORM\Entity(repositoryClass="DL2015\IndexBundle\Entity\CommissaireRepository")
 */
class Commissaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CODCOM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codcom;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMCOM", type="string", length=15, nullable=false)
     */
    private $nomcom;

    /**
     * @var string
     *
     * @ORM\Column(name="PRECOM", type="string", length=15, nullable=false)
     */
    private $precom;

    /**
     * @var string
     *
     * @ORM\Column(name="MAILCOM", type="string", length=25, nullable=false)
     */
    private $mailcom;

    /**
     * @var string
     *
     * @ORM\Column(name="COMITECOM", type="string", length=25, nullable=false)
     */
    private $comitecom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Regate", mappedBy="codcom")
     */
    private $numreg;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->numreg = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set codcom
     *
     * @param integer $codcom
     * @return Commissaire
     */
    public function setCodcom($codcom)
    {
        $this->codcom = $codcom;

        return $this;
    }

    /**
     * Get codcom
     *
     * @return integer 
     */
    public function getCodcom()
    {
        return $this->codcom;
    }

    /**
     * Set nomcom
     *
     * @param string $nomcom
     * @return Commissaire
     */
    public function setNomcom($nomcom)
    {
        $this->nomcom = $nomcom;

        return $this;
    }

    /**
     * Get nomcom
     *
     * @return string 
     */
    public function getNomcom()
    {
        return $this->nomcom;
    }

    /**
     * Set precom
     *
     * @param string $precom
     * @return Commissaire
     */
    public function setPrecom($precom)
    {
        $this->precom = $precom;

        return $this;
    }

    /**
     * Get precom
     *
     * @return string 
     */
    public function getPrecom()
    {
        return $this->precom;
    }

    /**
     * Set mailcom
     *
     * @param string $mailcom
     * @return Commissaire
     */
    public function setMailcom($mailcom)
    {
        $this->mailcom = $mailcom;

        return $this;
    }

    /**
     * Get mailcom
     *
     * @return string 
     */
    public function getMailcom()
    {
        return $this->mailcom;
    }

    /**
     * Set comitecom
     *
     * @param string $comitecom
     * @return Commissaire
     */
    public function setComitecom($comitecom)
    {
        $this->comitecom = $comitecom;

        return $this;
    }

    /**
     * Get comitecom
     *
     * @return string 
     */
    public function getComitecom()
    {
        return $this->comitecom;
    }

    /**
     * Add numreg
     *
     * @param \DL2015\IndexBundle\Entity\Regate $numreg
     * @return Commissaire
     */
    public function addNumreg(\DL2015\IndexBundle\Entity\Regate $numreg)
    {
        $this->numreg[] = $numreg;

        return $this;
    }

    /**
     * Remove numreg
     *
     * @param \DL2015\IndexBundle\Entity\Regate $numreg
     */
    public function removeNumreg(\DL2015\IndexBundle\Entity\Regate $numreg)
    {
        $this->numreg->removeElement($numreg);
    }

    /**
     * Get numreg
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNumreg()
    {
        return $this->numreg;
    }
}
