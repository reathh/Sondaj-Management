<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ScheduledDrillRepository")
 * @ORM\Table(name="FinishedDrills")
 */
class FinishedDrill
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** @ORM\Column(type="datetime") */
    private $date;

    /** @ORM\Column(type="string", length=50, nullable=true) */
    private $nameForContact;

    /** @ORM\Column(type="string", length=20) */
    private $numberForContact;

    /** @ORM\Column(type="string", length=100) */
    private $coordinates;

    /** @ORM\Column(type="integer") */
    private $metres;

    /** @ORM\Column(type="boolean") */
    private $hasWater;

    /** @ORM\Column(type="simple_array") */
    private $foundWatersMetres;

    /** @ORM\Column(type="string", length=200, nullable=true) */
    private $referral;

    /**
     * @ORM\OneToMany(targetEntity="DetailedSoil", mappedBy="drill")
     */
    private $soils;

    /** @ORM\ManyToOne(targetEntity="User", inversedBy="finishedDrills") */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->soils = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return FinishedDrill
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set nameForContact
     *
     * @param string $nameForContact
     *
     * @return FinishedDrill
     */
    public function setNameForContact($nameForContact)
    {
        $this->nameForContact = $nameForContact;

        return $this;
    }

    /**
     * Get nameForContact
     *
     * @return string
     */
    public function getNameForContact()
    {
        return $this->nameForContact;
    }

    /**
     * Set numberForContact
     *
     * @param string $numberForContact
     *
     * @return FinishedDrill
     */
    public function setNumberForContact($numberForContact)
    {
        $this->numberForContact = $numberForContact;

        return $this;
    }

    /**
     * Get numberForContact
     *
     * @return string
     */
    public function getNumberForContact()
    {
        return $this->numberForContact;
    }

    /**
     * Set coordinates
     *
     * @param string $coordinates
     *
     * @return FinishedDrill
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * Get coordinates
     *
     * @return string
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * Set metres
     *
     * @param integer $metres
     *
     * @return FinishedDrill
     */
    public function setMetres($metres)
    {
        $this->metres = $metres;

        return $this;
    }

    /**
     * Get metres
     *
     * @return integer
     */
    public function getMetres()
    {
        return $this->metres;
    }

    /**
     * Set hasWater
     *
     * @param boolean $hasWater
     *
     * @return FinishedDrill
     */
    public function setHasWater($hasWater)
    {
        $this->hasWater = $hasWater;

        return $this;
    }

    /**
     * Get hasWater
     *
     * @return boolean
     */
    public function getHasWater()
    {
        return $this->hasWater;
    }

    /**
     * Set foundWatersMetres
     *
     * @param array $foundWatersMetres
     *
     * @return FinishedDrill
     */
    public function setFoundWatersMetres($foundWatersMetres)
    {
        $this->foundWatersMetres = $foundWatersMetres;

        return $this;
    }

    /**
     * Get foundWatersMetres
     *
     * @return array
     */
    public function getFoundWatersMetres()
    {
        return $this->foundWatersMetres;
    }

    /**
     * Set referal
     *
     * @param string $referral
     *
     * @return FinishedDrill
     */
    public function setReferral($referral)
    {
        $this->referral = $referral;

        return $this;
    }

    /**
     * Get referal
     *
     * @return string
     */
    public function getReferral()
    {
        return $this->referral;
    }

    /**
     * Add soil
     *
     * @param \AppBundle\Entity\DetailedSoil $soil
     *
     * @return FinishedDrill
     */
    public function addSoil(\AppBundle\Entity\DetailedSoil $soil)
    {
        $this->soils[] = $soil;

        return $this;
    }

    /**
     * Remove soil
     *
     * @param \AppBundle\Entity\DetailedSoil $soil
     */
    public function removeSoil(\AppBundle\Entity\DetailedSoil $soil)
    {
        $this->soils->removeElement($soil);
    }

    /**
     * Get soils
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSoils()
    {
        return $this->soils;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return FinishedDrill
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
