<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Form\Doctrine;

use MSBios\Form\Doctrine\Module;
use PHPUnit\Framework\TestCase;

/**
 * Class ModuleTest
 * @package MSBiosTest\Form\Doctrine
 */
class ModuleTest extends TestCase
{
    /** @var Module */
    protected $instance;

    /**
     * @constructor
     */
    protected function setUp()
    {
        parent::setUp();
        $this->instance = new Module;
    }

    /**
     * @return $this
     */
    public function testGetConfig()
    {
        $this->assertIsArray($this->instance->getConfig());
        return $this;
    }

    /**
     * @return $this
     */
    public function testGetAutoloaderConfig()
    {
        $this->assertIsArray($this->instance->getAutoloaderConfig());
        return $this;
    }

    /**
     * @return $this
     */
    public function testGetFormElementConfig()
    {
        $this->assertIsArray($this->instance->getFormElementConfig());
        return $this;
    }
}
