<?php

/*
 * This file is part of the CCDNUser SecurityBundle
 *
 * (c) CCDN (c) CodeConsortium <http://www.codeconsortium.com/>
 *
 * Available on github <http://www.github.com/codeconsortium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MTFI\Nic\Bundle\SecuredLoginBundle\Security\Tracker;

use MTFI\Nic\Bundle\SecuredLoginBundle\Model\FrontModel\SessionModel;

/**
 *
 * @category CCDNUser
 * @package  SecurityBundle
 *
 * @author   Reece Fowell <reece@codeconsortium.com>
 * @license  http://opensource.org/licenses/MIT MIT
 * @version  Release: 2.0
 * @link     https://github.com/codeconsortium/CCDNUserSecurityBundle
 *
 */
class LoginFailureTracker
{
    /**
     *
     * @access protected
     * @var \MTFI\Nic\Bundle\SecuredLoginBundle\Model\FrontModel\SessionModel $sessionModel
     */
    protected $sessionModel;

    
    /**
     *
     * @access public
     * @param  string $ipAddress
     * @param  int    $blockingPeriod
     * @return array
     */
    public function getAttempts($ipAddress, $blockingPeriod)
    {
        // Set a limit on how far back we want to look at failed login attempts.
        $timeLimit = new \DateTime('-' . $blockingPeriod . ' minutes');
        $attempts = $this->sessionModel->findAllByIpAddressAndLoginAttemptDate($ipAddress, $timeLimit);

        return $attempts;
    }

    /**
     *
     * @access public
     * @param string $ipAddress
     * @param string $username
     */
    public function addAttempt($ipAddress, $username)
    {
        // Make a note of the failed login.
        //$this->sessionModel->newRecord($ipAddress, $username);
    }
}
