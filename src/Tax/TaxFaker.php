<?php

namespace Railken\LaraOre\Tax;

use Faker\Factory;
use Railken\Bag;
use Railken\Laravel\Manager\BaseFaker;

class TaxFaker extends BaseFaker
{
    /**
     * @var string
     */
    protected $manager = TaxManager::class;

    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', 'VAT 22%');
        $bag->set('description', $faker->realText);
        $bag->set('calculator', 'x*0.22');

        return $bag;
    }
}
