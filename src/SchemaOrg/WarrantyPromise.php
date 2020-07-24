<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A structured value representing the duration and scope of services that will be provided to a customer free of charge in case of a defect or malfunction of a product.")
 */
class WarrantyPromise extends StructuredValue implements \JsonSerializable
{
    /**
     * @var WarrantyScope|null
     */
    protected $warrantyScope;
    /**
     * @var QuantitativeValue|null
     */
    protected $durationOfWarranty;
    /**
     * @param WarrantyScope|null $warrantyScope
     */
    public function setWarrantyScope(?WarrantyScope $warrantyScope) : void
    {
        $this->warrantyScope = $warrantyScope;
    }
    /**
     * @return WarrantyScope|null
     */
    public function getWarrantyScope() : ?WarrantyScope
    {
        return $this->warrantyScope;
    }
    /**
     * @param QuantitativeValue|null $durationOfWarranty
     */
    public function setDurationOfWarranty(?QuantitativeValue $durationOfWarranty) : void
    {
        $this->durationOfWarranty = $durationOfWarranty;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getDurationOfWarranty() : ?QuantitativeValue
    {
        return $this->durationOfWarranty;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('warrantyScope' => $this->warrantyScope, 'durationOfWarranty' => $this->durationOfWarranty), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
