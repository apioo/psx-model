<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('A demand entity represents the public, not necessarily binding, not necessarily exclusive, announcement by an organization or person to seek a certain type of goods or services. For describing demand using this type, the very same properties used for Offer apply.')]
class Demand extends Intangible implements \JsonSerializable
{
    protected ?PriceSpecification $eligibleTransactionVolume = null;
    protected ?OfferItemCondition $itemCondition = null;
    protected \PSX\Uri\Uri|string|PropertyValue|null $identifier = null;
    protected ?BusinessEntityType $eligibleCustomerType = null;
    protected PaymentMethod|LoanOrCredit|null $acceptedPaymentMethod = null;
    protected ?WarrantyPromise $warranty = null;
    protected ?QuantitativeValue $advanceBookingRequirement = null;
    protected ?QuantitativeValue $inventoryLevel = null;
    protected ?PriceSpecification $priceSpecification = null;
    protected ?TypeAndQuantityNode $includesObject = null;
    protected string|Place|GeoShape|null $areaServed = null;
    protected string|GeoShape|Place|null $eligibleRegion = null;
    protected ?DeliveryMethod $availableDeliveryMethod = null;
    protected Organization|Person|null $seller = null;
    protected ?string $mpn = null;
    protected \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalTime|\PSX\DateTime\LocalDate|null $availabilityStarts = null;
    #[Key('gtin8')]
    protected ?string $gtin = null;
    protected ?QuantitativeValue $eligibleQuantity = null;
    protected ?string $sku = null;
    protected \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $validThrough = null;
    protected \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalTime|\PSX\DateTime\LocalDate|null $availabilityEnds = null;
    protected \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $validFrom = null;
    protected ?string $vehicleIdentificationNumber = null;
    protected ?string $serialNumber = null;
    #[Key('gtin12')]
    protected ?string $gtin = null;
    #[Key('gtin14')]
    protected ?string $gtin = null;
    protected ?BusinessFunction $businessFunction = null;
    protected ?QuantitativeValue $eligibleDuration = null;
    protected ?ItemAvailability $availability = null;
    protected ?QuantitativeValue $deliveryLeadTime = null;
    protected Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered = null;
    public function setEligibleTransactionVolume(?PriceSpecification $eligibleTransactionVolume) : void
    {
        $this->eligibleTransactionVolume = $eligibleTransactionVolume;
    }
    public function getEligibleTransactionVolume() : ?PriceSpecification
    {
        return $this->eligibleTransactionVolume;
    }
    public function setItemCondition(?OfferItemCondition $itemCondition) : void
    {
        $this->itemCondition = $itemCondition;
    }
    public function getItemCondition() : ?OfferItemCondition
    {
        return $this->itemCondition;
    }
    public function setIdentifier(\PSX\Uri\Uri|string|PropertyValue|null $identifier) : void
    {
        $this->identifier = $identifier;
    }
    public function getIdentifier() : \PSX\Uri\Uri|string|PropertyValue|null
    {
        return $this->identifier;
    }
    public function setEligibleCustomerType(?BusinessEntityType $eligibleCustomerType) : void
    {
        $this->eligibleCustomerType = $eligibleCustomerType;
    }
    public function getEligibleCustomerType() : ?BusinessEntityType
    {
        return $this->eligibleCustomerType;
    }
    public function setAcceptedPaymentMethod(PaymentMethod|LoanOrCredit|null $acceptedPaymentMethod) : void
    {
        $this->acceptedPaymentMethod = $acceptedPaymentMethod;
    }
    public function getAcceptedPaymentMethod() : PaymentMethod|LoanOrCredit|null
    {
        return $this->acceptedPaymentMethod;
    }
    public function setWarranty(?WarrantyPromise $warranty) : void
    {
        $this->warranty = $warranty;
    }
    public function getWarranty() : ?WarrantyPromise
    {
        return $this->warranty;
    }
    public function setAdvanceBookingRequirement(?QuantitativeValue $advanceBookingRequirement) : void
    {
        $this->advanceBookingRequirement = $advanceBookingRequirement;
    }
    public function getAdvanceBookingRequirement() : ?QuantitativeValue
    {
        return $this->advanceBookingRequirement;
    }
    public function setInventoryLevel(?QuantitativeValue $inventoryLevel) : void
    {
        $this->inventoryLevel = $inventoryLevel;
    }
    public function getInventoryLevel() : ?QuantitativeValue
    {
        return $this->inventoryLevel;
    }
    public function setPriceSpecification(?PriceSpecification $priceSpecification) : void
    {
        $this->priceSpecification = $priceSpecification;
    }
    public function getPriceSpecification() : ?PriceSpecification
    {
        return $this->priceSpecification;
    }
    public function setIncludesObject(?TypeAndQuantityNode $includesObject) : void
    {
        $this->includesObject = $includesObject;
    }
    public function getIncludesObject() : ?TypeAndQuantityNode
    {
        return $this->includesObject;
    }
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
    public function setAvailableDeliveryMethod(?DeliveryMethod $availableDeliveryMethod) : void
    {
        $this->availableDeliveryMethod = $availableDeliveryMethod;
    }
    public function getAvailableDeliveryMethod() : ?DeliveryMethod
    {
        return $this->availableDeliveryMethod;
    }
    public function setSeller(Organization|Person|null $seller) : void
    {
        $this->seller = $seller;
    }
    public function getSeller() : Organization|Person|null
    {
        return $this->seller;
    }
    public function setMpn(?string $mpn) : void
    {
        $this->mpn = $mpn;
    }
    public function getMpn() : ?string
    {
        return $this->mpn;
    }
    public function setAvailabilityStarts(\PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalTime|\PSX\DateTime\LocalDate|null $availabilityStarts) : void
    {
        $this->availabilityStarts = $availabilityStarts;
    }
    public function getAvailabilityStarts() : \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalTime|\PSX\DateTime\LocalDate|null
    {
        return $this->availabilityStarts;
    }
    public function setGtin(?string $gtin) : void
    {
        $this->gtin = $gtin;
    }
    public function getGtin() : ?string
    {
        return $this->gtin;
    }
    public function setEligibleQuantity(?QuantitativeValue $eligibleQuantity) : void
    {
        $this->eligibleQuantity = $eligibleQuantity;
    }
    public function getEligibleQuantity() : ?QuantitativeValue
    {
        return $this->eligibleQuantity;
    }
    public function setSku(?string $sku) : void
    {
        $this->sku = $sku;
    }
    public function getSku() : ?string
    {
        return $this->sku;
    }
    public function setValidThrough(\PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $validThrough) : void
    {
        $this->validThrough = $validThrough;
    }
    public function getValidThrough() : \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null
    {
        return $this->validThrough;
    }
    public function setAvailabilityEnds(\PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalTime|\PSX\DateTime\LocalDate|null $availabilityEnds) : void
    {
        $this->availabilityEnds = $availabilityEnds;
    }
    public function getAvailabilityEnds() : \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalTime|\PSX\DateTime\LocalDate|null
    {
        return $this->availabilityEnds;
    }
    public function setValidFrom(\PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $validFrom) : void
    {
        $this->validFrom = $validFrom;
    }
    public function getValidFrom() : \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null
    {
        return $this->validFrom;
    }
    public function setVehicleIdentificationNumber(?string $vehicleIdentificationNumber) : void
    {
        $this->vehicleIdentificationNumber = $vehicleIdentificationNumber;
    }
    public function getVehicleIdentificationNumber() : ?string
    {
        return $this->vehicleIdentificationNumber;
    }
    public function setSerialNumber(?string $serialNumber) : void
    {
        $this->serialNumber = $serialNumber;
    }
    public function getSerialNumber() : ?string
    {
        return $this->serialNumber;
    }
    public function setGtin(?string $gtin) : void
    {
        $this->gtin = $gtin;
    }
    public function getGtin() : ?string
    {
        return $this->gtin;
    }
    public function setGtin(?string $gtin) : void
    {
        $this->gtin = $gtin;
    }
    public function getGtin() : ?string
    {
        return $this->gtin;
    }
    public function setBusinessFunction(?BusinessFunction $businessFunction) : void
    {
        $this->businessFunction = $businessFunction;
    }
    public function getBusinessFunction() : ?BusinessFunction
    {
        return $this->businessFunction;
    }
    public function setEligibleDuration(?QuantitativeValue $eligibleDuration) : void
    {
        $this->eligibleDuration = $eligibleDuration;
    }
    public function getEligibleDuration() : ?QuantitativeValue
    {
        return $this->eligibleDuration;
    }
    public function setAvailability(?ItemAvailability $availability) : void
    {
        $this->availability = $availability;
    }
    public function getAvailability() : ?ItemAvailability
    {
        return $this->availability;
    }
    public function setDeliveryLeadTime(?QuantitativeValue $deliveryLeadTime) : void
    {
        $this->deliveryLeadTime = $deliveryLeadTime;
    }
    public function getDeliveryLeadTime() : ?QuantitativeValue
    {
        return $this->deliveryLeadTime;
    }
    public function setItemOffered(Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered) : void
    {
        $this->itemOffered = $itemOffered;
    }
    public function getItemOffered() : Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
    {
        return $this->itemOffered;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('eligibleTransactionVolume' => $this->eligibleTransactionVolume, 'itemCondition' => $this->itemCondition, 'identifier' => $this->identifier, 'eligibleCustomerType' => $this->eligibleCustomerType, 'acceptedPaymentMethod' => $this->acceptedPaymentMethod, 'warranty' => $this->warranty, 'advanceBookingRequirement' => $this->advanceBookingRequirement, 'inventoryLevel' => $this->inventoryLevel, 'priceSpecification' => $this->priceSpecification, 'includesObject' => $this->includesObject, 'areaServed' => $this->areaServed, 'eligibleRegion' => $this->eligibleRegion, 'availableDeliveryMethod' => $this->availableDeliveryMethod, 'seller' => $this->seller, 'mpn' => $this->mpn, 'availabilityStarts' => $this->availabilityStarts, 'gtin14' => $this->gtin, 'eligibleQuantity' => $this->eligibleQuantity, 'sku' => $this->sku, 'validThrough' => $this->validThrough, 'availabilityEnds' => $this->availabilityEnds, 'validFrom' => $this->validFrom, 'vehicleIdentificationNumber' => $this->vehicleIdentificationNumber, 'serialNumber' => $this->serialNumber, 'businessFunction' => $this->businessFunction, 'eligibleDuration' => $this->eligibleDuration, 'availability' => $this->availability, 'deliveryLeadTime' => $this->deliveryLeadTime, 'itemOffered' => $this->itemOffered), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

