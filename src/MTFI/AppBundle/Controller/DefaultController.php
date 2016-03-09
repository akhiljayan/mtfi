<?php

namespace MTFI\AppBundle\Controller;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTFI\Nic\Bundle\SecuredLoginBundle\Forms\LoginForm;
use MTFI\Nic\Bundle\SecuredLoginBundle\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;
use MTFI\AppBundle\Interfaces\AuditableControllerInterface;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller implements AuditableControllerInterface {

    public function indexAction(Request $request) {
        $session = $request->getSession();
        $user = new User();
        $form = $this->createForm(new LoginForm(), $user);
        if ($this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {

            return new RedirectResponse($this->generateUrl("_logout"));
        }
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } elseif (null !== $session && $session->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }

        if ($error) {
            $error = $error->getMessage();
        }
        $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);
        $csrfToken = $this->container->has('form.csrf_provider') ? $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate') : null;
        $salt = md5(uniqid(php_uname('n')));
        return $this->render('MTFIAppBundle:Index:index.html.twig', array('form' => $form->createView(), 'error' => $error, 'csrf_token' => $csrfToken, 'browserSalt' => $salt));
    }
    
    public function mainRedirectAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if ($this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            if ($user->hasRole('ROLE_FYFI_USER')) {
                $logedBy = $em->getRepository("MTFIAppBundle:Masters\FyfiUser")->findOneByLoginId($user->getId());
                $departmentLevel = $this->container->get('portal.profile.service')->getUserLevel();
                if ($departmentLevel == 4) {
                    return $this->render('MTFIAppBundle:Dashboard:deptUserDashboard.html.twig', array('user'=>$logedBy));
                } else {
                    return $this->render('MTFIAppBundle:Dashboard:deptUserDashboard.html.twig', array('user'=>$logedBy));
                }
            }
        } else {
            return $this->indexAction($request);
        }
    }

}
