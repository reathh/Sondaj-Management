<?php
///** @ORM\ManyToMany(targetEntity="FinishedDrill", mappedBy="soils")  */
//private $drills;
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="DetailedSoils")
 */
class DetailedSoil
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** @ORM\OneToOne(targetEntity="SoilName") */
    private $soil;

    /** @ORM\ManyToOne(targetEntity="FinishedDrill", inversedBy="soils") */
    private $drill;

    /** @ORM\Column(type="integer") */
    private $metres;

    /** @ORM\Column(type="integer") */
    private $index;

    public function __construct()
    {
        $this->drills = new ArrayCollection();
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
     * Set metres
     *
     * @param integer $metres
     *
     * @return DetailedSoil
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
     * Set index
     *
     * @param integer $index
     *
     * @return DetailedSoil
     */
    public function setIndex($index)
    {
        $this->index = $index;

        return $this;
    }

    /**
     * Get index
     *
     * @return integer
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Set soil
     *
     * @param \AppBundle\Entity\Soil $soil
     *
     * @return DetailedSoil
     */
    public function setSoil(\AppBundle\Entity\Soil $soil = null)
    {
        $this->soil = $soil;

        return $this;
    }

    /**
     * Get soil
     *
     * @return \AppBundle\Entity\Soil
     */
    public function getSoil()
    {
        return $this->soil;
    }

    /**
     * Set drill
     *
     * @param \AppBundle\Entity\FinishedDrill $drill
     *
     * @return DetailedSoil
     */
    public function setDrill(\AppBundle\Entity\FinishedDrill $drill = null)
    {
        $this->drill = $drill;

        return $this;
    }

    /**
     * Get drill
     *
     * @return \AppBundle\Entity\FinishedDrill
     */
    public function getDrill()
    {
        return $this->drill;
    }
}
