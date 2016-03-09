<?php

namespace MTFI\Nic\Bundle\SecuredLoginBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NicSecuredLoginBundle extends Bundle
{
    
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
