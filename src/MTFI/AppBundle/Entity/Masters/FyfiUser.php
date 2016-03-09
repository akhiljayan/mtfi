<?php

namespace MTFI\AppBundle\Entity\Masters;

use Doctrine\ORM\Mapping as ORM;

/**
 * FyfiUser
 *
 * @ORM\Table(name="fyfi_users")
 * @ORM\Entity(repositoryClass="\MTFI\AppBundle\Entity\Repository\FyfiUserRepository")
 */
class FyfiUser 
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
     * @var string
     *
     * @ORM\Column(name="gu_id", type="string", length=32)
     */
    private $guId;

    /**
     * @ORM\ManyToOne(targetEntity="MTFI\Nic\Bundle\SecuredLoginBundle\Entity\User")
     * @ORM\JoinColumn(name="login_id", referencedColumnName="id")
     */
    private $loginId;
    
     /**
     * @ORM\ManyToOne(targetEntity="MasterDistrict")
     * @ORM\JoinColumn(name="state_dist_id", referencedColumnName="id")
     */
    private $stateDistId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=225)
     */
    private $name;
    
    /**
     * @var string
     *
     * @ORM\Column(name="login_name", type="string", length=100)
     */
    private $loginName;
    
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;
    
    /**
     * @var string
     *
     * @ORM\Column(name="mobile_number", type="string", length=10)
     */
    private $mobileNumber;
    
    /**
     * @ORM\ManyToOne(targetEntity="DeptDesig")
     * @ORM\JoinColumn(name="dept_desig_id", referencedColumnName="id")
     */
    private $deptDesigId;
    
    /**
     * @ORM\ManyToOne(targetEntity="MasterDept")
     * @ORM\JoinColumn(name="dept_id", referencedColumnName="id")
     */
    private $deptId;
    
    /**
     * @ORM\ManyToOne(targetEntity="MasterDeptLevel")
     * @ORM\JoinColumn(name="dept_level_id", referencedColumnName="id")
     */
    private $deptLevelId;
    /**
     * @var string
     *
     * @ORM\Column(name="user_role", type="string", length=1)
     */
    private $userRole;

   
    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", length=1)
     */
    private $active;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="pointofentry", type="boolean", nullable=true)
     */
    private $pointofentry;

    /**
     * @var string
     *
     * @ORM\Column(name="created_ip", type="string", length=20)
     */
    private $createdIP;

    /**
     * @ORM\ManyToOne(targetEntity="MTFI\Nic\Bundle\SecuredLoginBundle\Entity\User")
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
     * @var \array
     *
     * @ORM\Column(name="user_permission", type="array")
     */
    private $userPermission;
    
    public function __construct()
    {
        $this->userPermission = array();
    }

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
     * Set guId
     *
     * @param string $guId
     *
     * @return FyfiUser
     */
    public function setGuId($guId)
    {
        $this->guId = $guId;

        return $this;
    }

    /**
     * Get guId
     *
     * @return string
     */
    public function getGuId()
    {
        return $this->guId;
    }

    /**
     * Set loginName
     *
     * @param string $loginName
     *
     * @return FyfiUser
     */
    public function setLoginName($loginName)
    {
        $this->loginName = $loginName;

        return $this;
    }

    /**
     * Get loginName
     *
     * @return string
     */
    public function getLoginName()
    {
        return $this->loginName;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return FyfiUser
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set createdIP
     *
     * @param string $createdIP
     *
     * @return FyfiUser
     */
    public function setCreatedIP($createdIP)
    {
        $this->createdIP = $createdIP;

        return $this;
    }

    /**
     * Get createdIP
     *
     * @return string
     */
    public function getCreatedIP()
    {
        return $this->createdIP;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return FyfiUser
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
     * Set loginId
     *
     * @param \MTFI\Nic\Bundle\SecuredLoginBundle\Entity\User $loginId
     *
     * @return FyfiUser
     */
    public function setLoginId(\MTFI\Nic\Bundle\SecuredLoginBundle\Entity\User $loginId = null)
    {
        $this->loginId = $loginId;

        return $this;
    }

    /**
     * Get loginId
     *
     * @return \MTFI\Nic\Bundle\SecuredLoginBundle\Entity\User
     */
    public function getLoginId()
    {
        return $this->loginId;
    }

    /**
     * Set stateDistId
     *
     * @param \MTFI\AppBundle\Entity\Masters\MasterDistrict $stateDistId
     *
     * @return FyfiUser
     */
    public function setStateDistId(\MTFI\AppBundle\Entity\Masters\masterDistrict $stateDistId = null)
    {
        $this->stateDistId = $stateDistId;

        return $this;
    }

    /**
     * Get stateDistId
     *
     * @return \MTFI\AppBundle\Entity\Masters\MasterDistrict
     */
    public function getStateDistId()
    {
        return $this->stateDistId;
    }

    /**
     * Set deptDesigId
     *
     * @param \MTFI\AppBundle\Entity\Masters\DeptDesig $deptDesigId
     *
     * @return FyfiUser
     */
    public function setDeptDesigId(\MTFI\AppBundle\Entity\Masters\DeptDesig $deptDesigId = null)
    {
        $this->deptDesigId = $deptDesigId;

        return $this;
    }

    /**
     * Get deptDesigId
     *
     * @return \MTFI\AppBundle\Entity\Masters\DeptDesig
     */
    public function getDeptDesigId()
    {
        return $this->deptDesigId;
    }

    /**
     * Set deptLevelId
     *
     * @param \MTFI\AppBundle\Entity\Masters\MasterDeptLevel $deptLevelId
     *
     * @return FyfiUser
     */
    public function setDeptLevelId(\MTFI\AppBundle\Entity\Masters\MasterDeptLevel $deptLevelId = null)
    {
        $this->deptLevelId = $deptLevelId;

        return $this;
    }

    /**
     * Get deptLevelId
     *
     * @return \MTFI\AppBundle\Entity\Masters\MasterDeptLevel
     */
    public function getDeptLevelId()
    {
        return $this->deptLevelId;
    }

    /**
     * Set createdBy
     *
     * @param \MTFI\Nic\Bundle\SecuredLoginBundle\Entity\User $createdBy
     *
     * @return FyfiUser
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

    /**
     * Set userRole
     *
     * @param string $userRole
     *
     * @return FyfiUser
     */
    public function setUserRole($userRole)
    {
        $this->userRole = $userRole;

        return $this;
    }

    /**
     * Get userRole
     *
     * @return string
     */
    public function getUserRole()
    {
        return $this->userRole;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return FyfiUser
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return FyfiUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set mobileNumber
     *
     * @param int $mobileNumber
     *
     * @return FyfiUser
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;

        return $this;
    }

    /**
     * Get mobileNumber
     *
     * @return int
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * Set deptId
     *
     * @param \MTFI\AppBundle\Entity\Masters\MasterDept $deptId
     *
     * @return FyfiUser
     */
    public function setDeptId(\MTFI\AppBundle\Entity\Masters\MasterDept $deptId = null)
    {
        $this->deptId = $deptId;

        return $this;
    }

    /**
     * Get deptId
     *
     * @return \MTFI\AppBundle\Entity\Masters\MasterDept
     */
    public function getDeptId()
    {
        return $this->deptId;
    }

    /**
     * Set userPermission
     *
     * @param array $userPermission
     *
     * @return FyfiUser
     */
    public function setUserPermission($userPermission)
    {
        $this->userPermission = $userPermission;

        return $this;
    }

    /**
     * Get userPermission
     *
     * @return array
     */
    public function getUserPermission()
    {
        return $this->userPermission;
    }
    
    /**
     * Never use this to check if this user has access to anything!
     *
     * Use the SecurityContext, or an implementation of AccessDecisionManager
     * instead, e.g.
     *
     *         $securityContext->isGranted('ROLE_USER');
     *
     * @param string $permission
     *
     * @return boolean
     */
    public function hasPermission($permission)
    {
        return in_array(strtoupper($permission), $this->getUserPermission(), true);
    }

    /**
     * Set pointofentry
     *
     * @param bool $pointofentry
     *
     * @return FyfiUser
     */
    public function setPointofentry($pointofentry)
    {
        $this->pointofentry = $pointofentry;

        return $this;
    }

    /**
     * Get pointofentry
     *
     * @return bool
     */
    public function getPointofentry()
    {
        return $this->pointofentry;
    }
}
