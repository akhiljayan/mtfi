<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint;

/**
 * MasterHoa9Tier
 *
 * @ORM\Table(name="master_hoa_9tier")
 * @ORM\Entity
 */
class MasterHoa9Tier
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
     * @var int
     *
     * @ORM\Column(name="maj", type="smallint")
     */
    private $maj;

    /**
     * @var int
     *
     * @ORM\Column(name="smj", type="smallint")
     */
    private $smj;

    /**
     * @var int
     *
     * @ORM\Column(name="minr", type="smallint")
     */
    private $minr;

    /**
     * @var int
     *
     * @ORM\Column(name="sub", type="smallint")
     */
    private $sub;

    /**
     * @var int
     *
     * @ORM\Column(name="subsub", type="smallint")
     */
    private $subsub;

    /**
     * @var string
     *
     * @ORM\Column(name="head_desc", type="string", length=255)
     */
    private $headDesc;

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
     * @ORM\Column(name="pnp", type="string", length=1)
     */
    private $pnp;

    /**
     * @var string
     *
     * @ORM\Column(name="vc", type="string", length=1)
     */
    private $vc;


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
     * Set maj
     *
     * @param int $maj
     *
     * @return MasterHoa9Tier
     */
    public function setMaj($maj)
    {
        $this->maj = $maj;

        return $this;
    }

    /**
     * Get maj
     *
     * @return int
     */
    public function getMaj()
    {
        return $this->maj;
    }

    /**
     * Set smj
     *
     * @param int $smj
     *
     * @return MasterHoa9Tier
     */
    public function setSmj($smj)
    {
        $this->smj = $smj;

        return $this;
    }

    /**
     * Get smj
     *
     * @return int
     */
    public function getSmj()
    {
        return $this->smj;
    }

    /**
     * Set minr
     *
     * @param int $minr
     *
     * @return MasterHoa9Tier
     */
    public function setMinr($minr)
    {
        $this->minr = $minr;

        return $this;
    }

    /**
     * Get minr
     *
     * @return int
     */
    public function getMinr()
    {
        return $this->minr;
    }

    /**
     * Set sub
     *
     * @param int $sub
     *
     * @return MasterHoa9Tier
     */
    public function setSub($sub)
    {
        $this->sub = $sub;

        return $this;
    }

    /**
     * Get sub
     *
     * @return int
     */
    public function getSub()
    {
        return $this->sub;
    }

    /**
     * Set subsub
     *
     * @param int $subsub
     *
     * @return MasterHoa9Tier
     */
    public function setSubsub($subsub)
    {
        $this->subsub = $subsub;

        return $this;
    }

    /**
     * Get subsub
     *
     * @return int
     */
    public function getSubsub()
    {
        return $this->subsub;
    }

    /**
     * Set headDesc
     *
     * @param string $headDesc
     *
     * @return MasterHoa9Tier
     */
    public function setHeadDesc($headDesc)
    {
        $this->headDesc = $headDesc;

        return $this;
    }

    /**
     * Get headDesc
     *
     * @return string
     */
    public function getHeadDesc()
    {
        return $this->headDesc;
    }

    /**
     * Set det
     *
     * @param int $det
     *
     * @return MasterHoa9Tier
     */
    public function setDet($det)
    {
        $this->det = $det;

        return $this;
    }

    /**
     * Get det
     *
     * @return int
     */
    public function getDet()
    {
        return $this->det;
    }

    /**
     * Set obj
     *
     * @param int $obj
     *
     * @return MasterHoa9Tier
     */
    public function setObj($obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * Get obj
     *
     * @return int
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
     * @return MasterHoa9Tier
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
     * Set pnp
     *
     * @param string $pnp
     *
     * @return MasterHoa9Tier
     */
    public function setPnp($pnp)
    {
        $this->pnp = $pnp;

        return $this;
    }

    /**
     * Get pnp
     *
     * @return string
     */
    public function getPnp()
    {
        return $this->pnp;
    }

    /**
     * Set vc
     *
     * @param string $vc
     *
     * @return MasterHoa9Tier
     */
    public function setVc($vc)
    {
        $this->vc = $vc;

        return $this;
    }

    /**
     * Get vc
     *
     * @return string
     */
    public function getVc()
    {
        return $this->vc;
    }
}
