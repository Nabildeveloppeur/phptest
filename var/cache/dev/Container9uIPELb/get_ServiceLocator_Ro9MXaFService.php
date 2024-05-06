<?php

namespace Container9uIPELb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ro9MXaFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ro9MXaF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ro9MXaF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'security.event_dispatcher.api' => ['privates', 'debug.security.event_dispatcher.api', 'getDebug_Security_EventDispatcher_ApiService', true],
            'security.event_dispatcher.login' => ['privates', 'debug.security.event_dispatcher.login', 'getDebug_Security_EventDispatcher_LoginService', true],
            'security.event_dispatcher.main' => ['privates', 'debug.security.event_dispatcher.main', 'getDebug_Security_EventDispatcher_MainService', false],
        ], [
            'event_dispatcher' => '?',
            'security.event_dispatcher.api' => '?',
            'security.event_dispatcher.login' => '?',
            'security.event_dispatcher.main' => '?',
        ]);
    }
}
