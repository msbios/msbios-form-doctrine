<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Form\Doctrine\Initializer;

use Doctrine\ORM\EntityManager;
use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class ObjectManagerInitializer
 * @package MSBios\Form\Doctrine\Initializer
 */
class ObjectManagerInitializer implements InitializerInterface
{
    /**
     * Initialize the given instance
     *
     * @param  ContainerInterface $container
     * @param  object $instance
     * @return void
     */
    public function __invoke(ContainerInterface $container, $instance)
    {
        if (! $instance instanceof ObjectManagerAwareInterface) {
            return;
        }

        $instance->setObjectManager(
            $container->get(EntityManager::class)
        );
    }

    /**
     * @param $an_array
     * @return ObjectManagerInitializer
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}
