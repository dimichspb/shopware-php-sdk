<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PromotionSetgroupRule;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionSetgroupRuleDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'promotion_setgroup_rule';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PromotionSetgroupRuleEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PromotionSetgroupRuleCollection::class;
    }
}
