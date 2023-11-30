<?php

namespace ContainerQiBe2X7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategorieController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Frontend\CategorieController' shared autowired service.
     *
     * @return \App\Controller\Frontend\CategorieController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Frontend/CategorieController.php';

        $container->services['App\\Controller\\Frontend\\CategorieController'] = $instance = new \App\Controller\Frontend\CategorieController(($container->privates['App\\Repository\\CategorieRepository'] ?? $container->load('getCategorieRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\Frontend\\CategorieController', $container));

        return $instance;
    }
}