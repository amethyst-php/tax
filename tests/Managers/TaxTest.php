<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\TaxFaker;
use Amethyst\Managers\TaxManager;
use Amethyst\Tests\BaseTest;
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
