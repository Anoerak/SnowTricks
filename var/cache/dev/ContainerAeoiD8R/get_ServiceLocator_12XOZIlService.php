<?php

namespace ContainerAeoiD8R;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_12XOZIlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.12XOZIl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.12XOZIl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\TrickRepository', 'getTrickRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\TrickRepository',
        ]);
    }
}
