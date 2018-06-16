<?php

namespace Railken\LaraOre\Tax\Attributes\DeletedAt\Exceptions;

use Railken\LaraOre\Tax\Exceptions\TaxAttributeException;

class TaxDeletedAtNotAuthorizedException extends TaxAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'deleted_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'TAX_DELETED_AT_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
