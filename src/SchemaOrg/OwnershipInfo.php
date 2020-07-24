<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A structured value providing information about when a certain organization or person owned a certain product.")
 */
class OwnershipInfo extends StructuredValue implements \JsonSerializable
{
    /**
     * @var Service|Product|null
     */
    protected $typeOfGood;
    /**
     * @var Organization|Person|null
     */
    protected $acquiredFrom;
    /**
     * @var \DateTime|null
     */
    protected $ownedFrom;
    /**
     * @var \DateTime|null
     */
    protected $ownedThrough;
    /**
     * @param Service|Product|null $typeOfGood
     */
    public function setTypeOfGood($typeOfGood) : void
    {
        $this->typeOfGood = $typeOfGood;
    }
    /**
     * @return Service|Product|null
     */
    public function getTypeOfGood()
    {
        return $this->typeOfGood;
    }
    /**
     * @param Organization|Person|null $acquiredFrom
     */
    public function setAcquiredFrom($acquiredFrom) : void
    {
        $this->acquiredFrom = $acquiredFrom;
    }
    /**
     * @return Organization|Person|null
     */
    public function getAcquiredFrom()
    {
        return $this->acquiredFrom;
    }
    /**
     * @param \DateTime|null $ownedFrom
     */
    public function setOwnedFrom(?\DateTime $ownedFrom) : void
    {
        $this->ownedFrom = $ownedFrom;
    }
    /**
     * @return \DateTime|null
     */
    public function getOwnedFrom() : ?\DateTime
    {
        return $this->ownedFrom;
    }
    /**
     * @param \DateTime|null $ownedThrough
     */
    public function setOwnedThrough(?\DateTime $ownedThrough) : void
    {
        $this->ownedThrough = $ownedThrough;
    }
    /**
     * @return \DateTime|null
     */
    public function getOwnedThrough() : ?\DateTime
    {
        return $this->ownedThrough;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('typeOfGood' => $this->typeOfGood, 'acquiredFrom' => $this->acquiredFrom, 'ownedFrom' => $this->ownedFrom, 'ownedThrough' => $this->ownedThrough), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
