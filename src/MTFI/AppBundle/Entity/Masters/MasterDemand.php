<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterDemand
 *
 * @ORM\Table(name="master_demand")
 * @ORM\Entity
 */
class MasterDemand {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="demand_no", type="decimal")
     */
    private $demandNo;

    /**
     * @var string
     *
     * @ORM\Column(name="demand_desc", type="string", length=60)
     */
    private $demandDesc;

    public function __toString() {
        return $this->demandNo . ". " . $this->demandDesc;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set demandNo
     *
     * @param string $demandNo
     *
     * @return MasterDemand
     */
    public function setDemandNo($demandNo) {
        $this->demandNo = $demandNo;

        return $this;
    }

    /**
     * Get demandNo
     *
     * @return string
     */
    public function getDemandNo() {
        return $this->demandNo;
    }

    /**
     * Set demandDesc
     *
     * @param string $demandDesc
     *
     * @return MasterDemand
     */
    public function setDemandDesc($demandDesc) {
        $this->demandDesc = $demandDesc;

        return $this;
    }

    /**
     * Get demandDesc
     *
     * @return string
     */
    public function getDemandDesc() {
        return $this->demandDesc;
    }

}
