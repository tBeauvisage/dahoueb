<?php

namespace DL2015\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Licencie
 *
 * @ORM\Table(name="licencie")
 * @ORM\Entity(repositoryClass="DL2015\IndexBundle\Entity\LicencieRepository")
 */
class Licencie
{
    /**
     * @var string
     *
     * @ORM\Column(name="NUMLIC", type="decimal", precision=5, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numlic;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMLIC", type="string", length=15, nullable=false)
     */
    private $nomlic;

    /**
     * @var string
     *
     * @ORM\Column(name="PTSFFV", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $ptsffv;

    /**
     * @var integer
     *
     * @ORM\Column(name="ANNLIC", type="integer", nullable=false)
     */
    private $annlic;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATNAISS", type="date", nullable=false)
     */
    private $datnaiss;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Participe", mappedBy="numlic")
     */
    private $codepar;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codepar = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set numlic
     *
     * @param string $numlic
     * @return Licencie
     */
    public function setNumlic($numlic)
    {
        $this->numlic = $numlic;

        return $this;
    }

    /**
     * Get numlic
     *
     * @return string 
     */
    public function getNumlic()
    {
        return $this->numlic;
    }

    /**
     * Set nomlic
     *
     * @param string $nomlic
     * @return Licencie
     */
    public function setNomlic($nomlic)
    {
        $this->nomlic = $nomlic;

        return $this;
    }

    /**
     * Get nomlic
     *
     * @return string 
     */
    public function getNomlic()
    {
        return $this->nomlic;
    }

    /**
     * Set ptsffv
     *
     * @param string $ptsffv
     * @return Licencie
     */
    public function setPtsffv($ptsffv)
    {
        $this->ptsffv = $ptsffv;

        return $this;
    }

    /**
     * Get ptsffv
     *
     * @return string 
     */
    public function getPtsffv()
    {
        return $this->ptsffv;
    }

    /**
     * Set annlic
     *
     * @param integer $annlic
     * @return Licencie
     */
    public function setAnnlic($annlic)
    {
        $this->annlic = $annlic;

        return $this;
    }

    /**
     * Get annlic
     *
     * @return integer 
     */
    public function getAnnlic()
    {
        return $this->annlic;
    }

    /**
     * Set datnaiss
     *
     * @param \DateTime $datnaiss
     * @return Licencie
     */
    public function setDatnaiss($datnaiss)
    {
        $this->datnaiss = $datnaiss;

        return $this;
    }

    /**
     * Get datnaiss
     *
     * @return \DateTime 
     */
    public function getDatnaiss()
    {
        return $this->datnaiss;
    }

    /**
     * Add codepar
     *
     * @param \DL2015\IndexBundle\Entity\Participe $codepar
     * @return Licencie
     */
    public function addCodepar(\DL2015\IndexBundle\Entity\Participe $codepar)
    {
        $this->codepar[] = $codepar;

        return $this;
    }

    /**
     * Remove codepar
     *
     * @param \DL2015\IndexBundle\Entity\Participe $codepar
     */
    public function removeCodepar(\DL2015\IndexBundle\Entity\Participe $codepar)
    {
        $this->codepar->removeElement($codepar);
    }

    /**
     * Get codepar
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCodepar()
    {
        return $this->codepar;
    }
}
