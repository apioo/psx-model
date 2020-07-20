<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An airline flight.")
 */
class Flight extends Trip implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $departureGate;
    /**
     * @var string|Distance|null
     */
    protected $flightDistance;
    /**
     * @var string|Duration|null
     */
    protected $estimatedFlightDuration;
    /**
     * @var BoardingPolicyType|null
     */
    protected $boardingPolicy;
    /**
     * @var string|Vehicle|null
     */
    protected $aircraft;
    /**
     * @var Organization|Person|null
     */
    protected $seller;
    /**
     * @var string|null
     */
    protected $arrivalGate;
    /**
     * @var string|null
     */
    protected $arrivalTerminal;
    /**
     * @var Airport|null
     */
    protected $arrivalAirport;
    /**
     * @var string|null
     */
    protected $flightNumber;
    /**
     * @var \DateTime|null
     */
    protected $webCheckinTime;
    /**
     * @var Airport|null
     */
    protected $departureAirport;
    /**
     * @var string|null
     */
    protected $departureTerminal;
    /**
     * @var string|null
     */
    protected $mealService;
    /**
     * @param string|null $departureGate
     */
    public function setDepartureGate(?string $departureGate) : void
    {
        $this->departureGate = $departureGate;
    }
    /**
     * @return string|null
     */
    public function getDepartureGate() : ?string
    {
        return $this->departureGate;
    }
    /**
     * @param string|Distance|null $flightDistance
     */
    public function setFlightDistance($flightDistance) : void
    {
        $this->flightDistance = $flightDistance;
    }
    /**
     * @return string|Distance|null
     */
    public function getFlightDistance()
    {
        return $this->flightDistance;
    }
    /**
     * @param string|Duration|null $estimatedFlightDuration
     */
    public function setEstimatedFlightDuration($estimatedFlightDuration) : void
    {
        $this->estimatedFlightDuration = $estimatedFlightDuration;
    }
    /**
     * @return string|Duration|null
     */
    public function getEstimatedFlightDuration()
    {
        return $this->estimatedFlightDuration;
    }
    /**
     * @param BoardingPolicyType|null $boardingPolicy
     */
    public function setBoardingPolicy(?BoardingPolicyType $boardingPolicy) : void
    {
        $this->boardingPolicy = $boardingPolicy;
    }
    /**
     * @return BoardingPolicyType|null
     */
    public function getBoardingPolicy() : ?BoardingPolicyType
    {
        return $this->boardingPolicy;
    }
    /**
     * @param string|Vehicle|null $aircraft
     */
    public function setAircraft($aircraft) : void
    {
        $this->aircraft = $aircraft;
    }
    /**
     * @return string|Vehicle|null
     */
    public function getAircraft()
    {
        return $this->aircraft;
    }
    /**
     * @param Organization|Person|null $seller
     */
    public function setSeller($seller) : void
    {
        $this->seller = $seller;
    }
    /**
     * @return Organization|Person|null
     */
    public function getSeller()
    {
        return $this->seller;
    }
    /**
     * @param string|null $arrivalGate
     */
    public function setArrivalGate(?string $arrivalGate) : void
    {
        $this->arrivalGate = $arrivalGate;
    }
    /**
     * @return string|null
     */
    public function getArrivalGate() : ?string
    {
        return $this->arrivalGate;
    }
    /**
     * @param string|null $arrivalTerminal
     */
    public function setArrivalTerminal(?string $arrivalTerminal) : void
    {
        $this->arrivalTerminal = $arrivalTerminal;
    }
    /**
     * @return string|null
     */
    public function getArrivalTerminal() : ?string
    {
        return $this->arrivalTerminal;
    }
    /**
     * @param Airport|null $arrivalAirport
     */
    public function setArrivalAirport(?Airport $arrivalAirport) : void
    {
        $this->arrivalAirport = $arrivalAirport;
    }
    /**
     * @return Airport|null
     */
    public function getArrivalAirport() : ?Airport
    {
        return $this->arrivalAirport;
    }
    /**
     * @param string|null $flightNumber
     */
    public function setFlightNumber(?string $flightNumber) : void
    {
        $this->flightNumber = $flightNumber;
    }
    /**
     * @return string|null
     */
    public function getFlightNumber() : ?string
    {
        return $this->flightNumber;
    }
    /**
     * @param \DateTime|null $webCheckinTime
     */
    public function setWebCheckinTime(?\DateTime $webCheckinTime) : void
    {
        $this->webCheckinTime = $webCheckinTime;
    }
    /**
     * @return \DateTime|null
     */
    public function getWebCheckinTime() : ?\DateTime
    {
        return $this->webCheckinTime;
    }
    /**
     * @param Airport|null $departureAirport
     */
    public function setDepartureAirport(?Airport $departureAirport) : void
    {
        $this->departureAirport = $departureAirport;
    }
    /**
     * @return Airport|null
     */
    public function getDepartureAirport() : ?Airport
    {
        return $this->departureAirport;
    }
    /**
     * @param string|null $departureTerminal
     */
    public function setDepartureTerminal(?string $departureTerminal) : void
    {
        $this->departureTerminal = $departureTerminal;
    }
    /**
     * @return string|null
     */
    public function getDepartureTerminal() : ?string
    {
        return $this->departureTerminal;
    }
    /**
     * @param string|null $mealService
     */
    public function setMealService(?string $mealService) : void
    {
        $this->mealService = $mealService;
    }
    /**
     * @return string|null
     */
    public function getMealService() : ?string
    {
        return $this->mealService;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('departureGate' => $this->departureGate, 'flightDistance' => $this->flightDistance, 'estimatedFlightDuration' => $this->estimatedFlightDuration, 'boardingPolicy' => $this->boardingPolicy, 'aircraft' => $this->aircraft, 'seller' => $this->seller, 'arrivalGate' => $this->arrivalGate, 'arrivalTerminal' => $this->arrivalTerminal, 'arrivalAirport' => $this->arrivalAirport, 'flightNumber' => $this->flightNumber, 'webCheckinTime' => $this->webCheckinTime, 'departureAirport' => $this->departureAirport, 'departureTerminal' => $this->departureTerminal, 'mealService' => $this->mealService), static function ($value) : bool {
            return $value !== null;
        });
    }
}
