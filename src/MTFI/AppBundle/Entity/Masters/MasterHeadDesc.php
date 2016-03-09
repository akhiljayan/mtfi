<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint;

/**
 * MasterHeadDesc
 *
 * @ORM\Table(name="master_head_desc", uniqueConstraints={@UniqueConstraint(name="head_desc", columns={"maj", "smj", "minr", "sub", "subsub"})}))
 * @ORM\Entity
 */
class MasterHeadDesc
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
     * @var string
     *
     * @ORM\Column(name="head_abbr", type="string", length=60)
     */
    private $headAbbr;


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
     * @return MasterHeadDesc
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
     * @return MasterHeadDesc
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
     * @return MasterHeadDesc
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
     * @return MasterHeadDesc
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
     * @return MasterHeadDesc
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
     * @return MasterHeadDesc
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
     * Set headAbbr
     *
     * @param string $headAbbr
     *
     * @return MasterHeadDesc
     */
    public function setHeadAbbr($headAbbr)
    {
        $this->headAbbr = $headAbbr;

        return $this;
    }

    /**
     * Get headAbbr
     *
     * @return string
     */
    public function getHeadAbbr()
    {
        return $this->headAbbr;
    }
}
