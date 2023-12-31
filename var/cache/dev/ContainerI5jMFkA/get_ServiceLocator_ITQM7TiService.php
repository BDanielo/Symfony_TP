<?php

namespace ContainerI5jMFkA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ITQM7TiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ITQM7Ti' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ITQM7Ti'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'auteur' => ['privates', '.errored..service_locator.ITQM7Ti.App\\Entity\\Auteur', NULL, 'Cannot autowire service ".service_locator.ITQM7Ti": it needs an instance of "App\\Entity\\Auteur" but this type has been excluded in "config/services.yaml".'],
        ], [
            'auteur' => 'App\\Entity\\Auteur',
        ]);
    }
}
