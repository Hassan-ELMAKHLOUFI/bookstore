<?php

namespace ContainerXkM4FuN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PsDSHIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PsDS_hI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PsDS_hI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'auteur' => ['privates', '.errored..service_locator.PsDS_hI.App\\Entity\\Auteur', NULL, 'Cannot autowire service ".service_locator.PsDS_hI": it references class "App\\Entity\\Auteur" but no such service exists.'],
        ], [
            'auteur' => 'App\\Entity\\Auteur',
        ]);
    }
}
