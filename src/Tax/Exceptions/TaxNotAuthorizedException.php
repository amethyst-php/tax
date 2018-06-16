<?php

namespace Railken\LaraOre\Tax\Exceptions;

class TaxNotAuthorizedException extends TaxException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'TAX_NOT_AUTHORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
