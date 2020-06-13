<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("An offer to transfer some rights to an item or to provide a service — for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.<br/><br/>

Note: As the <a class=""localLink"" href=""http://schema.org/businessFunction"">businessFunction</a> property, which identifies the form of offer (e.g. sell, lease, repair, dispose), defaults to http://purl.org/goodrelations/v1#Sell; an Offer without a defined businessFunction value can be assumed to be an offer to sell.<br/><br/>

For <a href=""http://www.gs1.org/barcodes/technical/idkeys/gtin"">GTIN</a>-related fields, see <a href=""http://www.gs1.org/barcodes/support/check_digit_calculator"">Check Digit calculator</a> and <a href=""http://www.gs1us.org/resources/standards/gtin-validation-guide"">validation guide</a> from <a href=""http://www.gs1.org/"">GS1</a>.")
*/
class Offer extends Intangible
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
     * @var \PSX\DateTime\Date|null
     */
    protected $priceValidUntil;
    /**
     * @var QuantitativeValue|null
     */
    protected $inventoryLevel;
    /**
     * @var PriceSpecification|null
     */
    protected $priceSpecification;
    /**
     * @var float|string|null
     */
    protected $price;
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
     * @var \PSX\Uri\Uri|Thing|string|null
     */
    protected $category;
    /**
     * @var DeliveryMethod|null
     */
    protected $availableDeliveryMethod;
    /**
     * @var Offer|null
     */
    protected $addOn;
    /**
     * @var string|null
     */
    protected $priceCurrency;
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
     * @var AggregateRating|null
     */
    protected $aggregateRating;
    /**
     * @var string|null
     */
    protected $gtin8;
    /**
     * @var QuantitativeValue|null
     */
    protected $eligibleQuantity;
    /**
     * @var Review|null
     */
    protected $review;
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
     * @var Organization|Person|Offer|null
     */
    protected $makesOffer;
    /**
     * @var Organization|Person|null
     */
    protected $offeredBy;
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
     * @param \PSX\DateTime\Date|null $priceValidUntil
     */
    public function setPriceValidUntil(?\PSX\DateTime\Date $priceValidUntil) : void
    {
        $this->priceValidUntil = $priceValidUntil;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getPriceValidUntil() : ?\PSX\DateTime\Date
    {
        return $this->priceValidUntil;
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
     * @param float|string|null $price
     */
    public function setPrice($price) : void
    {
        $this->price = $price;
    }
    /**
     * @return float|string|null
     */
    public function getPrice()
    {
        return $this->price;
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
     * @param \PSX\Uri\Uri|Thing|string|null $category
     */
    public function setCategory($category) : void
    {
        $this->category = $category;
    }
    /**
     * @return \PSX\Uri\Uri|Thing|string|null
     */
    public function getCategory()
    {
        return $this->category;
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
     * @param Offer|null $addOn
     */
    public function setAddOn(?Offer $addOn) : void
    {
        $this->addOn = $addOn;
    }
    /**
     * @return Offer|null
     */
    public function getAddOn() : ?Offer
    {
        return $this->addOn;
    }
    /**
     * @param string|null $priceCurrency
     */
    public function setPriceCurrency(?string $priceCurrency) : void
    {
        $this->priceCurrency = $priceCurrency;
    }
    /**
     * @return string|null
     */
    public function getPriceCurrency() : ?string
    {
        return $this->priceCurrency;
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
     * @param AggregateRating|null $aggregateRating
     */
    public function setAggregateRating(?AggregateRating $aggregateRating) : void
    {
        $this->aggregateRating = $aggregateRating;
    }
    /**
     * @return AggregateRating|null
     */
    public function getAggregateRating() : ?AggregateRating
    {
        return $this->aggregateRating;
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
     * @param Review|null $review
     */
    public function setReview(?Review $review) : void
    {
        $this->review = $review;
    }
    /**
     * @return Review|null
     */
    public function getReview() : ?Review
    {
        return $this->review;
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
     * @param Organization|Person|Offer|null $makesOffer
     */
    public function setMakesOffer($makesOffer) : void
    {
        $this->makesOffer = $makesOffer;
    }
    /**
     * @return Organization|Person|Offer|null
     */
    public function getMakesOffer()
    {
        return $this->makesOffer;
    }
    /**
     * @param Organization|Person|null $offeredBy
     */
    public function setOfferedBy($offeredBy) : void
    {
        $this->offeredBy = $offeredBy;
    }
    /**
     * @return Organization|Person|null
     */
    public function getOfferedBy()
    {
        return $this->offeredBy;
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
}
