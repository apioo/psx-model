<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A structured value providing information about when a certain organization or person owned a certain product.')]
class OwnershipInfo extends StructuredValue implements \JsonSerializable
{
    protected Service|Product|null $typeOfGood = null;
    protected Organization|Person|null $acquiredFrom = null;
    protected ?\PSX\DateTime\LocalDateTime $ownedFrom = null;
    protected ?\PSX\DateTime\LocalDateTime $ownedThrough = null;
    public function setTypeOfGood(Service|Product|null $typeOfGood) : void
    {
        $this->typeOfGood = $typeOfGood;
    }
    public function getTypeOfGood() : Service|Product|null
    {
        return $this->typeOfGood;
    }
    public function setAcquiredFrom(Organization|Person|null $acquiredFrom) : void
    {
        $this->acquiredFrom = $acquiredFrom;
    }
    public function getAcquiredFrom() : Organization|Person|null
    {
        return $this->acquiredFrom;
    }
    public function setOwnedFrom(?\PSX\DateTime\LocalDateTime $ownedFrom) : void
    {
        $this->ownedFrom = $ownedFrom;
    }
    public function getOwnedFrom() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->ownedFrom;
    }
    public function setOwnedThrough(?\PSX\DateTime\LocalDateTime $ownedThrough) : void
    {
        $this->ownedThrough = $ownedThrough;
    }
    public function getOwnedThrough() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->ownedThrough;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('typeOfGood' => $this->typeOfGood, 'acquiredFrom' => $this->acquiredFrom, 'ownedFrom' => $this->ownedFrom, 'ownedThrough' => $this->ownedThrough), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

