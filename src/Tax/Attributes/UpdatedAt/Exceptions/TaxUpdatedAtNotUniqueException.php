<?php

namespace Railken\LaraOre\Tax\Attributes\UpdatedAt\Exceptions;

use Railken\LaraOre\Tax\Exceptions\TaxAttributeException;

class TaxUpdatedAtNotUniqueException extends TaxAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'updated_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'TAX_UPDATED_AT_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
