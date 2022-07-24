<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An airline flight.')]
class Flight extends Trip implements \JsonSerializable
{
    protected ?string $departureGate = null;
    protected string|Distance|null $flightDistance = null;
    protected string|Duration|null $estimatedFlightDuration = null;
    protected ?BoardingPolicyType $boardingPolicy = null;
    protected string|Vehicle|null $aircraft = null;
    protected Organization|Person|null $seller = null;
    protected ?string $arrivalGate = null;
    protected ?string $arrivalTerminal = null;
    protected ?Airport $arrivalAirport = null;
    protected ?string $flightNumber = null;
    protected ?\DateTime $webCheckinTime = null;
    protected ?Airport $departureAirport = null;
    protected ?string $departureTerminal = null;
    protected ?string $mealService = null;
    public function setDepartureGate(?string $departureGate) : void
    {
        $this->departureGate = $departureGate;
    }
    public function getDepartureGate() : ?string
    {
        return $this->departureGate;
    }
    public function setFlightDistance(string|Distance|null $flightDistance) : void
    {
        $this->flightDistance = $flightDistance;
    }
    public function getFlightDistance() : string|Distance|null
    {
        return $this->flightDistance;
    }
    public function setEstimatedFlightDuration(string|Duration|null $estimatedFlightDuration) : void
    {
        $this->estimatedFlightDuration = $estimatedFlightDuration;
    }
    public function getEstimatedFlightDuration() : string|Duration|null
    {
        return $this->estimatedFlightDuration;
    }
    public function setBoardingPolicy(?BoardingPolicyType $boardingPolicy) : void
    {
        $this->boardingPolicy = $boardingPolicy;
    }
    public function getBoardingPolicy() : ?BoardingPolicyType
    {
        return $this->boardingPolicy;
    }
    public function setAircraft(string|Vehicle|null $aircraft) : void
    {
        $this->aircraft = $aircraft;
    }
    public function getAircraft() : string|Vehicle|null
    {
        return $this->aircraft;
    }
    public function setSeller(Organization|Person|null $seller) : void
    {
        $this->seller = $seller;
    }
    public function getSeller() : Organization|Person|null
    {
        return $this->seller;
    }
    public function setArrivalGate(?string $arrivalGate) : void
    {
        $this->arrivalGate = $arrivalGate;
    }
    public function getArrivalGate() : ?string
    {
        return $this->arrivalGate;
    }
    public function setArrivalTerminal(?string $arrivalTerminal) : void
    {
        $this->arrivalTerminal = $arrivalTerminal;
    }
    public function getArrivalTerminal() : ?string
    {
        return $this->arrivalTerminal;
    }
    public function setArrivalAirport(?Airport $arrivalAirport) : void
    {
        $this->arrivalAirport = $arrivalAirport;
    }
    public function getArrivalAirport() : ?Airport
    {
        return $this->arrivalAirport;
    }
    public function setFlightNumber(?string $flightNumber) : void
    {
        $this->flightNumber = $flightNumber;
    }
    public function getFlightNumber() : ?string
    {
        return $this->flightNumber;
    }
    public function setWebCheckinTime(?\DateTime $webCheckinTime) : void
    {
        $this->webCheckinTime = $webCheckinTime;
    }
    public function getWebCheckinTime() : ?\DateTime
    {
        return $this->webCheckinTime;
    }
    public function setDepartureAirport(?Airport $departureAirport) : void
    {
        $this->departureAirport = $departureAirport;
    }
    public function getDepartureAirport() : ?Airport
    {
        return $this->departureAirport;
    }
    public function setDepartureTerminal(?string $departureTerminal) : void
    {
        $this->departureTerminal = $departureTerminal;
    }
    public function getDepartureTerminal() : ?string
    {
        return $this->departureTerminal;
    }
    public function setMealService(?string $mealService) : void
    {
        $this->mealService = $mealService;
    }
    public function getMealService() : ?string
    {
        return $this->mealService;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('departureGate' => $this->departureGate, 'flightDistance' => $this->flightDistance, 'estimatedFlightDuration' => $this->estimatedFlightDuration, 'boardingPolicy' => $this->boardingPolicy, 'aircraft' => $this->aircraft, 'seller' => $this->seller, 'arrivalGate' => $this->arrivalGate, 'arrivalTerminal' => $this->arrivalTerminal, 'arrivalAirport' => $this->arrivalAirport, 'flightNumber' => $this->flightNumber, 'webCheckinTime' => $this->webCheckinTime, 'departureAirport' => $this->departureAirport, 'departureTerminal' => $this->departureTerminal, 'mealService' => $this->mealService), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

