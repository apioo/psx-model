<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An offer to transfer some rights to an item or to provide a service — for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.<br/><br/>

Note: As the <a class="localLink" href="http://schema.org/businessFunction">businessFunction</a> property, which identifies the form of offer (e.g. sell, lease, repair, dispose), defaults to http://purl.org/goodrelations/v1#Sell; an Offer without a defined businessFunction value can be assumed to be an offer to sell.<br/><br/>

For <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GTIN</a>-related fields, see <a href="http://www.gs1.org/barcodes/support/check_digit_calculator">Check Digit calculator</a> and <a href="http://www.gs1us.org/resources/standards/gtin-validation-guide">validation guide</a> from <a href="http://www.gs1.org/">GS1</a>.')]
class Offer extends Intangible implements \JsonSerializable
{
    protected ?PriceSpecification $eligibleTransactionVolume = null;
    protected ?OfferItemCondition $itemCondition = null;
    protected \PSX\Uri\Uri|string|PropertyValue|null $identifier = null;
    protected ?BusinessEntityType $eligibleCustomerType = null;
    protected PaymentMethod|LoanOrCredit|null $acceptedPaymentMethod = null;
    protected ?WarrantyPromise $warranty = null;
    protected ?QuantitativeValue $advanceBookingRequirement = null;
    protected ?\PSX\DateTime\Date $priceValidUntil = null;
    protected ?QuantitativeValue $inventoryLevel = null;
    protected ?PriceSpecification $priceSpecification = null;
    protected float|string|null $price = null;
    protected ?TypeAndQuantityNode $includesObject = null;
    protected string|Place|GeoShape|null $areaServed = null;
    protected string|GeoShape|Place|null $eligibleRegion = null;
    protected \PSX\Uri\Uri|Thing|string|null $category = null;
    protected ?DeliveryMethod $availableDeliveryMethod = null;
    protected ?Offer $addOn = null;
    protected ?string $priceCurrency = null;
    protected Organization|Person|null $seller = null;
    protected ?string $mpn = null;
    protected \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null $availabilityStarts = null;
    protected ?AggregateRating $aggregateRating = null;
    protected ?string $gtin8 = null;
    protected ?QuantitativeValue $eligibleQuantity = null;
    protected ?Review $review = null;
    protected ?string $sku = null;
    protected \PSX\DateTime\Date|\DateTime|null $validThrough = null;
    protected \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null $availabilityEnds = null;
    protected \PSX\DateTime\Date|\DateTime|null $validFrom = null;
    protected ?string $vehicleIdentificationNumber = null;
    protected ?string $serialNumber = null;
    protected ?string $gtin12 = null;
    protected ?string $gtin14 = null;
    protected ?BusinessFunction $businessFunction = null;
    protected ?QuantitativeValue $eligibleDuration = null;
    protected ?ItemAvailability $availability = null;
    protected ?QuantitativeValue $deliveryLeadTime = null;
    protected Organization|Person|Offer|null $makesOffer = null;
    protected Organization|Person|null $offeredBy = null;
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
    public function setPriceValidUntil(?\PSX\DateTime\Date $priceValidUntil) : void
    {
        $this->priceValidUntil = $priceValidUntil;
    }
    public function getPriceValidUntil() : ?\PSX\DateTime\Date
    {
        return $this->priceValidUntil;
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
    public function setPrice(float|string|null $price) : void
    {
        $this->price = $price;
    }
    public function getPrice() : float|string|null
    {
        return $this->price;
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
    public function setCategory(\PSX\Uri\Uri|Thing|string|null $category) : void
    {
        $this->category = $category;
    }
    public function getCategory() : \PSX\Uri\Uri|Thing|string|null
    {
        return $this->category;
    }
    public function setAvailableDeliveryMethod(?DeliveryMethod $availableDeliveryMethod) : void
    {
        $this->availableDeliveryMethod = $availableDeliveryMethod;
    }
    public function getAvailableDeliveryMethod() : ?DeliveryMethod
    {
        return $this->availableDeliveryMethod;
    }
    public function setAddOn(?Offer $addOn) : void
    {
        $this->addOn = $addOn;
    }
    public function getAddOn() : ?Offer
    {
        return $this->addOn;
    }
    public function setPriceCurrency(?string $priceCurrency) : void
    {
        $this->priceCurrency = $priceCurrency;
    }
    public function getPriceCurrency() : ?string
    {
        return $this->priceCurrency;
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
    public function setAvailabilityStarts(\DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null $availabilityStarts) : void
    {
        $this->availabilityStarts = $availabilityStarts;
    }
    public function getAvailabilityStarts() : \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null
    {
        return $this->availabilityStarts;
    }
    public function setAggregateRating(?AggregateRating $aggregateRating) : void
    {
        $this->aggregateRating = $aggregateRating;
    }
    public function getAggregateRating() : ?AggregateRating
    {
        return $this->aggregateRating;
    }
    public function setGtin8(?string $gtin8) : void
    {
        $this->gtin8 = $gtin8;
    }
    public function getGtin8() : ?string
    {
        return $this->gtin8;
    }
    public function setEligibleQuantity(?QuantitativeValue $eligibleQuantity) : void
    {
        $this->eligibleQuantity = $eligibleQuantity;
    }
    public function getEligibleQuantity() : ?QuantitativeValue
    {
        return $this->eligibleQuantity;
    }
    public function setReview(?Review $review) : void
    {
        $this->review = $review;
    }
    public function getReview() : ?Review
    {
        return $this->review;
    }
    public function setSku(?string $sku) : void
    {
        $this->sku = $sku;
    }
    public function getSku() : ?string
    {
        return $this->sku;
    }
    public function setValidThrough(\PSX\DateTime\Date|\DateTime|null $validThrough) : void
    {
        $this->validThrough = $validThrough;
    }
    public function getValidThrough() : \PSX\DateTime\Date|\DateTime|null
    {
        return $this->validThrough;
    }
    public function setAvailabilityEnds(\DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null $availabilityEnds) : void
    {
        $this->availabilityEnds = $availabilityEnds;
    }
    public function getAvailabilityEnds() : \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null
    {
        return $this->availabilityEnds;
    }
    public function setValidFrom(\PSX\DateTime\Date|\DateTime|null $validFrom) : void
    {
        $this->validFrom = $validFrom;
    }
    public function getValidFrom() : \PSX\DateTime\Date|\DateTime|null
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
    public function setGtin12(?string $gtin12) : void
    {
        $this->gtin12 = $gtin12;
    }
    public function getGtin12() : ?string
    {
        return $this->gtin12;
    }
    public function setGtin14(?string $gtin14) : void
    {
        $this->gtin14 = $gtin14;
    }
    public function getGtin14() : ?string
    {
        return $this->gtin14;
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
    public function setMakesOffer(Organization|Person|Offer|null $makesOffer) : void
    {
        $this->makesOffer = $makesOffer;
    }
    public function getMakesOffer() : Organization|Person|Offer|null
    {
        return $this->makesOffer;
    }
    public function setOfferedBy(Organization|Person|null $offeredBy) : void
    {
        $this->offeredBy = $offeredBy;
    }
    public function getOfferedBy() : Organization|Person|null
    {
        return $this->offeredBy;
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
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('eligibleTransactionVolume' => $this->eligibleTransactionVolume, 'itemCondition' => $this->itemCondition, 'identifier' => $this->identifier, 'eligibleCustomerType' => $this->eligibleCustomerType, 'acceptedPaymentMethod' => $this->acceptedPaymentMethod, 'warranty' => $this->warranty, 'advanceBookingRequirement' => $this->advanceBookingRequirement, 'priceValidUntil' => $this->priceValidUntil, 'inventoryLevel' => $this->inventoryLevel, 'priceSpecification' => $this->priceSpecification, 'price' => $this->price, 'includesObject' => $this->includesObject, 'areaServed' => $this->areaServed, 'eligibleRegion' => $this->eligibleRegion, 'category' => $this->category, 'availableDeliveryMethod' => $this->availableDeliveryMethod, 'addOn' => $this->addOn, 'priceCurrency' => $this->priceCurrency, 'seller' => $this->seller, 'mpn' => $this->mpn, 'availabilityStarts' => $this->availabilityStarts, 'aggregateRating' => $this->aggregateRating, 'gtin8' => $this->gtin8, 'eligibleQuantity' => $this->eligibleQuantity, 'review' => $this->review, 'sku' => $this->sku, 'validThrough' => $this->validThrough, 'availabilityEnds' => $this->availabilityEnds, 'validFrom' => $this->validFrom, 'vehicleIdentificationNumber' => $this->vehicleIdentificationNumber, 'serialNumber' => $this->serialNumber, 'gtin12' => $this->gtin12, 'gtin14' => $this->gtin14, 'businessFunction' => $this->businessFunction, 'eligibleDuration' => $this->eligibleDuration, 'availability' => $this->availability, 'deliveryLeadTime' => $this->deliveryLeadTime, 'makesOffer' => $this->makesOffer, 'offeredBy' => $this->offeredBy, 'itemOffered' => $this->itemOffered), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

