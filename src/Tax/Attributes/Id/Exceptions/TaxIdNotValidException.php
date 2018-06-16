<?php

namespace Railken\LaraOre\Tax\Attributes\Id\Exceptions;

use Railken\LaraOre\Tax\Exceptions\TaxAttributeException;

class TaxIdNotValidException extends TaxAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'id';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'TAX_ID_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
