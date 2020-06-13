<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A compound price specification is one that bundles multiple prices that all apply in combination for different dimensions of consumption. Use the name property of the attached unit price specification for indicating the dimension of a price component (e.g. ""electricity"" or ""final cleaning"").")
 */
class CompoundPriceSpecification extends PriceSpecification
{
    /**
     * @var UnitPriceSpecification|null
     */
    protected $priceComponent;
    /**
     * @param UnitPriceSpecification|null $priceComponent
     */
    public function setPriceComponent(?UnitPriceSpecification $priceComponent) : void
    {
        $this->priceComponent = $priceComponent;
    }
    /**
     * @return UnitPriceSpecification|null
     */
    public function getPriceComponent() : ?UnitPriceSpecification
    {
        return $this->priceComponent;
    }
}
