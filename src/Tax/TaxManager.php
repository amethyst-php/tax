<?php

namespace Railken\LaraOre\Tax;

use Illuminate\Support\Facades\Config;
use Railken\Laravel\Manager\Contracts\AgentContract;
use Railken\Laravel\Manager\ModelManager;
use Railken\Laravel\Manager\Tokens;

class TaxManager extends ModelManager
{
    /**
     * Class name entity.
     *
     * @var string
     */
    public $entity = Tax::class;

    /**
     * List of all attributes.
     *
     * @var array
     */
    protected $attributes = [
        Attributes\Id\IdAttribute::class,
        Attributes\Name\NameAttribute::class,
        Attributes\CreatedAt\CreatedAtAttribute::class,
        Attributes\UpdatedAt\UpdatedAtAttribute::class,
        Attributes\DeletedAt\DeletedAtAttribute::class,
        Attributes\Description\DescriptionAttribute::class,
        Attributes\Calculator\CalculatorAttribute::class,
    ];

    /**
     * List of all exceptions.
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_AUTHORIZED => Exceptions\TaxNotAuthorizedException::class,
    ];

    /**
     * Construct.
     *
     * @param AgentContract $agent
     */
    public function __construct(AgentContract $agent = null)
    {
        $this->attributes = array_merge($this->attributes, array_values(Config::get('ore.tax.attributes')));
        $this->setRepository(new TaxRepository($this));
        $this->setSerializer(new TaxSerializer($this));
        $this->setValidator(new TaxValidator($this));
        $this->setAuthorizer(new TaxAuthorizer($this));

        parent::__construct($agent);
    }
}
