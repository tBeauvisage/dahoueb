<?php

namespace DL2015\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietaire
 *
 * @ORM\Table(name="proprietaire", indexes={@ORM\Index(name="ETRE_FK", columns={"IDCLUB"})})
 * @ORM\Entity(repositoryClass="DL2015\IndexBundle\Entity\ProprietaireRepository")
 */
class Proprietaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDMBR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idmbr;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDCLUB", type="integer", nullable=false)
     */
    private $idclub;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMMBR", type="string", length=15, nullable=false)
     */
    private $nommbr;

    /**
     * @var string
     *
     * @ORM\Column(name="MAIL", type="string", length=20, nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=10, nullable=false)
     */
    private $password;



    /**
     * Set idmbr
     *
     * @param integer $idmbr
     * @return Proprietaire
     */
    public function setIdmbr($idmbr)
    {
        $this->idmbr = $idmbr;

        return $this;
    }

    /**
     * Get idmbr
     *
     * @return integer 
     */
    public function getIdmbr()
    {
        return $this->idmbr;
    }

    /**
     * Set idclub
     *
     * @param integer $idclub
     * @return Proprietaire
     */
    public function setIdclub($idclub)
    {
        $this->idclub = $idclub;

        return $this;
    }

    /**
     * Get idclub
     *
     * @return integer 
     */
    public function getIdclub()
    {
        return $this->idclub;
    }

    /**
     * Set nommbr
     *
     * @param string $nommbr
     * @return Proprietaire
     */
    public function setNommbr($nommbr)
    {
        $this->nommbr = $nommbr;

        return $this;
    }

    /**
     * Get nommbr
     *
     * @return string 
     */
    public function getNommbr()
    {
        return $this->nommbr;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Proprietaire
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Proprietaire
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
}
