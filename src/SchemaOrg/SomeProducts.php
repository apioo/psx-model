<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A placeholder for multiple similar products of the same kind.")
 */
class SomeProducts extends Product implements \JsonSerializable
{
    /**
     * @var QuantitativeValue|null
     */
    protected $inventoryLevel;
    /**
     * @param QuantitativeValue|null $inventoryLevel
     */
    public function setInventoryLevel(?QuantitativeValue $inventoryLevel) : void
    {
        $this->inventoryLevel = $inventoryLevel;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getInventoryLevel() : ?QuantitativeValue
    {
        return $this->inventoryLevel;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('inventoryLevel' => $this->inventoryLevel), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
