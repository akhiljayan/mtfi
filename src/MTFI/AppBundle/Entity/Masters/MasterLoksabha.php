<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterLoksabha
 *
 * @ORM\Table(name="master_loksabha")
 * @ORM\Entity
 */
class MasterLoksabha
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
     * @ORM\Column(name="hp_name", type="string", length=30)
     */
    private $hpName;
    
    /**
     * @ORM\ManyToOne(targetEntity="MTFI\AppBundle\Entity\Masters\MasterDistrict")
     * @ORM\JoinColumn(name="district_id", referencedColumnName="id")
     */
    private $distId;


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
     * Set hpName
     *
     * @param string $hpName
     *
     * @return MasterLoksabha
     */
    public function setHpName($hpName)
    {
        $this->hpName = $hpName;

        return $this;
    }

    /**
     * Get hpName
     *
     * @return string
     */
    public function getHpName()
    {
        return $this->hpName;
    }

    /**
     * Set distId
     *
     * @param \ProtalBundle\Entity\MasterDistrict $distId
     *
     * @return MasterLoksabha
     */
    public function setDistId(\MTFI\AppBundle\Entity\Masters\MasterDistrict $distId = null)
    {
        $this->distId = $distId;

        return $this;
    }

    /**
     * Get distId
     *
     * @return \MTFI\AppBundle\Entity\Masters\ProtalBundle/Entity/MasterDistrict
     */
    public function getDistId()
    {
        return $this->distId;
    }
}
