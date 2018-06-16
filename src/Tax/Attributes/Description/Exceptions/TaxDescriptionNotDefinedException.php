<?php

namespace Railken\LaraOre\Tax\Attributes\Description\Exceptions;

use Railken\LaraOre\Tax\Exceptions\TaxAttributeException;

class TaxDescriptionNotDefinedException extends TaxAttributeException
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
    protected $code = 'TAX_DESCRIPTION_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
