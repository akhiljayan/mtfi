<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterDistrict
 *
 * @ORM\Table(name="master_district")
 * @ORM\Entity
 */
class MasterDistrict
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
     * @ORM\ManyToOne(targetEntity="MasterState")
     * @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     */
    private $stateId;

    /**
     * @var string
     *
     * @ORM\Column(name="dist_cd", type="string", length=6)
     */
    private $distCd;

    /**
     * @var string
     *
     * @ORM\Column(name="dist_abbr", type="string", length=6)
     */
    private $distAbbr;
    
    /**
     * @var string
     *
     * @ORM\Column(name="dist_name", type="string", length=60)
     */
    private $distName;


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
     * Set distCd
     *
     * @param string $distCd
     *
     * @return MasterDistrict
     */
    public function setDistCd($distCd)
    {
        $this->distCd = $distCd;

        return $this;
    }

    /**
     * Get distCd
     *
     * @return string
     */
    public function getDistCd()
    {
        return $this->distCd;
    }

    /**
     * Set distName
     *
     * @param string $distName
     *
     * @return MasterDistrict
     */
    public function setDistName($distName)
    {
        $this->distName = $distName;

        return $this;
    }

    /**
     * Get distName
     *
     * @return string
     */
    public function getDistName()
    {
        return $this->distName;
    }

    /**
     * Set stateId
     *
     * @param \MTFI\AppBundle\Entity\Masters\MasterState $stateId
     *
     * @return MasterDistrict
     */
    public function setStateId(\MTFI\AppBundle\Entity\Masters\MasterState $stateId = null)
    {
        $this->stateId = $stateId;

        return $this;
    }

    /**
     * Get stateId
     *
     * @return \MTFI\AppBundle\Entity\Masters\MasterState
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /**
     * Set distAbbr
     *
     * @param string $distAbbr
     *
     * @return MasterDistrict
     */
    public function setDistAbbr($distAbbr)
    {
        $this->distAbbr = $distAbbr;

        return $this;
    }

    /**
     * Get distAbbr
     *
     * @return string
     */
    public function getDistAbbr()
    {
        return $this->distAbbr;
    }
}
