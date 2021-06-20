<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Version;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class VersionDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'version';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return VersionEntity::class;
    }

    public function getEntityCollection() : string
    {
        return VersionCollection::class;
    }
}
