<?php

namespace Railken\LaraOre\Tax\Attributes\Calculator\Exceptions;

use Railken\LaraOre\Tax\Exceptions\TaxAttributeException;

class TaxCalculatorNotValidException extends TaxAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'calculator';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'TAX_CALCULATOR_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
