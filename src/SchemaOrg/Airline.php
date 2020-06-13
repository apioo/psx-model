<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An organization that provides flights for passengers.")
 */
class Airline extends Organization
{
    /**
     * @var BoardingPolicyType|null
     */
    protected $boardingPolicy;
    /**
     * @var string|null
     */
    protected $iataCode;
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
     * @param string|null $iataCode
     */
    public function setIataCode(?string $iataCode) : void
    {
        $this->iataCode = $iataCode;
    }
    /**
     * @return string|null
     */
    public function getIataCode() : ?string
    {
        return $this->iataCode;
    }
}
