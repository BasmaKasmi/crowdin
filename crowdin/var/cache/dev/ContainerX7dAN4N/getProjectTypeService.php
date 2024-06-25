<?php

namespace ContainerX7dAN4N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProjectTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ProjectType' shared autowired service.
     *
     * @return \App\Form\ProjectType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ProjectType.php';

        return $container->privates['App\\Form\\ProjectType'] = new \App\Form\ProjectType();
    }
}
