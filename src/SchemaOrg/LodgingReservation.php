<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("A reservation for lodging at a hotel, motel, inn, etc.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.")
*/
class LodgingReservation extends Reservation implements \JsonSerializable
{
    /**
     * @var int|QuantitativeValue|null
     */
    protected $numAdults;
    /**
     * @var string|QualitativeValue|null
     */
    protected $lodgingUnitType;
    /**
     * @var int|QuantitativeValue|null
     */
    protected $numChildren;
    /**
     * @var string|null
     */
    protected $lodgingUnitDescription;
    /**
     * @var \DateTime|\PSX\DateTime\Time|null
     */
    protected $checkoutTime;
    /**
     * @var \DateTime|\PSX\DateTime\Time|null
     */
    protected $checkinTime;
    /**
     * @param int|QuantitativeValue|null $numAdults
     */
    public function setNumAdults($numAdults) : void
    {
        $this->numAdults = $numAdults;
    }
    /**
     * @return int|QuantitativeValue|null
     */
    public function getNumAdults()
    {
        return $this->numAdults;
    }
    /**
     * @param string|QualitativeValue|null $lodgingUnitType
     */
    public function setLodgingUnitType($lodgingUnitType) : void
    {
        $this->lodgingUnitType = $lodgingUnitType;
    }
    /**
     * @return string|QualitativeValue|null
     */
    public function getLodgingUnitType()
    {
        return $this->lodgingUnitType;
    }
    /**
     * @param int|QuantitativeValue|null $numChildren
     */
    public function setNumChildren($numChildren) : void
    {
        $this->numChildren = $numChildren;
    }
    /**
     * @return int|QuantitativeValue|null
     */
    public function getNumChildren()
    {
        return $this->numChildren;
    }
    /**
     * @param string|null $lodgingUnitDescription
     */
    public function setLodgingUnitDescription(?string $lodgingUnitDescription) : void
    {
        $this->lodgingUnitDescription = $lodgingUnitDescription;
    }
    /**
     * @return string|null
     */
    public function getLodgingUnitDescription() : ?string
    {
        return $this->lodgingUnitDescription;
    }
    /**
     * @param \DateTime|\PSX\DateTime\Time|null $checkoutTime
     */
    public function setCheckoutTime($checkoutTime) : void
    {
        $this->checkoutTime = $checkoutTime;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Time|null
     */
    public function getCheckoutTime()
    {
        return $this->checkoutTime;
    }
    /**
     * @param \DateTime|\PSX\DateTime\Time|null $checkinTime
     */
    public function setCheckinTime($checkinTime) : void
    {
        $this->checkinTime = $checkinTime;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Time|null
     */
    public function getCheckinTime()
    {
        return $this->checkinTime;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('numAdults' => $this->numAdults, 'lodgingUnitType' => $this->lodgingUnitType, 'numChildren' => $this->numChildren, 'lodgingUnitDescription' => $this->lodgingUnitDescription, 'checkoutTime' => $this->checkoutTime, 'checkinTime' => $this->checkinTime), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
