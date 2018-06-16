<?php

namespace Railken\LaraOre\Tax\Attributes\CreatedAt\Exceptions;

use Railken\LaraOre\Tax\Exceptions\TaxAttributeException;

class TaxCreatedAtNotValidException extends TaxAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'created_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'TAX_CREATED_AT_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
