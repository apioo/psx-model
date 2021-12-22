<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A structured value providing information about when a certain organization or person owned a certain product.')]
class OwnershipInfo extends StructuredValue implements \JsonSerializable
{
    protected Service|Product|null $typeOfGood = null;
    protected Organization|Person|null $acquiredFrom = null;
    protected ?\DateTime $ownedFrom = null;
    protected ?\DateTime $ownedThrough = null;
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
    public function setOwnedFrom(?\DateTime $ownedFrom) : void
    {
        $this->ownedFrom = $ownedFrom;
    }
    public function getOwnedFrom() : ?\DateTime
    {
        return $this->ownedFrom;
    }
    public function setOwnedThrough(?\DateTime $ownedThrough) : void
    {
        $this->ownedThrough = $ownedThrough;
    }
    public function getOwnedThrough() : ?\DateTime
    {
        return $this->ownedThrough;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('typeOfGood' => $this->typeOfGood, 'acquiredFrom' => $this->acquiredFrom, 'ownedFrom' => $this->ownedFrom, 'ownedThrough' => $this->ownedThrough), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

