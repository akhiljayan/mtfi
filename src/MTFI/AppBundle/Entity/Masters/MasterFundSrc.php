<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;

/**
 *  MasterFundSrc
 *
 * @ORM\Table(name="master_fund_src")
 * @ORM\Entity
 */
class  MasterFundSrc
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
     * @ORM\Column(name="fund_src_name", type="string", length=60)
     */
    private $fundSrcName;


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
     * Set fundSrcName
     *
     * @param string $fundSrcName
     *
     * @return  MasterFundSrc
     */
    public function setFundSrcName($fundSrcName)
    {
        $this->fundSrcName = $fundSrcName;

        return $this;
    }

    /**
     * Get fundSrcName
     *
     * @return string
     */
    public function getFundSrcName()
    {
        return $this->fundSrcName;
    }
}
