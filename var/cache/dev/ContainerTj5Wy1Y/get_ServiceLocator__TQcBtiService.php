<?php

namespace ContainerTj5Wy1Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__TQcBtiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..TQcBti' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..TQcBti'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'blog' => ['privates', '.errored..service_locator..TQcBti.App\\Entity\\Blog', NULL, 'Cannot autowire service ".service_locator..TQcBti": it needs an instance of "App\\Entity\\Blog" but this type has been excluded in "config/services.yaml".'],
        ], [
            'blog' => 'App\\Entity\\Blog',
        ]);
    }
}
