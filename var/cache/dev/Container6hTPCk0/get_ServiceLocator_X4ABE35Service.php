<?php

namespace Container6hTPCk0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_X4ABE35Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.X4ABE35' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.X4ABE35'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'position' => ['privates', '.errored..service_locator.X4ABE35.App\\Entity\\Position', NULL, 'Cannot autowire service ".service_locator.X4ABE35": it needs an instance of "App\\Entity\\Position" but this type has been excluded in "config/services.yaml".'],
            'positionRepository' => ['privates', 'App\\Repository\\PositionRepository', 'getPositionRepositoryService', true],
        ], [
            'position' => 'App\\Entity\\Position',
            'positionRepository' => 'App\\Repository\\PositionRepository',
        ]);
    }
}
