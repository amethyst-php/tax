<?php

namespace Railken\LaraOre\Tax\Exceptions;

class TaxNotFoundException extends TaxException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'TAX_NOT_FOUND';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'Not found';
}
