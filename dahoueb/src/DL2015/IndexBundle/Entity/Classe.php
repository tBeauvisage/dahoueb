<?php

namespace DL2015\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table(name="classe", indexes={@ORM\Index(name="CIF_1_FK", columns={"CODSER"})})
 * @ORM\Entity(repositoryClass="DL2015\IndexBundle\Entity\ClasseRepository")
 */
class Classe
{
    /**
     * @var string
     *
     * @ORM\Column(name="NUMCLAS", type="string", length=4, options={"fixed" = true}, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numclas;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBCLAS", type="string", length=15, nullable=false)
     */
    private $libclas;

    /**
     * @var string
     *
     * @ORM\Column(name="COEFCLAS", type="decimal", precision=3, scale=2, nullable=false)
     */
    private $coefclas;

    /**
     * @var string
     *
     * @ORM\Column(name="JAUGE", type="string", length=4, options={"fixed" = true}, nullable=false)
     */
    private $jauge;

    /**
     * @var \Serie
     *
     * @ORM\ManyToOne(targetEntity="Serie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CODSER", referencedColumnName="CODSER")
     * })
     */
    private $codser;



    /**
     * Set numclas
     *
     * @param string $numclas
     * @return Classe
     */
    public function setNumclas($numclas)
    {
        $this->numclas = $numclas;

        return $this;
    }

    /**
     * Get numclas
     *
     * @return string 
     */
    public function getNumclas()
    {
        return $this->numclas;
    }

    /**
     * Set libclas
     *
     * @param string $libclas
     * @return Classe
     */
    public function setLibclas($libclas)
    {
        $this->libclas = $libclas;

        return $this;
    }

    /**
     * Get libclas
     *
     * @return string 
     */
    public function getLibclas()
    {
        return $this->libclas;
    }

    /**
     * Set coefclas
     *
     * @param string $coefclas
     * @return Classe
     */
    public function setCoefclas($coefclas)
    {
        $this->coefclas = $coefclas;

        return $this;
    }

    /**
     * Get coefclas
     *
     * @return string 
     */
    public function getCoefclas()
    {
        return $this->coefclas;
    }

    /**
     * Set jauge
     *
     * @param string $jauge
     * @return Classe
     */
    public function setJauge($jauge)
    {
        $this->jauge = $jauge;

        return $this;
    }

    /**
     * Get jauge
     *
     * @return string 
     */
    public function getJauge()
    {
        return $this->jauge;
    }

    /**
     * Set codser
     *
     * @param \DL2015\IndexBundle\Entity\Serie $codser
     * @return Classe
     */
    public function setCodser(\DL2015\IndexBundle\Entity\Serie $codser = null)
    {
        $this->codser = $codser;

        return $this;
    }

    /**
     * Get codser
     *
     * @return \DL2015\IndexBundle\Entity\Serie 
     */
    public function getCodser()
    {
        return $this->codser;
    }
}
