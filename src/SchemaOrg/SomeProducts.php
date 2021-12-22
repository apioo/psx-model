<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A placeholder for multiple similar products of the same kind.')]
class SomeProducts extends Product implements \JsonSerializable
{
    protected ?QuantitativeValue $inventoryLevel = null;
    public function setInventoryLevel(?QuantitativeValue $inventoryLevel) : void
    {
        $this->inventoryLevel = $inventoryLevel;
    }
    public function getInventoryLevel() : ?QuantitativeValue
    {
        return $this->inventoryLevel;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('inventoryLevel' => $this->inventoryLevel), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

