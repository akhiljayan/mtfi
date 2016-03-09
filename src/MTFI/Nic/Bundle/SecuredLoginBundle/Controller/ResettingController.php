<?php

namespace MTFI\Nic\Bundle\SecuredLoginBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Controller\ResettingController as BaseController;
use MTFI\Nic\Bundle\SecuredLoginBundle\Forms\PasswordRecoveryType;

class ResettingController extends BaseController {

    public function indexAction() {


         $form = $this->createForm(new PasswordRecoveryType());
        if ($request->isMethod('POST')) {
            
            $form->handleRequest($request);
            
            $dob = $form["dob"]->getData();
           //$dob = $request->request->get('dob');
        }
         return $this->render('NicSecuredLoginBundle:User:passwordRecovery.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

   

//    public function sendEmailAction(Request $request){
//        
//       return $response = parent::sendEmailAction();
//    }
//    public function checkEmailAction(Request $request){
//        
//        return $response = parent::checkEmailAction();
//    }
//    public function resetAction(Request $request, $token)    {         
//        
//        return $response = parent::resetAction();
//     }    
}
