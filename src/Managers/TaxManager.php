<?php

namespace Amethyst\Managers;

use Amethyst\Core\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Tax                 newEntity()
 * @method \Amethyst\Schemas\TaxSchema          getSchema()
 * @method \Amethyst\Repositories\TaxRepository getRepository()
 * @method \Amethyst\Serializers\TaxSerializer  getSerializer()
 * @method \Amethyst\Validators\TaxValidator    getValidator()
 * @method \Amethyst\Authorizers\TaxAuthorizer  getAuthorizer()
 */
class TaxManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.tax.data.tax';
}
