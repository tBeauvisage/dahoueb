<?php

namespace DL2015\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClubNautique
 *
 * @ORM\Table(name="club_nautique")
 * @ORM\Entity(repositoryClass="DL2015\IndexBundle\Entity\ClubNautiqueRepository")
 */
class ClubNautique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDCLUB", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclub;

    /**
     * @var string
     *
     * @ORM\Column(name="MAILCLUB", type="string", length=25, nullable=false)
     */
    private $mailclub;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACT", type="string", length=25, nullable=false)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEPHONE", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $telephone;



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
     * Set mailclub
     *
     * @param string $mailclub
     * @return ClubNautique
     */
    public function setMailclub($mailclub)
    {
        $this->mailclub = $mailclub;

        return $this;
    }

    /**
     * Get mailclub
     *
     * @return string 
     */
    public function getMailclub()
    {
        return $this->mailclub;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return ClubNautique
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return ClubNautique
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
}
