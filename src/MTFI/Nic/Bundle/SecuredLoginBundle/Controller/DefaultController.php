<?php

namespace MTFI\Nic\Bundle\SecuredLoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NicSecuredLoginBundle:Default:index.html.twig');
    }
}
