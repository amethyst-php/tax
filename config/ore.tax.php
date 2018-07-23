<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Table
    |--------------------------------------------------------------------------
    |
    | This is the table used to save configs to the database
    |
    */
    'table' => 'ore_taxes',

    'attributes' => [
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
            'enabled'    => true,
            'controller' => Railken\LaraOre\Http\Controllers\Admin\TaxesController::class,
            'router'     => [
                'prefix'      => '/admin/taxes',
            ],
        ],
    ],
];
