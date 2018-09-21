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
        $this->entity = Config::get('ore.tax.entity');
        $this->attributes = array_merge($this->attributes, array_values(Config::get('ore.tax.attributes')));

        $classRepository = Config::get('ore.tax.repository');
        $this->setRepository(new $classRepository($this));

        $classSerializer = Config::get('ore.tax.serializer');
        $this->setSerializer(new $classSerializer($this));

        $classAuthorizer = Config::get('ore.tax.authorizer');
        $this->setAuthorizer(new $classAuthorizer($this));

        $classValidator = Config::get('ore.tax.validator');
        $this->setValidator(new $classValidator($this));

        parent::__construct($agent);
    }
}
