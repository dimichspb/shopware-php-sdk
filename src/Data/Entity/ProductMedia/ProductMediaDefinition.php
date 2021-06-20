<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductMedia;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductMediaDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_media';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductMediaEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductMediaCollection::class;
    }
}
