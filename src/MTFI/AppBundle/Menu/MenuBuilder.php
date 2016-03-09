<?php

namespace MTFI\AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class MenuBuilder extends ContainerAware {

    public function mainMenu(FactoryInterface $factory, array $options) {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
        $departmentLevel = $this->container->get('portal.profile.service')->getUserLevel();

        if ($this->container->get('security.context')->isGranted(array('ROLE_SUPER_ADMIN'))) {
            $menu->addChild('', array('route' => 'portal_go_main_dashboard', 'attributes' => array('class' => 'home-menu')))->setAttribute('icon', 'fa fa-2x fa-home');
            $menu->addChild('Masters', array('route' => '_logout'))->setAttribute('dropdown', true);
            $menu['Masters']->addChild('Head Of Account', array('route' => 'admin_add_general_masters_manage', 'routeParameters' => array('for' => 'hoa')))->setAttribute('divider_append', true);
            $menu['Masters']->addChild('Funding Source', array('route' => 'admin_add_general_masters_manage', 'routeParameters' => array('for' => 'funding-source')))->setAttribute('divider_append', true);
            $menu['Masters']->addChild('Demand', array('route' => 'admin_add_general_masters_manage', 'routeParameters' => array('for' => 'demand')))->setAttribute('divider_append', true);
            $menu['Masters']->addChild('Scheme Components', array('route' => 'admin_masters_add_overall_work_components'))->setAttribute('divider_append', true);
            $menu['Masters']->addChild('HR Designations', array('route' => 'admin_manage_overall_hr_components'))->setAttribute('divider_append', true);
            $menu['Masters']->addChild('Category - Sub-category Mapping', array('route' => 'admin_manage_scheme_catagory', 'attributes' => array('id' => 'mapping')))->setAttribute('divider_append', true);
        } elseif ($this->container->get('security.context')->isGranted(array('ROLE_FYFI_ADMIN'))) {
            $menu->addChild('', array('route' => 'portal_go_main_dashboard', 'attributes' => array('class' => 'home-menu')))->setAttribute('icon', 'fa fa-2x fa-home');
            $menu->addChild('Masters', array('route' => '_logout'))->setAttribute('dropdown', true);
            $menu['Masters']->addChild('Head Of Account', array('route' => 'admin_add_general_masters_manage', 'routeParameters' => array('for' => 'hoa')))->setAttribute('divider_append', true);
            $menu['Masters']->addChild('Funding Source', array('route' => 'admin_add_general_masters_manage', 'routeParameters' => array('for' => 'funding-source')))->setAttribute('divider_append', true);
            $menu['Masters']->addChild('Demand', array('route' => 'admin_add_general_masters_manage', 'routeParameters' => array('for' => 'demand')))->setAttribute('divider_append', true);
            $menu['Masters']->addChild('Designation', array('route' => 'admin_add_general_masters_manage', 'routeParameters' => array('for' => 'designation')))->setAttribute('divider_append', true);
            $menu['Masters']->addChild('Scheme Components', array('route' => 'admin_masters_add_overall_work_components'))->setAttribute('divider_append', true);
            $menu['Masters']->addChild('HR Designations', array('route' => 'admin_manage_overall_hr_components'))->setAttribute('divider_append', true);
            $menu['Masters']->addChild('Mapping', array('route' => '_logout', 'attributes' => array('class' => 'dropdown-submenu')));
            $menu['Masters']->getChild('Mapping')->setAttribute('dropdown', true);
            $menu['Masters']->getChild('Mapping')->addChild('Category - Sub-category Mapping', array('route' => 'admin_manage_scheme_catagory', 'attributes' => array('id' => 'mapping')))->setAttribute('divider_append', true);
        } elseif ($this->container->get('security.context')->isGranted(array('ROLE_FYFI_USER'))) {
            $menu->addChild('', array('route' => 'home_page', 'attributes' => array('class' => 'home-menu')))->setAttribute('icon', 'fa fa-2x fa-home');
//            $menu->addChild('Masters', array('route' => '_logout'))->setAttribute('dropdown', true);
//            $menu['Masters']->addChild('Head Of Account', array('route' => 'admin_add_general_masters_manage', 'routeParameters' => array('for' => 'hoa')))->setAttribute('divider_append', true);
//            $menu['Masters']->addChild('Funding Source', array('route' => 'admin_add_general_masters_manage', 'routeParameters' => array('for' => 'funding-source')))->setAttribute('divider_append', true);
//            $menu['Masters']->addChild('Demand', array('route' => 'admin_add_general_masters_manage', 'routeParameters' => array('for' => 'demand')))->setAttribute('divider_append', true);
//            $menu['Masters']->addChild('Designation', array('route' => 'admin_add_general_masters_manage', 'routeParameters' => array('for' => 'designation')))->setAttribute('divider_append', true);
//            $menu['Masters']->addChild('Scheme Components', array('route' => 'admin_masters_add_overall_work_components'))->setAttribute('divider_append', true);
//            $menu['Masters']->addChild('HR Designations', array('route' => 'admin_manage_overall_hr_components'))->setAttribute('divider_append', true);
//            $menu['Masters']->addChild('Category - Sub-category Mapping', array('route' => 'admin_manage_scheme_catagory', 'attributes' => array('id' => 'mapping')))->setAttribute('divider_append', true);
//            if ($departmentLevel == 1) {
//                $menu->addChild('Overview', array('route' => 'fyfi_finance_department_full_overview'));
//            }
        }

        return $menu;
    }

}
