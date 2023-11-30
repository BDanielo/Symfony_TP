<?php

namespace ContainerQiBe2X7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategorieTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CategorieType' shared autowired service.
     *
     * @return \App\Form\CategorieType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/CategorieType.php';

        return $container->privates['App\\Form\\CategorieType'] = new \App\Form\CategorieType();
    }
}
