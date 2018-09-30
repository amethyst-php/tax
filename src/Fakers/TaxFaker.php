<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class TaxFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', 'VAT 22%');
        $bag->set('description', $faker->text);
        $bag->set('calculator', 'x*0.22');

        return $bag;
    }
}
