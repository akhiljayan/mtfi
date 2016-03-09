<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeptDesig
 *
 * @ORM\Table(name="master_dept_desig")
 * @ORM\Entity(repositoryClass="\MTFI\AppBundle\Entity\Masters\Repository\DeptDesigRepository")
 */
class DeptDesig
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
     * @ORM\ManyToOne(targetEntity="MasterDept", cascade={"persist"})
     * @ORM\JoinColumn(name="dept_id", referencedColumnName="id")
     */
    private $deptId;

    /**
     * @var string
     *
     * @ORM\Column(name="desig_name", type="string", length=60)
     */
    private $desigName;

    /**
     * @var string
     * 
     * @ORM\Column(name="flag", type="string", length=1)
     */
    private $flag;
    
    /**
     * @ORM\ManyToOne(targetEntity="MTFI\Nic\Bundle\SecuredLoginBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(name="created_by", referencedColumnName="id")
     */
    private $createdBy;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime")
     */
    private $createdDate;
    
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
     * Set deptId
     *
     * @param int $deptId
     *
     * @return DeptDesig
     */
    public function setDeptId($deptId)
    {
        $this->deptId = $deptId;

        return $this;
    }

    /**
     * Get deptId
     *
     * @return int
     */
    public function getDeptId()
    {
        return $this->deptId;
    }

    /**
     * Set desigName
     *
     * @param string $desigName
     *
     * @return DeptDesig
     */
    public function setDesigName($desigName)
    {
        $this->desigName = $desigName;

        return $this;
    }

    /**
     * Get desigName
     *
     * @return string
     */
    public function getDesigName()
    {
        return $this->desigName;
    }

    /**
     * Set flag
     *
     * @param string $flag
     *
     * @return DeptDesig
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return string
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return DeptDesig
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set createdBy
     *
     * @param \MTFI\Nic\Bundle\SecuredLoginBundle\Entity\User $createdBy
     *
     * @return DeptDesig
     */
    public function setCreatedBy(\MTFI\Nic\Bundle\SecuredLoginBundle\Entity\User $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \MTFI\Nic\Bundle\SecuredLoginBundle\Entity\User
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
}
