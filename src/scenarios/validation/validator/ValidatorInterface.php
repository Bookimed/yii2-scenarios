<?php

namespace bookimed\scenarios\validation\validator;

interface ValidatorInterface
{
    public function validate($value, array $context = []) : bool;

    public function getMessage() : string;
}
