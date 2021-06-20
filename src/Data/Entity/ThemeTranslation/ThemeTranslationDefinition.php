<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ThemeTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'theme_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ThemeTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ThemeTranslationCollection::class;
    }
}
