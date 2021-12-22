<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A single, identifiable product instance (e.g. a laptop with a particular serial number).')]
class IndividualProduct extends Product implements \JsonSerializable
{
    protected ?string $vehicleIdentificationNumber = null;
    protected ?string $serialNumber = null;
    public function setVehicleIdentificationNumber(?string $vehicleIdentificationNumber) : void
    {
        $this->vehicleIdentificationNumber = $vehicleIdentificationNumber;
    }
    public function getVehicleIdentificationNumber() : ?string
    {
        return $this->vehicleIdentificationNumber;
    }
    public function setSerialNumber(?string $serialNumber) : void
    {
        $this->serialNumber = $serialNumber;
    }
    public function getSerialNumber() : ?string
    {
        return $this->serialNumber;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('vehicleIdentificationNumber' => $this->vehicleIdentificationNumber, 'serialNumber' => $this->serialNumber), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

