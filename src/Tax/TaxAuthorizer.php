<?php

namespace Railken\LaraOre\Tax;

use Railken\Laravel\Manager\ModelAuthorizer;
use Railken\Laravel\Manager\Tokens;

class TaxAuthorizer extends ModelAuthorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'tax.create',
        Tokens::PERMISSION_UPDATE => 'tax.update',
        Tokens::PERMISSION_SHOW   => 'tax.show',
        Tokens::PERMISSION_REMOVE => 'tax.remove',
    ];
}
