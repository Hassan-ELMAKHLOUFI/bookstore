<?php

namespace ContainerVCcfmUM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DZK_BiqService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.dZK.biq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dZK.biq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'auteurRepository' => ['privates', 'App\\Repository\\AuteurRepository', 'getAuteurRepositoryService', true],
        ], [
            'auteurRepository' => 'App\\Repository\\AuteurRepository',
        ]);
    }
}
