<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A supply consumed when performing the instructions for how to achieve a result.')]
class HowToSupply extends HowToItem implements \JsonSerializable
{
    protected string|MonetaryAmount|null $estimatedCost = null;
    public function setEstimatedCost(string|MonetaryAmount|null $estimatedCost) : void
    {
        $this->estimatedCost = $estimatedCost;
    }
    public function getEstimatedCost() : string|MonetaryAmount|null
    {
        return $this->estimatedCost;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('estimatedCost' => $this->estimatedCost), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

