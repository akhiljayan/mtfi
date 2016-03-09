<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterDept
 *
 * @ORM\Table(name="master_dept")
 * @ORM\Entity
 */
class MasterDept
{
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
     * @ORM\Column(name="dept_name", type="string", length=60)
     */
    private $deptName;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set deptName
     *
     * @param string $deptName
     *
     * @return MasterDept
     */
    public function setDeptName($deptName)
    {
        $this->deptName = $deptName;

        return $this;
    }

    /**
     * Get deptName
     *
     * @return string
     */
    public function getDeptName()
    {
        return $this->deptName;
    }
}

