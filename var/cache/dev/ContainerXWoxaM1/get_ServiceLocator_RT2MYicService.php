<?php

namespace ContainerXWoxaM1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RT2MYicService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RT2MYic' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RT2MYic'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'contactRepository' => ['privates', 'App\\Repository\\ContactRepository', 'getContactRepositoryService', true],
        ], [
            'contactRepository' => 'App\\Repository\\ContactRepository',
        ]);
    }
}
