<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterState
 *
 * @ORM\Table(name="master_state")
 * @ORM\Entity
 */
class MasterState
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
     * @ORM\Column(name="state_cd", type="string", length=6)
     */
    private $stateCd;

    /**
     * @var string
     *
     * @ORM\Column(name="state_name", type="string", length=60)
     */
    private $stateName;


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
     * Set stateCd
     *
     * @param string $stateCd
     *
     * @return MasterState
     */
    public function setStateCd($stateCd)
    {
        $this->stateCd = $stateCd;

        return $this;
    }

    /**
     * Get stateCd
     *
     * @return string
     */
    public function getStateCd()
    {
        return $this->stateCd;
    }

    /**
     * Set stateName
     *
     * @param string $stateName
     *
     * @return MasterState
     */
    public function setStateName($stateName)
    {
        $this->stateName = $stateName;

        return $this;
    }

    /**
     * Get stateName
     *
     * @return string
     */
    public function getStateName()
    {
        return $this->stateName;
    }
}

