<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The delivery of a parcel either via the postal service or a commercial service.')]
class ParcelDelivery extends Intangible implements \JsonSerializable
{
    protected ?DeliveryEvent $deliveryStatus = null;
    protected Organization|Person|null $provider = null;
    protected ?PostalAddress $deliveryAddress = null;
    protected \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $expectedArrivalUntil = null;
    protected ?\PSX\Uri\Uri $trackingUrl = null;
    protected ?string $trackingNumber = null;
    protected ?PostalAddress $originAddress = null;
    protected ?Product $itemShipped = null;
    protected \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalDate|null $expectedArrivalFrom = null;
    protected ?DeliveryMethod $hasDeliveryMethod = null;
    protected ?Order $partOfOrder = null;
    public function setDeliveryStatus(?DeliveryEvent $deliveryStatus) : void
    {
        $this->deliveryStatus = $deliveryStatus;
    }
    public function getDeliveryStatus() : ?DeliveryEvent
    {
        return $this->deliveryStatus;
    }
    public function setProvider(Organization|Person|null $provider) : void
    {
        $this->provider = $provider;
    }
    public function getProvider() : Organization|Person|null
    {
        return $this->provider;
    }
    public function setDeliveryAddress(?PostalAddress $deliveryAddress) : void
    {
        $this->deliveryAddress = $deliveryAddress;
    }
    public function getDeliveryAddress() : ?PostalAddress
    {
        return $this->deliveryAddress;
    }
    public function setExpectedArrivalUntil(\PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $expectedArrivalUntil) : void
    {
        $this->expectedArrivalUntil = $expectedArrivalUntil;
    }
    public function getExpectedArrivalUntil() : \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null
    {
        return $this->expectedArrivalUntil;
    }
    public function setTrackingUrl(?\PSX\Uri\Uri $trackingUrl) : void
    {
        $this->trackingUrl = $trackingUrl;
    }
    public function getTrackingUrl() : ?\PSX\Uri\Uri
    {
        return $this->trackingUrl;
    }
    public function setTrackingNumber(?string $trackingNumber) : void
    {
        $this->trackingNumber = $trackingNumber;
    }
    public function getTrackingNumber() : ?string
    {
        return $this->trackingNumber;
    }
    public function setOriginAddress(?PostalAddress $originAddress) : void
    {
        $this->originAddress = $originAddress;
    }
    public function getOriginAddress() : ?PostalAddress
    {
        return $this->originAddress;
    }
    public function setItemShipped(?Product $itemShipped) : void
    {
        $this->itemShipped = $itemShipped;
    }
    public function getItemShipped() : ?Product
    {
        return $this->itemShipped;
    }
    public function setExpectedArrivalFrom(\PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalDate|null $expectedArrivalFrom) : void
    {
        $this->expectedArrivalFrom = $expectedArrivalFrom;
    }
    public function getExpectedArrivalFrom() : \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalDate|null
    {
        return $this->expectedArrivalFrom;
    }
    public function setHasDeliveryMethod(?DeliveryMethod $hasDeliveryMethod) : void
    {
        $this->hasDeliveryMethod = $hasDeliveryMethod;
    }
    public function getHasDeliveryMethod() : ?DeliveryMethod
    {
        return $this->hasDeliveryMethod;
    }
    public function setPartOfOrder(?Order $partOfOrder) : void
    {
        $this->partOfOrder = $partOfOrder;
    }
    public function getPartOfOrder() : ?Order
    {
        return $this->partOfOrder;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('deliveryStatus' => $this->deliveryStatus, 'provider' => $this->provider, 'deliveryAddress' => $this->deliveryAddress, 'expectedArrivalUntil' => $this->expectedArrivalUntil, 'trackingUrl' => $this->trackingUrl, 'trackingNumber' => $this->trackingNumber, 'originAddress' => $this->originAddress, 'itemShipped' => $this->itemShipped, 'expectedArrivalFrom' => $this->expectedArrivalFrom, 'hasDeliveryMethod' => $this->hasDeliveryMethod, 'partOfOrder' => $this->partOfOrder), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

