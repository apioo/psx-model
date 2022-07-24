<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A map.')]
class Map extends CreativeWork implements \JsonSerializable
{
    protected ?MapCategoryType $mapType = null;
    public function setMapType(?MapCategoryType $mapType) : void
    {
        $this->mapType = $mapType;
    }
    public function getMapType() : ?MapCategoryType
    {
        return $this->mapType;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('mapType' => $this->mapType), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

