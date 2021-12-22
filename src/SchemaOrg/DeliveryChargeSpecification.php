<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The price for the delivery of an offer using a particular delivery method.')]
class DeliveryChargeSpecification extends PriceSpecification implements \JsonSerializable
{
    protected string|Place|GeoShape|null $areaServed = null;
    protected string|GeoShape|Place|null $eligibleRegion = null;
    protected ?DeliveryMethod $appliesToDeliveryMethod = null;
    public function setAreaServed(string|Place|GeoShape|null $areaServed) : void
    {
        $this->areaServed = $areaServed;
    }
    public function getAreaServed() : string|Place|GeoShape|null
    {
        return $this->areaServed;
    }
    public function setEligibleRegion(string|GeoShape|Place|null $eligibleRegion) : void
    {
        $this->eligibleRegion = $eligibleRegion;
    }
    public function getEligibleRegion() : string|GeoShape|Place|null
    {
        return $this->eligibleRegion;
    }
    public function setAppliesToDeliveryMethod(?DeliveryMethod $appliesToDeliveryMethod) : void
    {
        $this->appliesToDeliveryMethod = $appliesToDeliveryMethod;
    }
    public function getAppliesToDeliveryMethod() : ?DeliveryMethod
    {
        return $this->appliesToDeliveryMethod;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('areaServed' => $this->areaServed, 'eligibleRegion' => $this->eligibleRegion, 'appliesToDeliveryMethod' => $this->appliesToDeliveryMethod), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

