<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="ScheduledDrill", mappedBy="user")
     */
    private $scheduledDrills;

    /**
     * @ORM\OneToMany(targetEntity="FinishedDrill", mappedBy="user")
     */
    private $finishedDrills;

    public function __construct()
    {
        $this->scheduledDrills = new ArrayCollection();
        $this->finishedDrills = new ArrayCollection();

        parent::__construct();
    }

    /**
     * Add scheduledDrill
     *
     * @param \AppBundle\Entity\ScheduledDrill $scheduledDrill
     *
     * @return User
     */
    public function addScheduledDrill(\AppBundle\Entity\ScheduledDrill $scheduledDrill)
    {
        $this->scheduledDrills[] = $scheduledDrill;

        return $this;
    }

    /**
     * Remove scheduledDrill
     *
     * @param \AppBundle\Entity\ScheduledDrill $scheduledDrill
     */
    public function removeScheduledDrill(\AppBundle\Entity\ScheduledDrill $scheduledDrill)
    {
        $this->scheduledDrills->removeElement($scheduledDrill);
    }

    /**
     * Get scheduledDrills
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getScheduledDrills()
    {
        return $this->scheduledDrills;
    }

    /**
     * Add finishedDrill
     *
     * @param \AppBundle\Entity\FinishedDrill $finishedDrill
     *
     * @return User
     */
    public function addFinishedDrill(\AppBundle\Entity\FinishedDrill $finishedDrill)
    {
        $this->finishedDrills[] = $finishedDrill;

        return $this;
    }

    /**
     * Remove finishedDrill
     *
     * @param \AppBundle\Entity\FinishedDrill $finishedDrill
     */
    public function removeFinishedDrill(\AppBundle\Entity\FinishedDrill $finishedDrill)
    {
        $this->finishedDrills->removeElement($finishedDrill);
    }

    /**
     * Get finishedDrills
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFinishedDrills()
    {
        return $this->finishedDrills;
    }
}
