<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ScheduledDrills")
 */
class ScheduledDrill
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** @ORM\Column(type="datetime", nullable=true) */
    private $date;

    /** @ORM\Column(type="string", length=50, nullable=true) */
    private $nameForContact;

    /** @ORM\Column(type="string", length=20) */
    private $numberForContact;

    /** @ORM\Column(type="string", length=100) */
    private $coordinates;

    /** @ORM\ManyToOne(targetEntity="User", inversedBy="scheduledDrills") */
    private $user;

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
     * @return ScheduledDrill
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
     * @return ScheduledDrill
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
     * @return ScheduledDrill
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
     * @return ScheduledDrill
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
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return ScheduledDrill
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
