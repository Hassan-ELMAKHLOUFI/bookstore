<?php

namespace ContainerXpvwlxn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1S2iSUYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1S2iSUY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1S2iSUY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'genre' => ['privates', '.errored..service_locator.1S2iSUY.App\\Entity\\Genre', NULL, 'Cannot autowire service ".service_locator.1S2iSUY": it references class "App\\Entity\\Genre" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'genre' => 'App\\Entity\\Genre',
        ]);
    }
}
