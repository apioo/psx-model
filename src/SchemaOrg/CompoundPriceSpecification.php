<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A compound price specification is one that bundles multiple prices that all apply in combination for different dimensions of consumption. Use the name property of the attached unit price specification for indicating the dimension of a price component (e.g. "electricity" or "final cleaning").')]
class CompoundPriceSpecification extends PriceSpecification implements \JsonSerializable
{
    protected ?UnitPriceSpecification $priceComponent = null;
    public function setPriceComponent(?UnitPriceSpecification $priceComponent) : void
    {
        $this->priceComponent = $priceComponent;
    }
    public function getPriceComponent() : ?UnitPriceSpecification
    {
        return $this->priceComponent;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('priceComponent' => $this->priceComponent), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

