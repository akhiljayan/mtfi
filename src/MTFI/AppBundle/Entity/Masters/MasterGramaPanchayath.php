<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterGramaPanchayath
 *
 * @ORM\Table(name="master_grama_panchayath")
 * @ORM\Entity
 */
class MasterGramaPanchayath
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
     * @ORM\Column(name="grama_cd", type="string", length=6)
     */
    private $gramaCd;

    /**
     * @var string
     *
     * @ORM\Column(name="grama_name_mal", type="string", length=300)
     */
    private $gramaNameMal;
    
     /**
     * @var string
     *
     * @ORM\Column(name="grama_name_eng", type="string", length=300)
     */
    private $gramaNameEng;


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
     * Set gramaCd
     *
     * @param string $gramaCd
     *
     * @return MasterGramaPanchayath
     */
    public function setGramaCd($gramaCd)
    {
        $this->gramaCd = $gramaCd;

        return $this;
    }

    /**
     * Get gramaCd
     *
     * @return string
     */
    public function getGramaCd()
    {
        return $this->gramaCd;
    }

    /**
     * Set gramaNameMal
     *
     * @param string $gramaNameMal
     *
     * @return MasterGramaPanchayath
     */
    public function setGramaNameMal($gramaNameMal)
    {
        $this->gramaNameMal = $gramaNameMal;

        return $this;
    }

    /**
     * Get gramaNameMal
     *
     * @return string
     */
    public function getGramaNameMal()
    {
        return $this->gramaNameMal;
    }

    /**
     * Set gramaNameEng
     *
     * @param string $gramaNameEng
     *
     * @return MasterGramaPanchayath
     */
    public function setGramaNameEng($gramaNameEng)
    {
        $this->gramaNameEng = $gramaNameEng;

        return $this;
    }

    /**
     * Get gramaNameEng
     *
     * @return string
     */
    public function getGramaNameEng()
    {
        return $this->gramaNameEng;
    }
}
