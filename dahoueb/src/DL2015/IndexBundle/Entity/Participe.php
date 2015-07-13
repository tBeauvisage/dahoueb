<?php

namespace DL2015\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participe
 *
 * @ORM\Table(name="participe", indexes={@ORM\Index(name="FK1_participe_voilier", columns={"NUMVOIL"}), @ORM\Index(name="FK2_participe_regate", columns={"NUMREG"}), @ORM\Index(name="FK3_participe_licencie", columns={"NUMLICSKI"})})
 * @ORM\Entity(repositoryClass="DL2015\IndexBundle\Entity\ParticipeRepository")
 */
class Participe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CODEPAR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codepar;

    /**
     * @var integer
     *
     * @ORM\Column(name="STATUT", type="integer", nullable=false)
     */
    private $statut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEINSC", type="datetime", nullable=false)
     */
    private $dateinsc;

    /**
     * @var string
     *
     * @ORM\Column(name="TPSREEL", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $tpsreel;

    /**
     * @var string
     *
     * @ORM\Column(name="CODEDEC", type="string", length=1, options={"fixed" = true}, nullable=true)
     */
    private $codedec;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLACE", type="integer", nullable=true)
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="TPSCOMP", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $tpscomp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HEURARR", type="time", nullable=true)
     */
    private $heurarr;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMPORT", type="string", length=10, nullable=false)
     */
    private $numport;

    /**
     * @var \Voilier
     *
     * @ORM\ManyToOne(targetEntity="Voilier", inversedBy="numvoil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NUMVOIL", referencedColumnName="NUMVOIL")
     * })
     */
    private $numvoil;

    /**
     * @var \Regate
     *
     * @ORM\ManyToOne(targetEntity="Regate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NUMREG", referencedColumnName="NUMREG")
     * })
     */
    private $numreg;

    /**
     * @var \Licencie
     *
     * @ORM\ManyToOne(targetEntity="Licencie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NUMLICSKI", referencedColumnName="NUMLIC")
     * })
     */
    private $numlicski;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Licencie", inversedBy="codepar")
     * @ORM\JoinTable(name="equipage",
     *   joinColumns={
     *     @ORM\JoinColumn(name="CODEPAR", referencedColumnName="CODEPAR")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="NUMLIC", referencedColumnName="NUMLIC")
     *   }
     * )
     */
    private $numlic;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->numlic = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set codepar
     *
     * @param integer $codepar
     * @return Participe
     */
    public function setCodepar($codepar)
    {
        $this->codepar = $codepar;

        return $this;
    }

    /**
     * Get codepar
     *
     * @return integer 
     */
    public function getCodepar()
    {
        return $this->codepar;
    }

    /**
     * Set statut
     *
     * @param integer $statut
     * @return Participe
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return integer 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set dateinsc
     *
     * @param \DateTime $dateinsc
     * @return Participe
     */
    public function setDateinsc($dateinsc)
    {
        $this->dateinsc = $dateinsc;

        return $this;
    }

    /**
     * Get dateinsc
     *
     * @return \DateTime 
     */
    public function getDateinsc()
    {
        return $this->dateinsc;
    }

    /**
     * Set tpsreel
     *
     * @param string $tpsreel
     * @return Participe
     */
    public function setTpsreel($tpsreel)
    {
        $this->tpsreel = $tpsreel;

        return $this;
    }

    /**
     * Get tpsreel
     *
     * @return string 
     */
    public function getTpsreel()
    {
        return $this->tpsreel;
    }

    /**
     * Set codedec
     *
     * @param string $codedec
     * @return Participe
     */
    public function setCodedec($codedec)
    {
        $this->codedec = $codedec;

        return $this;
    }

    /**
     * Get codedec
     *
     * @return string 
     */
    public function getCodedec()
    {
        return $this->codedec;
    }

    /**
     * Set place
     *
     * @param integer $place
     * @return Participe
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return integer 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set tpscomp
     *
     * @param string $tpscomp
     * @return Participe
     */
    public function setTpscomp($tpscomp)
    {
        $this->tpscomp = $tpscomp;

        return $this;
    }

    /**
     * Get tpscomp
     *
     * @return string 
     */
    public function getTpscomp()
    {
        return $this->tpscomp;
    }

    /**
     * Set heurarr
     *
     * @param \DateTime $heurarr
     * @return Participe
     */
    public function setHeurarr($heurarr)
    {
        $this->heurarr = $heurarr;

        return $this;
    }

    /**
     * Get heurarr
     *
     * @return \DateTime 
     */
    public function getHeurarr()
    {
        return $this->heurarr;
    }

    /**
     * Set numport
     *
     * @param string $numport
     * @return Participe
     */
    public function setNumport($numport)
    {
        $this->numport = $numport;

        return $this;
    }

    /**
     * Get numport
     *
     * @return string 
     */
    public function getNumport()
    {
        return $this->numport;
    }

    /**
     * Set numvoil
     *
     * @param \DL2015\IndexBundle\Entity\Voilier $numvoil
     * @return Participe
     */
    public function setNumvoil(\DL2015\IndexBundle\Entity\Voilier $numvoil = null)
    {
        $this->numvoil = $numvoil;

        return $this;
    }

    /**
     * Get numvoil
     *
     * @return \DL2015\IndexBundle\Entity\Voilier 
     */
    public function getNumvoil()
    {
        return $this->numvoil;
    }

    /**
     * Set numreg
     *
     * @param \DL2015\IndexBundle\Entity\Regate $numreg
     * @return Participe
     */
    public function setNumreg(\DL2015\IndexBundle\Entity\Regate $numreg = null)
    {
        $this->numreg = $numreg;

        return $this;
    }

    /**
     * Get numreg
     *
     * @return \DL2015\IndexBundle\Entity\Regate 
     */
    public function getNumreg()
    {
        return $this->numreg;
    }

    /**
     * Set numlicski
     *
     * @param \DL2015\IndexBundle\Entity\Licencie $numlicski
     * @return Participe
     */
    public function setNumlicski(\DL2015\IndexBundle\Entity\Licencie $numlicski = null)
    {
        $this->numlicski = $numlicski;

        return $this;
    }

    /**
     * Get numlicski
     *
     * @return \DL2015\IndexBundle\Entity\Licencie 
     */
    public function getNumlicski()
    {
        return $this->numlicski;
    }

    /**
     * Add numlic
     *
     * @param \DL2015\IndexBundle\Entity\Licencie $numlic
     * @return Participe
     */
    public function addNumlic(\DL2015\IndexBundle\Entity\Licencie $numlic)
    {
        $this->numlic[] = $numlic;

        return $this;
    }

    /**
     * Remove numlic
     *
     * @param \DL2015\IndexBundle\Entity\Licencie $numlic
     */
    public function removeNumlic(\DL2015\IndexBundle\Entity\Licencie $numlic)
    {
        $this->numlic->removeElement($numlic);
    }

    /**
     * Get numlic
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNumlic()
    {
        return $this->numlic;
    }
}
