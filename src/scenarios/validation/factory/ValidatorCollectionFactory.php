<?php

namespace bookimed\scenarios\validation\factory;

use bookimed\scenarios\validation\collection\ValidatorCollection;
use bookimed\scenarios\validation\validator\ValidatorInterface;

class ValidatorCollectionFactory
{
    public function create(ValidatorInterface ...$validators) : ValidatorCollection
    {
        return new ValidatorCollection(...$validators);
    }
}
