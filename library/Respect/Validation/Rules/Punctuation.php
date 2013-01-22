<?php

namespace Respect\Validation\Rules;

class Punctuation extends AbstractCtypeRule
{
    protected function filter($input) {
        return $input;
    }

    protected function ctypeFunction($input) {
        return ctype_punct($input);
    }
}