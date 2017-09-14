<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Form\Doctrine;

use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class ObjectManagerInitializer
 * @package MSBios\Form\Doctrine\Initializer
 */
trait ObjectManagerAwareTrait
{
    /** @var ObjectManager */
    protected $objectManager;

    /**
     * @param ObjectManager $objectManager
     * @return $this
     */
    public function setObjectManager(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
        return $this;
    }

    /**
     * Get the object manager
     *
     * @return ObjectManager
     */
    public function getObjectManager()
    {
        return $this->objectManager;
    }
}