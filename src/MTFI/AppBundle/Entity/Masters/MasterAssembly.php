<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterAssembly
 *
 * @ORM\Table(name="master_assembly")
 * @ORM\Entity
 */
class MasterAssembly
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
     * @ORM\Column(name="la_name", type="string", length=30)
     */
    private $laName;

    /**
     * @ORM\ManyToOne(targetEntity="MasterLoksabha")
     * @ORM\JoinColumn(name="hp_cd", referencedColumnName="id")
     */
    private $hp_cd;

   
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
     * Set laName
     *
     * @param string $laName
     *
     * @return MasterAssembly
     */
    public function setLaName($laName)
    {
        $this->laName = $laName;

        return $this;
    }

    /**
     * Get laName
     *
     * @return string
     */
    public function getLaName()
    {
        return $this->laName;
    }

    /**
     * Set hpCd
     *
     * @param \MTFI\AppBundle\Entity\Masters\MasterLoksabha $hpCd
     *
     * @return MasterAssembly
     */
    public function setHpCd(\MTFI\AppBundle\Entity\Masters\MasterLoksabha $hpCd = null)
    {
        $this->hp_cd = $hpCd;

        return $this;
    }

    /**
     * Get hpCd
     *
     * @return \MTFI\AppBundle\Entity\Masters\MasterLoksabha
     */
    public function getHpCd()
    {
        return $this->hp_cd;
    }
}
