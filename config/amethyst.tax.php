<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Data
    |--------------------------------------------------------------------------
    |
    | Here you can change the table name and the class components.
    |
    */
    'data' => [
        'tax' => [
            'table'      => 'amethyst_taxes',
            'comment'    => 'Taxes',
            'model'      => Railken\Amethyst\Models\Tax::class,
            'schema'     => Railken\Amethyst\Schemas\TaxSchema::class,
            'repository' => Railken\Amethyst\Repositories\TaxRepository::class,
            'serializer' => Railken\Amethyst\Serializers\TaxSerializer::class,
            'validator'  => Railken\Amethyst\Validators\TaxValidator::class,
            'authorizer' => Railken\Amethyst\Authorizers\TaxAuthorizer::class,
            'faker'      => Railken\Amethyst\Fakers\TaxFaker::class,
            'manager'    => Railken\Amethyst\Managers\TaxManager::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Http configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the routes
    |
    */
    'http' => [
        'admin' => [
            'tax' => [
                'enabled'    => true,
                'controller' => Railken\Amethyst\Http\Controllers\Admin\TaxesController::class,
                'router'     => [
                    'as'     => 'tax.',
                    'prefix' => '/taxes',
                ],
            ],
        ],
    ],
];
