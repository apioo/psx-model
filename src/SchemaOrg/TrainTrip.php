<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A trip on a commercial train line.")
 */
class TrainTrip extends Trip implements \JsonSerializable
{
    /**
     * @var TrainStation|null
     */
    protected $departureStation;
    /**
     * @var string|null
     */
    protected $trainNumber;
    /**
     * @var string|null
     */
    protected $departurePlatform;
    /**
     * @var string|null
     */
    protected $trainName;
    /**
     * @var TrainStation|null
     */
    protected $arrivalStation;
    /**
     * @var string|null
     */
    protected $arrivalPlatform;
    /**
     * @param TrainStation|null $departureStation
     */
    public function setDepartureStation(?TrainStation $departureStation) : void
    {
        $this->departureStation = $departureStation;
    }
    /**
     * @return TrainStation|null
     */
    public function getDepartureStation() : ?TrainStation
    {
        return $this->departureStation;
    }
    /**
     * @param string|null $trainNumber
     */
    public function setTrainNumber(?string $trainNumber) : void
    {
        $this->trainNumber = $trainNumber;
    }
    /**
     * @return string|null
     */
    public function getTrainNumber() : ?string
    {
        return $this->trainNumber;
    }
    /**
     * @param string|null $departurePlatform
     */
    public function setDeparturePlatform(?string $departurePlatform) : void
    {
        $this->departurePlatform = $departurePlatform;
    }
    /**
     * @return string|null
     */
    public function getDeparturePlatform() : ?string
    {
        return $this->departurePlatform;
    }
    /**
     * @param string|null $trainName
     */
    public function setTrainName(?string $trainName) : void
    {
        $this->trainName = $trainName;
    }
    /**
     * @return string|null
     */
    public function getTrainName() : ?string
    {
        return $this->trainName;
    }
    /**
     * @param TrainStation|null $arrivalStation
     */
    public function setArrivalStation(?TrainStation $arrivalStation) : void
    {
        $this->arrivalStation = $arrivalStation;
    }
    /**
     * @return TrainStation|null
     */
    public function getArrivalStation() : ?TrainStation
    {
        return $this->arrivalStation;
    }
    /**
     * @param string|null $arrivalPlatform
     */
    public function setArrivalPlatform(?string $arrivalPlatform) : void
    {
        $this->arrivalPlatform = $arrivalPlatform;
    }
    /**
     * @return string|null
     */
    public function getArrivalPlatform() : ?string
    {
        return $this->arrivalPlatform;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('departureStation' => $this->departureStation, 'trainNumber' => $this->trainNumber, 'departurePlatform' => $this->departurePlatform, 'trainName' => $this->trainName, 'arrivalStation' => $this->arrivalStation, 'arrivalPlatform' => $this->arrivalPlatform), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
