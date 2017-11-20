<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class FinishedDrillRepository extends EntityRepository
{
    public function GetAllFinishedDrills()
    {
        return $this->getEntityManager()->getRepository("AppBundle\Entity\FinishedDrill")->findAll();
    }
}