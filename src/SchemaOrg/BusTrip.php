<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A trip on a commercial bus line.')]
class BusTrip extends Trip implements \JsonSerializable
{
    protected ?string $busName = null;
    protected BusStation|BusStop|null $arrivalBusStop = null;
    protected ?string $busNumber = null;
    protected BusStop|BusStation|null $departureBusStop = null;
    public function setBusName(?string $busName) : void
    {
        $this->busName = $busName;
    }
    public function getBusName() : ?string
    {
        return $this->busName;
    }
    public function setArrivalBusStop(BusStation|BusStop|null $arrivalBusStop) : void
    {
        $this->arrivalBusStop = $arrivalBusStop;
    }
    public function getArrivalBusStop() : BusStation|BusStop|null
    {
        return $this->arrivalBusStop;
    }
    public function setBusNumber(?string $busNumber) : void
    {
        $this->busNumber = $busNumber;
    }
    public function getBusNumber() : ?string
    {
        return $this->busNumber;
    }
    public function setDepartureBusStop(BusStop|BusStation|null $departureBusStop) : void
    {
        $this->departureBusStop = $departureBusStop;
    }
    public function getDepartureBusStop() : BusStop|BusStation|null
    {
        return $this->departureBusStop;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('busName' => $this->busName, 'arrivalBusStop' => $this->arrivalBusStop, 'busNumber' => $this->busNumber, 'departureBusStop' => $this->departureBusStop), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

