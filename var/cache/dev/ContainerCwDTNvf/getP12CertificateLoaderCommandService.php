<?php

namespace ContainerCwDTNvf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getP12CertificateLoaderCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Jose\Component\Console\P12CertificateLoaderCommand' shared autowired service.
     *
     * @return \Jose\Component\Console\P12CertificateLoaderCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-library'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'ObjectOutputCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-library'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'GeneratorCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-library'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'P12CertificateLoaderCommand.php';

        $container->privates['Jose\\Component\\Console\\P12CertificateLoaderCommand'] = $instance = new \Jose\Component\Console\P12CertificateLoaderCommand();

        $instance->setName('key:load:p12');
        $instance->setDescription('Load a key from a P12 certificate file.');

        return $instance;
    }
}
