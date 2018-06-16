<?php

namespace Railken\LaraOre\Tax\Attributes\Description\Exceptions;

use Railken\LaraOre\Tax\Exceptions\TaxAttributeException;

class TaxDescriptionNotValidException extends TaxAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'description';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'TAX_DESCRIPTION_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
