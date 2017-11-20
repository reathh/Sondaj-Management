<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ScheduledDrillRepository extends EntityRepository
{
    public function GetAllScheduledDrills()
    {
        return $this->getEntityManager()->getRepository("AppBundle\Entity\ScheduledDrill")->findAll();
    }
}