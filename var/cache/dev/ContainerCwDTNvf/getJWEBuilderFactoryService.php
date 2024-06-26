<?php

namespace ContainerCwDTNvf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJWEBuilderFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Jose\Bundle\JoseFramework\Services\JWEBuilderFactory' shared autowired service.
     *
     * @return \Jose\Bundle\JoseFramework\Services\JWEBuilderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-bundle'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'JWEBuilderFactory.php';

        return $container->services['Jose\\Bundle\\JoseFramework\\Services\\JWEBuilderFactory'] = new \Jose\Bundle\JoseFramework\Services\JWEBuilderFactory(($container->services['Jose\\Component\\Core\\AlgorithmManagerFactory'] ?? self::getAlgorithmManagerFactoryService($container)), ($container->services['Jose\\Component\\Encryption\\Compression\\CompressionMethodManagerFactory'] ?? $container->load('getCompressionMethodManagerFactoryService')), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
    }
}
