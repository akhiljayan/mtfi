<?php

namespace MTFI\Nic\Bundle\SecuredLoginBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class NicSecuredLoginExtension extends Extension {

    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container) {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');
        
        
        
        // Class file namespaces.
//         $this->getEntitySection($container, $config);
//         $this->getGatewaySection($container, $config);
//         $this->getRepositorySection($container, $config);
//         $this->getManagerSection($container, $config);
//         $this->getModelSection($container, $config);
//         $this->getComponentSection($container, $config);
        // Configuration stuff.
        $this->getRouteRefererSection($container, $config);
        $this->getLoginShieldSection($container, $config);
    }

    /**
     *
     * @access private
     * @param  array                                                                  $config
     * @param  \Symfony\Component\DependencyInjection\ContainerBuilder                $container
     * @return \CCDNUser\SecurityBundle\DependencyInjection\CCDNUserSecurityExtension
     */
    private function getEntitySection(ContainerBuilder $container, $config) {
        $container->setParameter('nic_secured_login.entity.user.class', $config['entity']['user']['class']);
        $container->setParameter('nic_secured_login.entity.session.class', $config['entity']['session']['class']);

        return $this;
    }

    /**
     *
     * @access private
     * @param  array                                                                  $config
     * @param  \Symfony\Component\DependencyInjection\ContainerBuilder                $container
     * @return \CCDNUser\SecurityBundle\DependencyInjection\CCDNUserSecurityExtension
     */
    private function getGatewaySection(ContainerBuilder $container, $config) {
        $container->setParameter('nic_secured_login.gateway.session.class', $config['gateway']['session']['class']);

        return $this;
    }

    /**
     *
     * @access private
     * @param  array                                                                  $config
     * @param  \Symfony\Component\DependencyInjection\ContainerBuilder                $container
     * @return \CCDNUser\SecurityBundle\DependencyInjection\CCDNUserSecurityExtension
     */
    private function getRepositorySection(ContainerBuilder $container, $config) {
        $container->setParameter('nic_secured_login.repository.session.class', $config['repository']['session']['class']);

        return $this;
    }

    /**
     *
     * @access private
     * @param  array                                                                  $config
     * @param  \Symfony\Component\DependencyInjection\ContainerBuilder                $container
     * @return \CCDNUser\SecurityBundle\DependencyInjection\CCDNUserSecurityExtension
     */
    private function getManagerSection(ContainerBuilder $container, $config) {
        $container->setParameter('nic_secured_login.manager.session.class', $config['manager']['session']['class']);

        return $this;
    }

    /**
     *
     * @access private
     * @param  array                                                                  $config
     * @param  \Symfony\Component\DependencyInjection\ContainerBuilder                $container
     * @return \CCDNUser\SecurityBundle\DependencyInjection\CCDNUserSecurityExtension
     */
    private function getModelSection(ContainerBuilder $container, $config) {
        $container->setParameter('nic_secured_login.model.session.class', $config['model']['session']['class']);

        return $this;
    }

    /**
     *
     * @access private
     * @param  array                                                                  $config
     * @param  \Symfony\Component\DependencyInjection\ContainerBuilder                $container
     * @return \CCDNUser\SecurityBundle\DependencyInjection\CCDNUserSecurityExtension
     */
    private function getComponentSection(ContainerBuilder $container, $config) {
        $container->setParameter('nic_secured_login.component.authentication.handler.login_failure_handler.class', $config['component']['authentication']['handler']['login_failure_handler']['class']);
        $container->setParameter('nic_secured_login.component.authentication.handler.login_success_handler.class', $config['component']['authentication']['handler']['login_success_handler']['class']);
        $container->setParameter('nic_secured_login.component.authentication.handler.logout_success_handler.class', $config['component']['authentication']['handler']['logout_success_handler']['class']);
        $container->setParameter('nic_secured_login.component.authentication.tracker.login_failure_tracker.class', $config['component']['authentication']['tracker']['login_failure_tracker']['class']);

        $container->setParameter('nic_secured_login.component.authorisation.voter.client_login_voter.class', $config['component']['authorisation']['voter']['client_login_voter']['class']);

        $container->setParameter('nic_secured_login.component.listener.route_referer_listener.class', $config['component']['listener']['route_referer_listener']['class']);
        $container->setParameter('nic_secured_login.component.listener.blocking_login_listener.class', $config['component']['listener']['blocking_login_listener']['class']);

        $container->setParameter('nic_secured_login.component.route_referer_ignore.chain.class', $config['component']['route_referer_ignore']['chain']['class']);

        return $this;
    }

    /**
     *
     * @access private
     * @param  array                                                                  $config
     * @param  \Symfony\Component\DependencyInjection\ContainerBuilder                $container
     * @return \CCDNUser\SecurityBundle\DependencyInjection\CCDNUserSecurityExtension
     */
    private function getRouteRefererSection(ContainerBuilder $container, $config) {
        $container->setParameter('nic_secured_login.route_referer', $config['route_referer']);
        $container->setParameter('nic_secured_login.route_referer.enabled', $config['route_referer']['enabled']);
        $container->setParameter('nic_secured_login.route_referer.route_ignore_list', $config['route_referer']['route_ignore_list']);

        return $this;
    }

    /**
     *
     * @access private
     * @param  array                                                                  $config
     * @param  \Symfony\Component\DependencyInjection\ContainerBuilder                $container
     * @return \CCDNUser\SecurityBundle\DependencyInjection\CCDNUserSecurityExtension
     */
    private function getLoginShieldSection(ContainerBuilder $container, $config) {
        $container->setParameter('nic_secured_login.login_shield.route_login', $config['login_shield']['route_login']);
        $container->setParameter('nic_secured_login.login_shield.force_account_recovery', $config['login_shield']['force_account_recovery']);
        $container->setParameter('nic_secured_login.login_shield.block_pages', $config['login_shield']['block_pages']);

        return $this;
    }

}
