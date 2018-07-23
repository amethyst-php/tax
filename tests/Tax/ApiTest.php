<?php

namespace Railken\LaraOre\Tests\Tax;

use Illuminate\Support\Facades\Config;
use Railken\LaraOre\Support\Testing\ApiTestableTrait;
use Railken\LaraOre\Tax\TaxFaker;

class ApiTest extends BaseTest
{
    use ApiTestableTrait;

    /**
     * Retrieve basic url.
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return Config::get('ore.api.router.prefix').Config::get('ore.tax.http.admin.router.prefix');
    }

    /**
     * Test common requests.
     */
    public function testSuccessCommon()
    {
        $this->commonTest($this->getBaseUrl(), TaxFaker::make()->parameters());
    }
}
