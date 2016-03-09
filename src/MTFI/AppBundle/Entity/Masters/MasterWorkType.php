<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterWorkType
 *
 * @ORM\Table(name="master_worktype")
 * @ORM\Entity
 */
class MasterWorkType
{
    /**
     * @var int
     *
     * @ORM\Column(name="worktypeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="WorktypeDescription", type="string", length=100)
     */
    private $worktypeDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer")
     */
    private $sortOrder;


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
     * Set worktypeDescription
     *
     * @param string $worktypeDescription
     *
     * @return MasterWorkType
     */
    public function setWorktypeDescription($worktypeDescription)
    {
        $this->worktypeDescription = $worktypeDescription;

        return $this;
    }

    /**
     * Get worktypeDescription
     *
     * @return string
     */
    public function getWorktypeDescription()
    {
        return $this->worktypeDescription;
    }

    /**
     * Set sortOrder
     *
     * @param int $sortOrder
     *
     * @return MasterWorkType
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
}

