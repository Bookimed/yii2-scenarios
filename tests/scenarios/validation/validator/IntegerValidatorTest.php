<?php

namespace bookimed\scenariostests\validation\validator;

use bookimed\scenarios\validation\validator\IntegerValidator;
use PHPUnit\Framework\TestCase;

class IntegerValidatorTest  extends TestCase
{
    protected $validator;

    protected $constructorErrorMessage = 'Test message';

    protected function setUp() : void
    {
        $this->validator = new IntegerValidator(['message' => $this->constructorErrorMessage]);
    }

    public function testSetMessage()
    {
        $this->assertEquals($this->constructorErrorMessage, $this->validator->getMessage());
        $message = 'Custom message';
        $this->validator->setMessage($message);
        $this->assertEquals($message, $this->validator->getMessage());
    }

    public function testValidate()
    {
        $this->assertTrue($this->validator->validate(1));
        $this->assertFalse($this->validator->validate('str'));
    }
}
