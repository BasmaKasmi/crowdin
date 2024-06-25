<?php

namespace ContainerX7dAN4N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QeJMtgYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QeJMtgY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QeJMtgY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'source' => ['privates', '.errored..service_locator.QeJMtgY.App\\Entity\\Sources', NULL, 'Cannot autowire service ".service_locator.QeJMtgY": it needs an instance of "App\\Entity\\Sources" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'source' => 'App\\Entity\\Sources',
        ]);
    }
}
