<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterMuncipCorp
 *
 * @ORM\Table(name="master_muncip_corp")
 * @ORM\Entity
 */
class MasterMuncipCorp
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
     * @ORM\Column(name="urban_cd", type="string", length=6)
     */
    private $urbanCd;

    /**
     * @var string
     *
     * @ORM\Column(name="urban_name_eng", type="string", length=300)
     */
    private $urbanNameEng;
    
    /**
     * @var string
     *
     * @ORM\Column(name="urban_name_mal", type="string", length=300)
     */
    private $urbanNameMal;


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
     * Set urbanCd
     *
     * @param string $urbanCd
     *
     * @return MasterMuncipCorp
     */
    public function setUrbanCd($urbanCd)
    {
        $this->urbanCd = $urbanCd;

        return $this;
    }

    /**
     * Get urbanCd
     *
     * @return string
     */
    public function getUrbanCd()
    {
        return $this->urbanCd;
    }

    /**
     * Set urbanNameEng
     *
     * @param string $urbanNameEng
     *
     * @return MasterMuncipCorp
     */
    public function setUrbanNameEng($urbanNameEng)
    {
        $this->urbanNameEng = $urbanNameEng;

        return $this;
    }

    /**
     * Get urbanNameEng
     *
     * @return string
     */
    public function getUrbanNameEng()
    {
        return $this->urbanNameEng;
    }

    /**
     * Set urbanNameMal
     *
     * @param string $urbanNameMal
     *
     * @return MasterMuncipCorp
     */
    public function setUrbanNameMal($urbanNameMal)
    {
        $this->urbanNameMal = $urbanNameMal;

        return $this;
    }

    /**
     * Get urbanNameMal
     *
     * @return string
     */
    public function getUrbanNameMal()
    {
        return $this->urbanNameMal;
    }
}
