<?php

namespace Railken\LaraOre\Tests\Tax;

use Railken\LaraOre\Support\Testing\ManagerTestableTrait;
use Railken\LaraOre\Tax\TaxManager;
use Railken\LaraOre\Tax\TaxFaker;

class ManagerTest extends BaseTest
{
    use ManagerTestableTrait;

    /**
     * Retrieve basic url.
     *
     * @return \Railken\Laravel\Manager\Contracts\ManagerContract
     */
    public function getManager()
    {
        return new TaxManager();
    }

    public function testSuccessCommon()
    {
        $this->commonTest($this->getManager(), TaxFaker::make()->parameters());
    }
}
