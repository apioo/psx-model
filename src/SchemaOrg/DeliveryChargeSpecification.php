<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The price for the delivery of an offer using a particular delivery method.")
 */
class DeliveryChargeSpecification extends PriceSpecification implements \JsonSerializable
{
    /**
     * @var string|Place|GeoShape|null
     */
    protected $areaServed;
    /**
     * @var string|GeoShape|Place|null
     */
    protected $eligibleRegion;
    /**
     * @var DeliveryMethod|null
     */
    protected $appliesToDeliveryMethod;
    /**
     * @param string|Place|GeoShape|null $areaServed
     */
    public function setAreaServed($areaServed) : void
    {
        $this->areaServed = $areaServed;
    }
    /**
     * @return string|Place|GeoShape|null
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }
    /**
     * @param string|GeoShape|Place|null $eligibleRegion
     */
    public function setEligibleRegion($eligibleRegion) : void
    {
        $this->eligibleRegion = $eligibleRegion;
    }
    /**
     * @return string|GeoShape|Place|null
     */
    public function getEligibleRegion()
    {
        return $this->eligibleRegion;
    }
    /**
     * @param DeliveryMethod|null $appliesToDeliveryMethod
     */
    public function setAppliesToDeliveryMethod(?DeliveryMethod $appliesToDeliveryMethod) : void
    {
        $this->appliesToDeliveryMethod = $appliesToDeliveryMethod;
    }
    /**
     * @return DeliveryMethod|null
     */
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
