<?php

namespace ContainerAeoiD8R;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WrGrPsAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wrGrPsA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wrGrPsA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event' => ['privates', '.errored..service_locator.wrGrPsA.Symfony\\Component\\Security\\Http\\Event\\LogoutEvent', NULL, 'Cannot autowire service ".service_locator.wrGrPsA": it references class "Symfony\\Component\\Security\\Http\\Event\\LogoutEvent" but no such service exists.'],
        ], [
            'event' => 'Symfony\\Component\\Security\\Http\\Event\\LogoutEvent',
        ]);
    }
}
