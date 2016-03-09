<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MasterHrPayScale
 *
 * @ORM\Table(name="master_hr_paysacle")
 * @ORM\Entity
 */
class MasterHrPayScale
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
     * @var int
     * 
     * @ORM\Column(name="low_range", type="integer")
     */
    private $lowRange;

    /**
     * @var int
     *
     * @ORM\Column(name="up_range", type="integer")
     */
    private $upRange;

    /**
     * @var string
     *
     * @ORM\Column(name="scale_desc", type="string", length=60)
     */
    private $scaleDesc;


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
     * Set lowRange
     *
     * @param int $lowRange
     *
     * @return MasterHrPayScale
     */
    public function setLowRange($lowRange)
    {
        $this->lowRange = $lowRange;

        return $this;
    }

    /**
     * Get lowRange
     *
     * @return int
     */
    public function getLowRange()
    {
        return $this->lowRange;
    }

    /**
     * Set upRange
     *
     * @param int $upRange
     *
     * @return MasterHrPayScale
     */
    public function setUpRange($upRange)
    {
        $this->upRange = $upRange;

        return $this;
    }

    /**
     * Get upRange
     *
     * @return int
     */
    public function getUpRange()
    {
        return $this->upRange;
    }

    /**
     * Set scaleDesc
     *
     * @param string $scaleDesc
     *
     * @return MasterHrPayScale
     */
    public function setScaleDesc($scaleDesc)
    {
        $this->scaleDesc = $scaleDesc;

        return $this;
    }

    /**
     * Get scaleDesc
     *
     * @return string
     */
    public function getScaleDesc()
    {
        return $this->scaleDesc;
    }
}
