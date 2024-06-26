<?php

namespace ContainerCwDTNvf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_77EmxgHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.77EmxgH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.77EmxgH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'emarger' => ['privates', '.errored..service_locator.77EmxgH.App\\Entity\\Emarger', NULL, 'Cannot autowire service ".service_locator.77EmxgH": it needs an instance of "App\\Entity\\Emarger" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'emarger' => 'App\\Entity\\Emarger',
            'entityManager' => '?',
        ]);
    }
}
