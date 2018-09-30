<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\TaxFaker;
use Railken\Amethyst\Managers\TaxManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class TaxTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = TaxManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = TaxFaker::class;
}
