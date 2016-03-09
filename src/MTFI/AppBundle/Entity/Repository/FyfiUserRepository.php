<?php
namespace MTFI\AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class FyfiUserRepository extends EntityRepository {

    function deleteAllUser() {

        $results = $this->createQueryBuilder('a')
                ->select('a')
                ->where('a.loginId !=:val')
                ->setParameter('val',1);
        return $results->getQuery()->getResult();
    }

}