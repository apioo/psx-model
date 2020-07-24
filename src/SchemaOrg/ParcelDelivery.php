<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The delivery of a parcel either via the postal service or a commercial service.")
 */
class ParcelDelivery extends Intangible implements \JsonSerializable
{
    /**
     * @var DeliveryEvent|null
     */
    protected $deliveryStatus;
    /**
     * @var Organization|Person|null
     */
    protected $provider;
    /**
     * @var PostalAddress|null
     */
    protected $deliveryAddress;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $expectedArrivalUntil;
    /**
     * @var \PSX\Uri\Uri|null
     */
    protected $trackingUrl;
    /**
     * @var string|null
     */
    protected $trackingNumber;
    /**
     * @var PostalAddress|null
     */
    protected $originAddress;
    /**
     * @var Product|null
     */
    protected $itemShipped;
    /**
     * @var \DateTime|\PSX\DateTime\Date|null
     */
    protected $expectedArrivalFrom;
    /**
     * @var DeliveryMethod|null
     */
    protected $hasDeliveryMethod;
    /**
     * @var Order|null
     */
    protected $partOfOrder;
    /**
     * @param DeliveryEvent|null $deliveryStatus
     */
    public function setDeliveryStatus(?DeliveryEvent $deliveryStatus) : void
    {
        $this->deliveryStatus = $deliveryStatus;
    }
    /**
     * @return DeliveryEvent|null
     */
    public function getDeliveryStatus() : ?DeliveryEvent
    {
        return $this->deliveryStatus;
    }
    /**
     * @param Organization|Person|null $provider
     */
    public function setProvider($provider) : void
    {
        $this->provider = $provider;
    }
    /**
     * @return Organization|Person|null
     */
    public function getProvider()
    {
        return $this->provider;
    }
    /**
     * @param PostalAddress|null $deliveryAddress
     */
    public function setDeliveryAddress(?PostalAddress $deliveryAddress) : void
    {
        $this->deliveryAddress = $deliveryAddress;
    }
    /**
     * @return PostalAddress|null
     */
    public function getDeliveryAddress() : ?PostalAddress
    {
        return $this->deliveryAddress;
    }
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $expectedArrivalUntil
     */
    public function setExpectedArrivalUntil($expectedArrivalUntil) : void
    {
        $this->expectedArrivalUntil = $expectedArrivalUntil;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getExpectedArrivalUntil()
    {
        return $this->expectedArrivalUntil;
    }
    /**
     * @param \PSX\Uri\Uri|null $trackingUrl
     */
    public function setTrackingUrl(?\PSX\Uri\Uri $trackingUrl) : void
    {
        $this->trackingUrl = $trackingUrl;
    }
    /**
     * @return \PSX\Uri\Uri|null
     */
    public function getTrackingUrl() : ?\PSX\Uri\Uri
    {
        return $this->trackingUrl;
    }
    /**
     * @param string|null $trackingNumber
     */
    public function setTrackingNumber(?string $trackingNumber) : void
    {
        $this->trackingNumber = $trackingNumber;
    }
    /**
     * @return string|null
     */
    public function getTrackingNumber() : ?string
    {
        return $this->trackingNumber;
    }
    /**
     * @param PostalAddress|null $originAddress
     */
    public function setOriginAddress(?PostalAddress $originAddress) : void
    {
        $this->originAddress = $originAddress;
    }
    /**
     * @return PostalAddress|null
     */
    public function getOriginAddress() : ?PostalAddress
    {
        return $this->originAddress;
    }
    /**
     * @param Product|null $itemShipped
     */
    public function setItemShipped(?Product $itemShipped) : void
    {
        $this->itemShipped = $itemShipped;
    }
    /**
     * @return Product|null
     */
    public function getItemShipped() : ?Product
    {
        return $this->itemShipped;
    }
    /**
     * @param \DateTime|\PSX\DateTime\Date|null $expectedArrivalFrom
     */
    public function setExpectedArrivalFrom($expectedArrivalFrom) : void
    {
        $this->expectedArrivalFrom = $expectedArrivalFrom;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Date|null
     */
    public function getExpectedArrivalFrom()
    {
        return $this->expectedArrivalFrom;
    }
    /**
     * @param DeliveryMethod|null $hasDeliveryMethod
     */
    public function setHasDeliveryMethod(?DeliveryMethod $hasDeliveryMethod) : void
    {
        $this->hasDeliveryMethod = $hasDeliveryMethod;
    }
    /**
     * @return DeliveryMethod|null
     */
    public function getHasDeliveryMethod() : ?DeliveryMethod
    {
        return $this->hasDeliveryMethod;
    }
    /**
     * @param Order|null $partOfOrder
     */
    public function setPartOfOrder(?Order $partOfOrder) : void
    {
        $this->partOfOrder = $partOfOrder;
    }
    /**
     * @return Order|null
     */
    public function getPartOfOrder() : ?Order
    {
        return $this->partOfOrder;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('deliveryStatus' => $this->deliveryStatus, 'provider' => $this->provider, 'deliveryAddress' => $this->deliveryAddress, 'expectedArrivalUntil' => $this->expectedArrivalUntil, 'trackingUrl' => $this->trackingUrl, 'trackingNumber' => $this->trackingNumber, 'originAddress' => $this->originAddress, 'itemShipped' => $this->itemShipped, 'expectedArrivalFrom' => $this->expectedArrivalFrom, 'hasDeliveryMethod' => $this->hasDeliveryMethod, 'partOfOrder' => $this->partOfOrder), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
