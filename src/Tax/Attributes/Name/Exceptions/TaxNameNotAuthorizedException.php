<?php

namespace Railken\LaraOre\Tax\Attributes\Name\Exceptions;

use Railken\LaraOre\Tax\Exceptions\TaxAttributeException;

class TaxNameNotAuthorizedException extends TaxAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'name';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'TAX_NAME_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
