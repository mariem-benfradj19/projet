<?php

namespace ContainerSkxzvtz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MGJYcH1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mGJYcH1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mGJYcH1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\CoursController::delete' => ['privates', '.service_locator.Slsl7X4', 'get_ServiceLocator_Slsl7X4Service', true],
            'App\\Controller\\CoursController::edit' => ['privates', '.service_locator.Slsl7X4', 'get_ServiceLocator_Slsl7X4Service', true],
            'App\\Controller\\CoursController::index' => ['privates', '.service_locator.QkVYtxV', 'get_ServiceLocator_QkVYtxVService', true],
            'App\\Controller\\CoursController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CoursController::show' => ['privates', '.service_locator.jqHm011', 'get_ServiceLocator_JqHm011Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\CoursController:delete' => ['privates', '.service_locator.Slsl7X4', 'get_ServiceLocator_Slsl7X4Service', true],
            'App\\Controller\\CoursController:edit' => ['privates', '.service_locator.Slsl7X4', 'get_ServiceLocator_Slsl7X4Service', true],
            'App\\Controller\\CoursController:index' => ['privates', '.service_locator.QkVYtxV', 'get_ServiceLocator_QkVYtxVService', true],
            'App\\Controller\\CoursController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CoursController:show' => ['privates', '.service_locator.jqHm011', 'get_ServiceLocator_JqHm011Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\CoursController::delete' => '?',
            'App\\Controller\\CoursController::edit' => '?',
            'App\\Controller\\CoursController::index' => '?',
            'App\\Controller\\CoursController::new' => '?',
            'App\\Controller\\CoursController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CoursController:delete' => '?',
            'App\\Controller\\CoursController:edit' => '?',
            'App\\Controller\\CoursController:index' => '?',
            'App\\Controller\\CoursController:new' => '?',
            'App\\Controller\\CoursController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
