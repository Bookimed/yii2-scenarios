<?php

namespace indigerd\scenariostests\validation\factory;

use indigerd\scenarios\validation\validator\IntegerValidator;
use PHPUnit\Framework\TestCase;
use indigerd\scenarios\validation\factory\ValidatorFactory;

class ValidatorFactoryTest extends TestCase
{
    protected $factory;

    protected function setUp() : void
    {
        $this->factory = new ValidatorFactory();
    }

    public function testCreateInvalidParams()
    {
        $this->expectException(\TypeError::class);
        $this->factory->create('integer', 'params');
    }

    public function testCreateInvalidValidator()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->factory->create('invalidValidator');
    }

    public function testCreate()
    {
        $validator = $this->factory->create('integer');
        $this->assertInstanceOf(IntegerValidator::class, $validator);
    }
}
