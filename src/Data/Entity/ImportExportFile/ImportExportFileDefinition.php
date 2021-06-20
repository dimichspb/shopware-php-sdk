<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ImportExportFile;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ImportExportFileDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'import_export_file';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ImportExportFileEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ImportExportFileCollection::class;
    }
}
