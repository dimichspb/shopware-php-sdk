<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\LandingPageTag;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class LandingPageTagDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'landing_page_tag';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return LandingPageTagEntity::class;
    }

    public function getEntityCollection() : string
    {
        return LandingPageTagCollection::class;
    }
}
