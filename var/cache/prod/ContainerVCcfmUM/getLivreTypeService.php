<?php

namespace ContainerVCcfmUM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLivreTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\LivreType' shared autowired service.
     *
     * @return \App\Form\LivreType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\LivreType'] = new \App\Form\LivreType();
    }
}
