<?php

namespace ContainerVCcfmUM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_ContainerAwareMigrationsFactoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.migrations.container_aware_migrations_factory' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\MigrationsFactory\ContainerAwareMigrationFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.migrations.container_aware_migrations_factory'] = new \Doctrine\Bundle\MigrationsBundle\MigrationsFactory\ContainerAwareMigrationFactory(($container->privates['doctrine.migrations.dependency_factory'] ?? $container->load('getDoctrine_Migrations_DependencyFactoryService'))->getMigrationFactory(), $container);
    }
}
