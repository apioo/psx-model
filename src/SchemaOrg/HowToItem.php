<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An item used as either a tool or supply when performing the instructions for how to to achieve a result.')]
class HowToItem extends ListItem implements \JsonSerializable
{
    protected float|string|QuantitativeValue|null $requiredQuantity = null;
    public function setRequiredQuantity(float|string|QuantitativeValue|null $requiredQuantity) : void
    {
        $this->requiredQuantity = $requiredQuantity;
    }
    public function getRequiredQuantity() : float|string|QuantitativeValue|null
    {
        return $this->requiredQuantity;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('requiredQuantity' => $this->requiredQuantity), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

