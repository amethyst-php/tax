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
            'model'      => Amethyst\Models\Tax::class,
            'schema'     => Amethyst\Schemas\TaxSchema::class,
            'repository' => Amethyst\Repositories\TaxRepository::class,
            'serializer' => Amethyst\Serializers\TaxSerializer::class,
            'validator'  => Amethyst\Validators\TaxValidator::class,
            'authorizer' => Amethyst\Authorizers\TaxAuthorizer::class,
            'faker'      => Amethyst\Fakers\TaxFaker::class,
            'manager'    => Amethyst\Managers\TaxManager::class,
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
                'controller' => Amethyst\Http\Controllers\Admin\TaxesController::class,
                'router'     => [
                    'as'     => 'tax.',
                    'prefix' => '/taxes',
                ],
            ],
        ],
    ],
];
