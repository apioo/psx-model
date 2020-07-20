<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A map.")
 */
class Map extends CreativeWork implements \JsonSerializable
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
    public function jsonSerialize()
    {
        return (object) array_filter(array('mapType' => $this->mapType), static function ($value) : bool {
            return $value !== null;
        });
    }
}
