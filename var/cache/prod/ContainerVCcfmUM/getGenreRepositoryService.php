<?php

namespace ContainerVCcfmUM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGenreRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\GenreRepository' shared autowired service.
     *
     * @return \App\Repository\GenreRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\GenreRepository'] = new \App\Repository\GenreRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
