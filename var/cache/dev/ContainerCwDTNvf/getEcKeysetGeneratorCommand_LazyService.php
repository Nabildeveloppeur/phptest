<?php

namespace ContainerCwDTNvf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEcKeysetGeneratorCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Jose\Component\Console\EcKeysetGeneratorCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.Jose\\Component\\Console\\EcKeysetGeneratorCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('keyset:generate:ec', [], 'Generate an EC key set (JWKSet format)', false, #[\Closure(name: 'Jose\\Component\\Console\\EcKeysetGeneratorCommand')] fn (): \Jose\Component\Console\EcKeysetGeneratorCommand => ($container->privates['Jose\\Component\\Console\\EcKeysetGeneratorCommand'] ?? $container->load('getEcKeysetGeneratorCommandService')));
    }
}
