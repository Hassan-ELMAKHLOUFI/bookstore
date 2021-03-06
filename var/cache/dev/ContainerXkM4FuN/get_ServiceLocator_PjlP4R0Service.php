<?php

namespace ContainerXkM4FuN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PjlP4R0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PjlP4R0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PjlP4R0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'livre' => ['privates', '.errored..service_locator.PjlP4R0.App\\Entity\\Livre', NULL, 'Cannot autowire service ".service_locator.PjlP4R0": it references class "App\\Entity\\Livre" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'livre' => 'App\\Entity\\Livre',
        ]);
    }
}
