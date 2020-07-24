<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A trip on a commercial bus line.")
 */
class BusTrip extends Trip implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $busName;
    /**
     * @var BusStation|BusStop|null
     */
    protected $arrivalBusStop;
    /**
     * @var string|null
     */
    protected $busNumber;
    /**
     * @var BusStop|BusStation|null
     */
    protected $departureBusStop;
    /**
     * @param string|null $busName
     */
    public function setBusName(?string $busName) : void
    {
        $this->busName = $busName;
    }
    /**
     * @return string|null
     */
    public function getBusName() : ?string
    {
        return $this->busName;
    }
    /**
     * @param BusStation|BusStop|null $arrivalBusStop
     */
    public function setArrivalBusStop($arrivalBusStop) : void
    {
        $this->arrivalBusStop = $arrivalBusStop;
    }
    /**
     * @return BusStation|BusStop|null
     */
    public function getArrivalBusStop()
    {
        return $this->arrivalBusStop;
    }
    /**
     * @param string|null $busNumber
     */
    public function setBusNumber(?string $busNumber) : void
    {
        $this->busNumber = $busNumber;
    }
    /**
     * @return string|null
     */
    public function getBusNumber() : ?string
    {
        return $this->busNumber;
    }
    /**
     * @param BusStop|BusStation|null $departureBusStop
     */
    public function setDepartureBusStop($departureBusStop) : void
    {
        $this->departureBusStop = $departureBusStop;
    }
    /**
     * @return BusStop|BusStation|null
     */
    public function getDepartureBusStop()
    {
        return $this->departureBusStop;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('busName' => $this->busName, 'arrivalBusStop' => $this->arrivalBusStop, 'busNumber' => $this->busNumber, 'departureBusStop' => $this->departureBusStop), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
