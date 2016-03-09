<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterDeptLevel
 *
 * @ORM\Table(name="master_dept_level")
 * @ORM\Entity(repositoryClass="PortalBundle\Repository\masterDeptLevelRepository")
 */
class MasterDeptLevel
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
     * @ORM\Column(name="dept_level_desc", type="string", length=255)
     */
    private $deptLevelDesc;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer", unique=true)
     */
    private $level;
    
    /**
     * @var int
     *
     * @ORM\Column(name="sequence", type="integer", unique=true)
     */
    private $sequence;

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
     * Set deptLevelDesc
     *
     * @param string $deptLevelDesc
     *
     * @return MasterDeptLevel
     */
    public function setDeptLevelDesc($deptLevelDesc)
    {
        $this->deptLevelDesc = $deptLevelDesc;

        return $this;
    }

    /**
     * Get deptLevelDesc
     *
     * @return string
     */
    public function getDeptLevelDesc()
    {
        return $this->deptLevelDesc;
    }

    /**
     * Set level
     *
     * @param int $level
     *
     * @return MasterDeptLevel
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set sequence
     *
     * @param int $sequence
     *
     * @return MasterDeptLevel
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->sequence;
    }
}
