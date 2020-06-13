<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A map.")
 */
class Map extends CreativeWork
{
    /**
     * @var MapCategoryType|null
     */
    protected $mapType;
    /**
     * @param MapCategoryType|null $mapType
     */
    public function setMapType(?MapCategoryType $mapType) : void
    {
        $this->mapType = $mapType;
    }
    /**
     * @return MapCategoryType|null
     */
    public function getMapType() : ?MapCategoryType
    {
        return $this->mapType;
    }
}
