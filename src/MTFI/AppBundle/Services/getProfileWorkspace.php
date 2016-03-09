<?php

namespace MTFI\AppBundle\Services;

class getProfileWorkspace {

    private $emr;
    private $myContainer;

    public function __construct($entityManager, $container) {
        $this->emr = $entityManager;
        $this->myContainer = $container;
    }

    public function getDistrict() {
        $em = $this->emr;
        $loggedUser = $this->myContainer->get('security.context')->getToken()->getUser();
        $selectedProfileWorkspace = $em->getRepository('MTFIAppBundle:Masters\FyfiUser')->findOneBy(array('loginId' => $loggedUser->getId()));
        return $selectedProfileWorkspace->getStateDistId();
    }

    public function getDepartment() {
        $em = $this->emr;
        $loggedUser = $this->myContainer->get('security.context')->getToken()->getUser();
        $selectedProfileWorkspace = $em->getRepository('MTFIAppBundle:Masters\FyfiUser')->findOneBy(array('loginId' => $loggedUser->getId()));
        $department = $selectedProfileWorkspace->getDeptDesigId();
        if ($department) {
            return $department->getDeptId();
        } else {
            return NULL;
        }
    }

    public function getFyfiUser() {
        $em = $this->emr;
        $loggedUser = $this->myContainer->get('security.context')->getToken()->getUser();
        $selectedProfileWorkspace = $em->getRepository('MTFIAppBundle:Masters\FyfiUser')->findOneBy(array('loginId' => $loggedUser->getId()));
        return $selectedProfileWorkspace;
    }

    public function getUserLevel() {
        $em = $this->emr;
        $loggedUser = $this->myContainer->get('security.context')->getToken()->getUser();
        $selectedProfileWorkspace = $em->getRepository('MTFIAppBundle:Masters\FyfiUser')->findOneBy(array('loginId' => $loggedUser->getId()));
        return $selectedProfileWorkspace->getDeptLevelId()->getLevel();
    }

    public function setProfileFinyear(\DateTime $date) {
        $date1 = date_format($date, "Y-m-d");
        $mmdd = intval(date('md', strtotime($date1)));
        $Y = intval(date('Y', strtotime($date1)));
        if ($mmdd < 401) {
            $fystrat = $Y - 1;
        } else {
            $fystrat = $Y;
        }
        $fyend = $fystrat + 1;
        $finyear = $fystrat . "-" . $fyend;
        return $finyear;
    }

    public function setFullFinYear($startfinyear, $endfinyear) {
        $start = intVal(substr($startfinyear, 0, 4));
        $end = intVal(substr($endfinyear, 0, 4));
        while ($start <= $end) {
            $year = strval($start) . "-" . strval($start + 1);
            $finyear[] = $year;
            $start++;
        }
        return $finyear;
    }

//    public function getTotalAmountForSchemeWorkType($schemeId, $typeId, $divisionId, $department, $workNameId) {
//        $em = $this->emr;
//        $qb = $em->createQueryBuilder();
//        $schemeWorkComponents = $qb->select('swc')
//                ->from('FYFISchemeBundle:SchemeWrkComponents', 'swc')
//                ->innerJoin('swc.wrkCompId', 'wc')
//                ->innerJoin('swc.wrkCompPropId', 'wp')
//                ->where('swc.schemeId = :schemeId')
//                ->andWhere('wc.workTypeId = :wrkTypeId')
//                ->andWhere("wc.workDivisionId = :wrkDivisionId")
//                ->andWhere("wc.department = :department OR wc.department IS NULL")
//                ->andWhere("wp.valueAmountString= :value")
//                ->andWhere("swc.schemeWorkNameId = :schemeWorkNameId")
//                ->andWhere("wp.sumAtGrpLevel= :value1")
//                ->getQuery()
//                ->setParameter('schemeId', $schemeId)
//                ->setParameter('wrkTypeId', $typeId)
//                ->setParameter('department', $department->getId())
//                ->setParameter('wrkDivisionId', $divisionId)
//                ->setParameter('schemeWorkNameId', $workNameId)
//                ->setParameter('value', "A")
//                ->setParameter('value1', 1)
//                ->getResult();
//        if (!empty($schemeWorkComponents)) {
//            foreach ($schemeWorkComponents as $schemeWorkComponent) {
//                $typeAmountObj = $schemeWorkComponent->getComponentPropValue();
//                $totalAmountArray[] = $typeAmountObj;
//            }
//            $totalAmount = array_sum($totalAmountArray);
//        } else {
//            $totalAmount = 0;
//        }
//
//        return $totalAmount;
//    }
//
//    public function getTotalAmountForSchemeWorkName($schemeId, $divisionId, $department, $wrkNameId) {
//        $em = $this->emr;
//        $qb = $em->createQueryBuilder();
//        $schemeWorkComponents = $qb->select('swc')
//                ->from('FYFISchemeBundle:SchemeWrkComponents', 'swc')
//                ->leftJoin('swc.wrkCompId', 'wc')
//                ->leftJoin('swc.wrkCompPropId', 'wp')
//                ->where('swc.schemeId = :schemeId')
//                ->andWhere("wc.workDivisionId = :wrkDivisionId")
//                ->andWhere("wp.valueAmountString= :value")
//                ->andWhere("wc.department = :department OR wc.department IS NULL")
//                ->andWhere("swc.schemeWorkNameId = :schemeWorkNameId")
//                ->andWhere("wp.sumAtGrpLevel= :value1")
//                ->getQuery()
//                ->setParameter('schemeId', $schemeId)
//                ->setParameter('wrkDivisionId', $divisionId)
//                ->setParameter('department', $department->getId())
//                ->setParameter('schemeWorkNameId', $wrkNameId)
//                ->setParameter('value', "A")
//                ->setParameter('value1', 1)
//                ->getResult();
//
//        if (!empty($schemeWorkComponents)) {
//            foreach ($schemeWorkComponents as $schemeWorkComponent) {
//                $totalAmountObj = $schemeWorkComponent->getComponentPropValue();
//                $totalAmountArray[] = $totalAmountObj;
//            }
//            $totalAmount = array_sum($totalAmountArray);
//        } else {
//            $totalAmount = 0;
//        }
//
//        return $totalAmount;
//    }

}
