<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A trip on a commercial train line.')]
class TrainTrip extends Trip implements \JsonSerializable
{
    protected ?TrainStation $departureStation = null;
    protected ?string $trainNumber = null;
    protected ?string $departurePlatform = null;
    protected ?string $trainName = null;
    protected ?TrainStation $arrivalStation = null;
    protected ?string $arrivalPlatform = null;
    public function setDepartureStation(?TrainStation $departureStation) : void
    {
        $this->departureStation = $departureStation;
    }
    public function getDepartureStation() : ?TrainStation
    {
        return $this->departureStation;
    }
    public function setTrainNumber(?string $trainNumber) : void
    {
        $this->trainNumber = $trainNumber;
    }
    public function getTrainNumber() : ?string
    {
        return $this->trainNumber;
    }
    public function setDeparturePlatform(?string $departurePlatform) : void
    {
        $this->departurePlatform = $departurePlatform;
    }
    public function getDeparturePlatform() : ?string
    {
        return $this->departurePlatform;
    }
    public function setTrainName(?string $trainName) : void
    {
        $this->trainName = $trainName;
    }
    public function getTrainName() : ?string
    {
        return $this->trainName;
    }
    public function setArrivalStation(?TrainStation $arrivalStation) : void
    {
        $this->arrivalStation = $arrivalStation;
    }
    public function getArrivalStation() : ?TrainStation
    {
        return $this->arrivalStation;
    }
    public function setArrivalPlatform(?string $arrivalPlatform) : void
    {
        $this->arrivalPlatform = $arrivalPlatform;
    }
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

