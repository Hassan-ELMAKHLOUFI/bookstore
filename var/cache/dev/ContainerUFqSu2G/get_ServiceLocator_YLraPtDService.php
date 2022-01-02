<?php

namespace ContainerUFqSu2G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YLraPtDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YLraPtD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YLraPtD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AuteurController::delete' => ['privates', '.service_locator.xHoTv56', 'get_ServiceLocator_XHoTv56Service', true],
            'App\\Controller\\AuteurController::edit' => ['privates', '.service_locator.xHoTv56', 'get_ServiceLocator_XHoTv56Service', true],
            'App\\Controller\\AuteurController::index' => ['privates', '.service_locator.dZK.biq', 'get_ServiceLocator_DZK_BiqService', true],
            'App\\Controller\\AuteurController::new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\AuteurController::show' => ['privates', '.service_locator.PsDS_hI', 'get_ServiceLocator_PsDSHIService', true],
            'App\\Controller\\GenreController::delete' => ['privates', '.service_locator.1S2iSUY', 'get_ServiceLocator_1S2iSUYService', true],
            'App\\Controller\\GenreController::edit' => ['privates', '.service_locator.1S2iSUY', 'get_ServiceLocator_1S2iSUYService', true],
            'App\\Controller\\GenreController::index' => ['privates', '.service_locator.NN15POn', 'get_ServiceLocator_NN15POnService', true],
            'App\\Controller\\GenreController::new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\GenreController::show' => ['privates', '.service_locator.q6BsKYQ', 'get_ServiceLocator_Q6BsKYQService', true],
            'App\\Controller\\LivreController::delete' => ['privates', '.service_locator.PjlP4R0', 'get_ServiceLocator_PjlP4R0Service', true],
            'App\\Controller\\LivreController::edit' => ['privates', '.service_locator.PjlP4R0', 'get_ServiceLocator_PjlP4R0Service', true],
            'App\\Controller\\LivreController::handleSearch' => ['privates', '.service_locator.fgyhf2I', 'get_ServiceLocator_Fgyhf2IService', true],
            'App\\Controller\\LivreController::index' => ['privates', '.service_locator.r1pjxyS', 'get_ServiceLocator_R1pjxySService', true],
            'App\\Controller\\LivreController::new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\LivreController::searchByDate' => ['privates', '.service_locator.fgyhf2I', 'get_ServiceLocator_Fgyhf2IService', true],
            'App\\Controller\\LivreController::show' => ['privates', '.service_locator.a64LFR_', 'get_ServiceLocator_A64LFRService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.4u5os03', 'get_ServiceLocator_4u5os03Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AuteurController:delete' => ['privates', '.service_locator.xHoTv56', 'get_ServiceLocator_XHoTv56Service', true],
            'App\\Controller\\AuteurController:edit' => ['privates', '.service_locator.xHoTv56', 'get_ServiceLocator_XHoTv56Service', true],
            'App\\Controller\\AuteurController:index' => ['privates', '.service_locator.dZK.biq', 'get_ServiceLocator_DZK_BiqService', true],
            'App\\Controller\\AuteurController:new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\AuteurController:show' => ['privates', '.service_locator.PsDS_hI', 'get_ServiceLocator_PsDSHIService', true],
            'App\\Controller\\GenreController:delete' => ['privates', '.service_locator.1S2iSUY', 'get_ServiceLocator_1S2iSUYService', true],
            'App\\Controller\\GenreController:edit' => ['privates', '.service_locator.1S2iSUY', 'get_ServiceLocator_1S2iSUYService', true],
            'App\\Controller\\GenreController:index' => ['privates', '.service_locator.NN15POn', 'get_ServiceLocator_NN15POnService', true],
            'App\\Controller\\GenreController:new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\GenreController:show' => ['privates', '.service_locator.q6BsKYQ', 'get_ServiceLocator_Q6BsKYQService', true],
            'App\\Controller\\LivreController:delete' => ['privates', '.service_locator.PjlP4R0', 'get_ServiceLocator_PjlP4R0Service', true],
            'App\\Controller\\LivreController:edit' => ['privates', '.service_locator.PjlP4R0', 'get_ServiceLocator_PjlP4R0Service', true],
            'App\\Controller\\LivreController:handleSearch' => ['privates', '.service_locator.fgyhf2I', 'get_ServiceLocator_Fgyhf2IService', true],
            'App\\Controller\\LivreController:index' => ['privates', '.service_locator.r1pjxyS', 'get_ServiceLocator_R1pjxySService', true],
            'App\\Controller\\LivreController:new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\LivreController:searchByDate' => ['privates', '.service_locator.fgyhf2I', 'get_ServiceLocator_Fgyhf2IService', true],
            'App\\Controller\\LivreController:show' => ['privates', '.service_locator.a64LFR_', 'get_ServiceLocator_A64LFRService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.4u5os03', 'get_ServiceLocator_4u5os03Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AuteurController::delete' => '?',
            'App\\Controller\\AuteurController::edit' => '?',
            'App\\Controller\\AuteurController::index' => '?',
            'App\\Controller\\AuteurController::new' => '?',
            'App\\Controller\\AuteurController::show' => '?',
            'App\\Controller\\GenreController::delete' => '?',
            'App\\Controller\\GenreController::edit' => '?',
            'App\\Controller\\GenreController::index' => '?',
            'App\\Controller\\GenreController::new' => '?',
            'App\\Controller\\GenreController::show' => '?',
            'App\\Controller\\LivreController::delete' => '?',
            'App\\Controller\\LivreController::edit' => '?',
            'App\\Controller\\LivreController::handleSearch' => '?',
            'App\\Controller\\LivreController::index' => '?',
            'App\\Controller\\LivreController::new' => '?',
            'App\\Controller\\LivreController::searchByDate' => '?',
            'App\\Controller\\LivreController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AuteurController:delete' => '?',
            'App\\Controller\\AuteurController:edit' => '?',
            'App\\Controller\\AuteurController:index' => '?',
            'App\\Controller\\AuteurController:new' => '?',
            'App\\Controller\\AuteurController:show' => '?',
            'App\\Controller\\GenreController:delete' => '?',
            'App\\Controller\\GenreController:edit' => '?',
            'App\\Controller\\GenreController:index' => '?',
            'App\\Controller\\GenreController:new' => '?',
            'App\\Controller\\GenreController:show' => '?',
            'App\\Controller\\LivreController:delete' => '?',
            'App\\Controller\\LivreController:edit' => '?',
            'App\\Controller\\LivreController:handleSearch' => '?',
            'App\\Controller\\LivreController:index' => '?',
            'App\\Controller\\LivreController:new' => '?',
            'App\\Controller\\LivreController:searchByDate' => '?',
            'App\\Controller\\LivreController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
