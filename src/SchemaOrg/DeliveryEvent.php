<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An event involving the delivery of an item.")
 */
class DeliveryEvent extends Event implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    protected $availableThrough;
    /**
     * @var string|null
     */
    protected $accessCode;
    /**
     * @var DeliveryMethod|null
     */
    protected $hasDeliveryMethod;
    /**
     * @var \DateTime|null
     */
    protected $availableFrom;
    /**
     * @param \DateTime|null $availableThrough
     */
    public function setAvailableThrough(?\DateTime $availableThrough) : void
    {
        $this->availableThrough = $availableThrough;
    }
    /**
     * @return \DateTime|null
     */
    public function getAvailableThrough() : ?\DateTime
    {
        return $this->availableThrough;
    }
    /**
     * @param string|null $accessCode
     */
    public function setAccessCode(?string $accessCode) : void
    {
        $this->accessCode = $accessCode;
    }
    /**
     * @return string|null
     */
    public function getAccessCode() : ?string
    {
        return $this->accessCode;
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
     * @param \DateTime|null $availableFrom
     */
    public function setAvailableFrom(?\DateTime $availableFrom) : void
    {
        $this->availableFrom = $availableFrom;
    }
    /**
     * @return \DateTime|null
     */
    public function getAvailableFrom() : ?\DateTime
    {
        return $this->availableFrom;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('availableThrough' => $this->availableThrough, 'accessCode' => $this->accessCode, 'hasDeliveryMethod' => $this->hasDeliveryMethod, 'availableFrom' => $this->availableFrom), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
