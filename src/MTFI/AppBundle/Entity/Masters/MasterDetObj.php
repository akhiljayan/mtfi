<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint;

/**
 * MasterDetObj
 *
 * @ORM\Table(name="master_det_obj", uniqueConstraints={@UniqueConstraint(name="det_obj", columns={"det", "obj"})})
 * @ORM\Entity
 */
class MasterDetObj
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="det", type="smallint")
     */
    private $det;

    /**
     * @var integer
     *
     * @ORM\Column(name="obj", type="smallint")
     */
    private $obj;

    /**
     * @var string
     *
     * @ORM\Column(name="det_desc", type="string", length=60)
     */
    private $detDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="det_abbr", type="string", length=60)
     */
    private $detAbbr;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set det
     *
     * @param integer $det
     *
     * @return MasterDetObj
     */
    public function setDet($det)
    {
        $this->det = $det;

        return $this;
    }

    /**
     * Get det
     *
     * @return integer
     */
    public function getDet()
    {
        return $this->det;
    }

    /**
     * Set obj
     *
     * @param integer $obj
     *
     * @return MasterDetObj
     */
    public function setObj($obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * Get obj
     *
     * @return integer
     */
    public function getObj()
    {
        return $this->obj;
    }

    /**
     * Set detDesc
     *
     * @param string $detDesc
     *
     * @return MasterDetObj
     */
    public function setDetDesc($detDesc)
    {
        $this->detDesc = $detDesc;

        return $this;
    }

    /**
     * Get detDesc
     *
     * @return string
     */
    public function getDetDesc()
    {
        return $this->detDesc;
    }

    /**
     * Set detAbbr
     *
     * @param string $detAbbr
     *
     * @return MasterDetObj
     */
    public function setDetAbbr($detAbbr)
    {
        $this->detAbbr = $detAbbr;

        return $this;
    }

    /**
     * Get detAbbr
     *
     * @return string
     */
    public function getDetAbbr()
    {
        return $this->detAbbr;
    }
    
    public function getPairForDet() {

        return sprintf('%s : %s', $this->det, $this->detDesc );
    }
    
    public function getPairForObj() {

        return sprintf('%s : %s', $this->obj, $this->detDesc );
    }
}
