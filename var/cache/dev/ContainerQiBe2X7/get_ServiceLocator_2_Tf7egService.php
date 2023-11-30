<?php

namespace ContainerQiBe2X7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2_Tf7egService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2.tf7eg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2.tf7eg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\Backend\\AuteurController::delete' => ['privates', '.service_locator.ITQM7Ti', 'get_ServiceLocator_ITQM7TiService', true],
            'App\\Controller\\Backend\\AuteurController::update' => ['privates', '.service_locator.ITQM7Ti', 'get_ServiceLocator_ITQM7TiService', true],
            'App\\Controller\\Backend\\CategorieController::delete' => ['privates', '.service_locator.j7wOkYK', 'get_ServiceLocator_J7wOkYKService', true],
            'App\\Controller\\Backend\\CategorieController::update' => ['privates', '.service_locator.j7wOkYK', 'get_ServiceLocator_J7wOkYKService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\Backend\\AuteurController:delete' => ['privates', '.service_locator.ITQM7Ti', 'get_ServiceLocator_ITQM7TiService', true],
            'App\\Controller\\Backend\\AuteurController:update' => ['privates', '.service_locator.ITQM7Ti', 'get_ServiceLocator_ITQM7TiService', true],
            'App\\Controller\\Backend\\CategorieController:delete' => ['privates', '.service_locator.j7wOkYK', 'get_ServiceLocator_J7wOkYKService', true],
            'App\\Controller\\Backend\\CategorieController:update' => ['privates', '.service_locator.j7wOkYK', 'get_ServiceLocator_J7wOkYKService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\Backend\\AuteurController::delete' => '?',
            'App\\Controller\\Backend\\AuteurController::update' => '?',
            'App\\Controller\\Backend\\CategorieController::delete' => '?',
            'App\\Controller\\Backend\\CategorieController::update' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Backend\\AuteurController:delete' => '?',
            'App\\Controller\\Backend\\AuteurController:update' => '?',
            'App\\Controller\\Backend\\CategorieController:delete' => '?',
            'App\\Controller\\Backend\\CategorieController:update' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
