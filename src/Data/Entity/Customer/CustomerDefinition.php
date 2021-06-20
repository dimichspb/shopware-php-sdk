<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Customer;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'customer';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CustomerEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CustomerCollection::class;
    }
}
