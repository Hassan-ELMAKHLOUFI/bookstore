<?php

namespace ContainerSG1x72j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRechercherLivreTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\RechercherLivreType' shared autowired service.
     *
     * @return \App\Form\RechercherLivreType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/RechercherLivreType.php';

        return $container->privates['App\\Form\\RechercherLivreType'] = new \App\Form\RechercherLivreType();
    }
}
