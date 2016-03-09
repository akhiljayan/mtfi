<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterHrEmpType
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MasterHrEmpType
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
     * @ORM\Column(name="type_cd", type="string", length=2)
     */
    private $typeCd;
    
    /**
     * @var string
     *
     * @ORM\Column(name="type_desc", type="string", length=30)
     */
    private $typeDesc;
    
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
     * Set typeCd
     *
     * @param string $typeCd
     *
     * @return MasterHrEmpType
     */
    public function setTypeCd($typeCd)
    {
        $this->typeCd = $typeCd;

        return $this;
    }

    /**
     * Get typeCd
     *
     * @return string
     */
    public function getTypeCd()
    {
        return $this->typeCd;
    }

    /**
     * Set typeDesc
     *
     * @param string $typeDesc
     *
     * @return MasterHrEmpType
     */
    public function setTypeDesc($typeDesc)
    {
        $this->typeDesc = $typeDesc;

        return $this;
    }

    /**
     * Get typeDesc
     *
     * @return string
     */
    public function getTypeDesc()
    {
        return $this->typeDesc;
    }
}
