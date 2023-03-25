<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An event involving the delivery of an item.')]
class DeliveryEvent extends Event implements \JsonSerializable
{
    protected ?\PSX\DateTime\LocalDateTime $availableThrough = null;
    protected ?string $accessCode = null;
    protected ?DeliveryMethod $hasDeliveryMethod = null;
    protected ?\PSX\DateTime\LocalDateTime $availableFrom = null;
    public function setAvailableThrough(?\PSX\DateTime\LocalDateTime $availableThrough) : void
    {
        $this->availableThrough = $availableThrough;
    }
    public function getAvailableThrough() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->availableThrough;
    }
    public function setAccessCode(?string $accessCode) : void
    {
        $this->accessCode = $accessCode;
    }
    public function getAccessCode() : ?string
    {
        return $this->accessCode;
    }
    public function setHasDeliveryMethod(?DeliveryMethod $hasDeliveryMethod) : void
    {
        $this->hasDeliveryMethod = $hasDeliveryMethod;
    }
    public function getHasDeliveryMethod() : ?DeliveryMethod
    {
        return $this->hasDeliveryMethod;
    }
    public function setAvailableFrom(?\PSX\DateTime\LocalDateTime $availableFrom) : void
    {
        $this->availableFrom = $availableFrom;
    }
    public function getAvailableFrom() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->availableFrom;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('availableThrough' => $this->availableThrough, 'accessCode' => $this->accessCode, 'hasDeliveryMethod' => $this->hasDeliveryMethod, 'availableFrom' => $this->availableFrom), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

