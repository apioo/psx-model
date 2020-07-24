<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A demand entity represents the public, not necessarily binding, not necessarily exclusive, announcement by an organization or person to seek a certain type of goods or services. For describing demand using this type, the very same properties used for Offer apply.")
 */
class Demand extends Intangible implements \JsonSerializable
{
    /**
     * @var PriceSpecification|null
     */
    protected $eligibleTransactionVolume;
    /**
     * @var OfferItemCondition|null
     */
    protected $itemCondition;
    /**
     * @var \PSX\Uri\Uri|string|PropertyValue|null
     */
    protected $identifier;
    /**
     * @var BusinessEntityType|null
     */
    protected $eligibleCustomerType;
    /**
     * @var PaymentMethod|LoanOrCredit|null
     */
    protected $acceptedPaymentMethod;
    /**
     * @var WarrantyPromise|null
     */
    protected $warranty;
    /**
     * @var QuantitativeValue|null
     */
    protected $advanceBookingRequirement;
    /**
     * @var QuantitativeValue|null
     */
    protected $inventoryLevel;
    /**
     * @var PriceSpecification|null
     */
    protected $priceSpecification;
    /**
     * @var TypeAndQuantityNode|null
     */
    protected $includesObject;
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
    protected $availableDeliveryMethod;
    /**
     * @var Organization|Person|null
     */
    protected $seller;
    /**
     * @var string|null
     */
    protected $mpn;
    /**
     * @var \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null
     */
    protected $availabilityStarts;
    /**
     * @var string|null
     */
    protected $gtin8;
    /**
     * @var QuantitativeValue|null
     */
    protected $eligibleQuantity;
    /**
     * @var string|null
     */
    protected $sku;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $validThrough;
    /**
     * @var \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null
     */
    protected $availabilityEnds;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $validFrom;
    /**
     * @var string|null
     */
    protected $vehicleIdentificationNumber;
    /**
     * @var string|null
     */
    protected $serialNumber;
    /**
     * @var string|null
     */
    protected $gtin12;
    /**
     * @var string|null
     */
    protected $gtin14;
    /**
     * @var BusinessFunction|null
     */
    protected $businessFunction;
    /**
     * @var QuantitativeValue|null
     */
    protected $eligibleDuration;
    /**
     * @var ItemAvailability|null
     */
    protected $availability;
    /**
     * @var QuantitativeValue|null
     */
    protected $deliveryLeadTime;
    /**
     * @var Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
     */
    protected $itemOffered;
    /**
     * @param PriceSpecification|null $eligibleTransactionVolume
     */
    public function setEligibleTransactionVolume(?PriceSpecification $eligibleTransactionVolume) : void
    {
        $this->eligibleTransactionVolume = $eligibleTransactionVolume;
    }
    /**
     * @return PriceSpecification|null
     */
    public function getEligibleTransactionVolume() : ?PriceSpecification
    {
        return $this->eligibleTransactionVolume;
    }
    /**
     * @param OfferItemCondition|null $itemCondition
     */
    public function setItemCondition(?OfferItemCondition $itemCondition) : void
    {
        $this->itemCondition = $itemCondition;
    }
    /**
     * @return OfferItemCondition|null
     */
    public function getItemCondition() : ?OfferItemCondition
    {
        return $this->itemCondition;
    }
    /**
     * @param \PSX\Uri\Uri|string|PropertyValue|null $identifier
     */
    public function setIdentifier($identifier) : void
    {
        $this->identifier = $identifier;
    }
    /**
     * @return \PSX\Uri\Uri|string|PropertyValue|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }
    /**
     * @param BusinessEntityType|null $eligibleCustomerType
     */
    public function setEligibleCustomerType(?BusinessEntityType $eligibleCustomerType) : void
    {
        $this->eligibleCustomerType = $eligibleCustomerType;
    }
    /**
     * @return BusinessEntityType|null
     */
    public function getEligibleCustomerType() : ?BusinessEntityType
    {
        return $this->eligibleCustomerType;
    }
    /**
     * @param PaymentMethod|LoanOrCredit|null $acceptedPaymentMethod
     */
    public function setAcceptedPaymentMethod($acceptedPaymentMethod) : void
    {
        $this->acceptedPaymentMethod = $acceptedPaymentMethod;
    }
    /**
     * @return PaymentMethod|LoanOrCredit|null
     */
    public function getAcceptedPaymentMethod()
    {
        return $this->acceptedPaymentMethod;
    }
    /**
     * @param WarrantyPromise|null $warranty
     */
    public function setWarranty(?WarrantyPromise $warranty) : void
    {
        $this->warranty = $warranty;
    }
    /**
     * @return WarrantyPromise|null
     */
    public function getWarranty() : ?WarrantyPromise
    {
        return $this->warranty;
    }
    /**
     * @param QuantitativeValue|null $advanceBookingRequirement
     */
    public function setAdvanceBookingRequirement(?QuantitativeValue $advanceBookingRequirement) : void
    {
        $this->advanceBookingRequirement = $advanceBookingRequirement;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getAdvanceBookingRequirement() : ?QuantitativeValue
    {
        return $this->advanceBookingRequirement;
    }
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
    /**
     * @param PriceSpecification|null $priceSpecification
     */
    public function setPriceSpecification(?PriceSpecification $priceSpecification) : void
    {
        $this->priceSpecification = $priceSpecification;
    }
    /**
     * @return PriceSpecification|null
     */
    public function getPriceSpecification() : ?PriceSpecification
    {
        return $this->priceSpecification;
    }
    /**
     * @param TypeAndQuantityNode|null $includesObject
     */
    public function setIncludesObject(?TypeAndQuantityNode $includesObject) : void
    {
        $this->includesObject = $includesObject;
    }
    /**
     * @return TypeAndQuantityNode|null
     */
    public function getIncludesObject() : ?TypeAndQuantityNode
    {
        return $this->includesObject;
    }
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
     * @param DeliveryMethod|null $availableDeliveryMethod
     */
    public function setAvailableDeliveryMethod(?DeliveryMethod $availableDeliveryMethod) : void
    {
        $this->availableDeliveryMethod = $availableDeliveryMethod;
    }
    /**
     * @return DeliveryMethod|null
     */
    public function getAvailableDeliveryMethod() : ?DeliveryMethod
    {
        return $this->availableDeliveryMethod;
    }
    /**
     * @param Organization|Person|null $seller
     */
    public function setSeller($seller) : void
    {
        $this->seller = $seller;
    }
    /**
     * @return Organization|Person|null
     */
    public function getSeller()
    {
        return $this->seller;
    }
    /**
     * @param string|null $mpn
     */
    public function setMpn(?string $mpn) : void
    {
        $this->mpn = $mpn;
    }
    /**
     * @return string|null
     */
    public function getMpn() : ?string
    {
        return $this->mpn;
    }
    /**
     * @param \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null $availabilityStarts
     */
    public function setAvailabilityStarts($availabilityStarts) : void
    {
        $this->availabilityStarts = $availabilityStarts;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null
     */
    public function getAvailabilityStarts()
    {
        return $this->availabilityStarts;
    }
    /**
     * @param string|null $gtin8
     */
    public function setGtin8(?string $gtin8) : void
    {
        $this->gtin8 = $gtin8;
    }
    /**
     * @return string|null
     */
    public function getGtin8() : ?string
    {
        return $this->gtin8;
    }
    /**
     * @param QuantitativeValue|null $eligibleQuantity
     */
    public function setEligibleQuantity(?QuantitativeValue $eligibleQuantity) : void
    {
        $this->eligibleQuantity = $eligibleQuantity;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getEligibleQuantity() : ?QuantitativeValue
    {
        return $this->eligibleQuantity;
    }
    /**
     * @param string|null $sku
     */
    public function setSku(?string $sku) : void
    {
        $this->sku = $sku;
    }
    /**
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $validThrough
     */
    public function setValidThrough($validThrough) : void
    {
        $this->validThrough = $validThrough;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }
    /**
     * @param \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null $availabilityEnds
     */
    public function setAvailabilityEnds($availabilityEnds) : void
    {
        $this->availabilityEnds = $availabilityEnds;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null
     */
    public function getAvailabilityEnds()
    {
        return $this->availabilityEnds;
    }
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $validFrom
     */
    public function setValidFrom($validFrom) : void
    {
        $this->validFrom = $validFrom;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }
    /**
     * @param string|null $vehicleIdentificationNumber
     */
    public function setVehicleIdentificationNumber(?string $vehicleIdentificationNumber) : void
    {
        $this->vehicleIdentificationNumber = $vehicleIdentificationNumber;
    }
    /**
     * @return string|null
     */
    public function getVehicleIdentificationNumber() : ?string
    {
        return $this->vehicleIdentificationNumber;
    }
    /**
     * @param string|null $serialNumber
     */
    public function setSerialNumber(?string $serialNumber) : void
    {
        $this->serialNumber = $serialNumber;
    }
    /**
     * @return string|null
     */
    public function getSerialNumber() : ?string
    {
        return $this->serialNumber;
    }
    /**
     * @param string|null $gtin12
     */
    public function setGtin12(?string $gtin12) : void
    {
        $this->gtin12 = $gtin12;
    }
    /**
     * @return string|null
     */
    public function getGtin12() : ?string
    {
        return $this->gtin12;
    }
    /**
     * @param string|null $gtin14
     */
    public function setGtin14(?string $gtin14) : void
    {
        $this->gtin14 = $gtin14;
    }
    /**
     * @return string|null
     */
    public function getGtin14() : ?string
    {
        return $this->gtin14;
    }
    /**
     * @param BusinessFunction|null $businessFunction
     */
    public function setBusinessFunction(?BusinessFunction $businessFunction) : void
    {
        $this->businessFunction = $businessFunction;
    }
    /**
     * @return BusinessFunction|null
     */
    public function getBusinessFunction() : ?BusinessFunction
    {
        return $this->businessFunction;
    }
    /**
     * @param QuantitativeValue|null $eligibleDuration
     */
    public function setEligibleDuration(?QuantitativeValue $eligibleDuration) : void
    {
        $this->eligibleDuration = $eligibleDuration;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getEligibleDuration() : ?QuantitativeValue
    {
        return $this->eligibleDuration;
    }
    /**
     * @param ItemAvailability|null $availability
     */
    public function setAvailability(?ItemAvailability $availability) : void
    {
        $this->availability = $availability;
    }
    /**
     * @return ItemAvailability|null
     */
    public function getAvailability() : ?ItemAvailability
    {
        return $this->availability;
    }
    /**
     * @param QuantitativeValue|null $deliveryLeadTime
     */
    public function setDeliveryLeadTime(?QuantitativeValue $deliveryLeadTime) : void
    {
        $this->deliveryLeadTime = $deliveryLeadTime;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getDeliveryLeadTime() : ?QuantitativeValue
    {
        return $this->deliveryLeadTime;
    }
    /**
     * @param Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered
     */
    public function setItemOffered($itemOffered) : void
    {
        $this->itemOffered = $itemOffered;
    }
    /**
     * @return Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
     */
    public function getItemOffered()
    {
        return $this->itemOffered;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('eligibleTransactionVolume' => $this->eligibleTransactionVolume, 'itemCondition' => $this->itemCondition, 'identifier' => $this->identifier, 'eligibleCustomerType' => $this->eligibleCustomerType, 'acceptedPaymentMethod' => $this->acceptedPaymentMethod, 'warranty' => $this->warranty, 'advanceBookingRequirement' => $this->advanceBookingRequirement, 'inventoryLevel' => $this->inventoryLevel, 'priceSpecification' => $this->priceSpecification, 'includesObject' => $this->includesObject, 'areaServed' => $this->areaServed, 'eligibleRegion' => $this->eligibleRegion, 'availableDeliveryMethod' => $this->availableDeliveryMethod, 'seller' => $this->seller, 'mpn' => $this->mpn, 'availabilityStarts' => $this->availabilityStarts, 'gtin8' => $this->gtin8, 'eligibleQuantity' => $this->eligibleQuantity, 'sku' => $this->sku, 'validThrough' => $this->validThrough, 'availabilityEnds' => $this->availabilityEnds, 'validFrom' => $this->validFrom, 'vehicleIdentificationNumber' => $this->vehicleIdentificationNumber, 'serialNumber' => $this->serialNumber, 'gtin12' => $this->gtin12, 'gtin14' => $this->gtin14, 'businessFunction' => $this->businessFunction, 'eligibleDuration' => $this->eligibleDuration, 'availability' => $this->availability, 'deliveryLeadTime' => $this->deliveryLeadTime, 'itemOffered' => $this->itemOffered), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
