<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A single, identifiable product instance (e.g. a laptop with a particular serial number).")
 */
class IndividualProduct extends Product
{
    /**
     * @var string|null
     */
    protected $vehicleIdentificationNumber;
    /**
     * @var string|null
     */
    protected $serialNumber;
    /**
     * @param string|null $vehicleIdentificationNumber
     */
    public function setVehicleIdentificationNumber(?string $vehicleIdentificationNumber) : void
    {
        $this->vehicleIdentificationNumber = $vehicleIdentificationNumber;
    }
    /**
     * @return string|null
     */
    public function getVehicleIdentificationNumber() : ?string
    {
        return $this->vehicleIdentificationNumber;
    }
    /**
     * @param string|null $serialNumber
     */
    public function setSerialNumber(?string $serialNumber) : void
    {
        $this->serialNumber = $serialNumber;
    }
    /**
     * @return string|null
     */
    public function getSerialNumber() : ?string
    {
        return $this->serialNumber;
    }
}
