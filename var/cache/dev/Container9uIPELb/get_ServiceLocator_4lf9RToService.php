<?php

namespace Container9uIPELb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4lf9RToService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4lf9RTo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4lf9RTo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'promotion' => ['privates', '.errored..service_locator.4lf9RTo.App\\Entity\\Promotion', NULL, 'Cannot autowire service ".service_locator.4lf9RTo": it needs an instance of "App\\Entity\\Promotion" but this type has been excluded in "config/services.yaml".'],
        ], [
            'promotion' => 'App\\Entity\\Promotion',
        ]);
    }
}
