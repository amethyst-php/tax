<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class TaxAuthorizer extends Authorizer
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
