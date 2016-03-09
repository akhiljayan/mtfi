<?php
namespace MTFI\AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class DeptDesigRepository extends EntityRepository {

    function deleteDeptwiseAllDesig() {

        $results = $this->createQueryBuilder('a')
                ->select('a')
                ->where('a.createdBy IS NOT NULL');
        return $results->getQuery()->getResult();
    }

}