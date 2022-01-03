<?php

namespace ContainerXkM4FuN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Fgyhf2IService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fgyhf2I' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fgyhf2I'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'livreRepository' => ['privates', 'App\\Repository\\LivreRepository', 'getLivreRepositoryService', true],
        ], [
            'livreRepository' => 'App\\Repository\\LivreRepository',
        ]);
    }
}
