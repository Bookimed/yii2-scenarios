<?php

namespace bookimed\scenarios\validation\factory;

use bookimed\scenarios\validation\validator\IntegerValidator;
use bookimed\scenarios\validation\validator\RequiredValidator;
use bookimed\scenarios\validation\validator\ValidatorInterface;

class ValidatorFactory
{
    protected $validators = [
        'integer' => IntegerValidator::class,
        'required' => RequiredValidator::class
    ];

    public function create(string $validatorName, array $params = []) : ValidatorInterface
    {
        if (!isset($this->validators[$validatorName])) {
            throw new \InvalidArgumentException("Validator $validatorName not supported");
        }
        return new $this->validators[$validatorName]($params);
    }
}
