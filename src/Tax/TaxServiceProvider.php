<?php

namespace Railken\LaraOre\Tax;

use Illuminate\Support\ServiceProvider;

class TaxServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        Tax::observe(TaxObserver::class);
    }
}
