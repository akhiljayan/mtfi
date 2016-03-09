<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterWorkDivision
 *
 * @ORM\Table(name="master_workdivision")
 * @ORM\Entity
 */
class MasterWorkDivision
{
    /**
     * @var int
     *
     * @ORM\Column(name="workdivisionID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="workdivisionDescription", type="string", length=100)
     */
    private $workdivisionDescription;


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
     * Set workdivisionDescription
     *
     * @param string $workdivisionDescription
     *
     * @return MasterWorkDivision
     */
    public function setWorkdivisionDescription($workdivisionDescription)
    {
        $this->workdivisionDescription = $workdivisionDescription;

        return $this;
    }

    /**
     * Get workdivisionDescription
     *
     * @return string
     */
    public function getWorkdivisionDescription()
    {
        return $this->workdivisionDescription;
    }
}

