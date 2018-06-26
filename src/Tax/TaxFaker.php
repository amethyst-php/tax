<?php

namespace Railken\LaraOre\Tax;

use Railken\Bag;
use Faker\Factory;

class TaxFaker
{
    /**
     * @return array
     */
    public static function make()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', "VAT 22%");
        $bag->set('description', $faker->realText);
        $bag->set('calculator', 'x*0.22');

        return $bag;
    }
}
