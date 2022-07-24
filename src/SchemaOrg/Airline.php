<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An organization that provides flights for passengers.')]
class Airline extends Organization implements \JsonSerializable
{
    protected ?BoardingPolicyType $boardingPolicy = null;
    protected ?string $iataCode = null;
    public function setBoardingPolicy(?BoardingPolicyType $boardingPolicy) : void
    {
        $this->boardingPolicy = $boardingPolicy;
    }
    public function getBoardingPolicy() : ?BoardingPolicyType
    {
        return $this->boardingPolicy;
    }
    public function setIataCode(?string $iataCode) : void
    {
        $this->iataCode = $iataCode;
    }
    public function getIataCode() : ?string
    {
        return $this->iataCode;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('boardingPolicy' => $this->boardingPolicy, 'iataCode' => $this->iataCode), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

