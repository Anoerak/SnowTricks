<?php

namespace ContainerDx4eI7t;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UWPT3GService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uW_PT3G' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uW_PT3G'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManagerInterface' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'fileUploader' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService', true],
            'trick' => ['privates', '.errored..service_locator.uW_PT3G.App\\Entity\\Trick', NULL, 'Cannot autowire service ".service_locator.uW_PT3G": it needs an instance of "App\\Entity\\Trick" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManagerInterface' => '?',
            'fileUploader' => 'App\\Service\\FileUploader',
            'trick' => 'App\\Entity\\Trick',
        ]);
    }
}
