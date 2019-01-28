<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Form\Doctrine;

use MSBios\Doctrine\ObjectManagerInitializer;
use Zend\ModuleManager\Feature\FormElementProviderInterface;

/**
 * Class Module
 * @package MSBios\Form\Doctrine
 */
class Module extends \MSBios\Module implements FormElementProviderInterface
{
    /** @const VERSION */
    const VERSION = '1.0.7';

    /**
     * @inheritdoc
     *
     * @return string
     */
    protected function getDir()
    {
        return __DIR__;
    }

    /**
     * @inheritdoc
     *
     * @return string
     */
    protected function getNamespace()
    {
        return __NAMESPACE__;
    }

    /**
     * @inheritdoc
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getFormElementConfig()
    {
        return [
            'initializers' => [
                ObjectManagerInitializer::class =>
                    new ObjectManagerInitializer
            ]
        ];
    }
}
