<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A vehicle is a device that is designed or used to transport people or cargo over land, water, air, or through space.')]
class Vehicle extends Product implements \JsonSerializable
{
    protected ?SteeringPositionValue $steeringPosition = null;
    protected ?string $vehicleConfiguration = null;
    protected ?QuantitativeValue $cargoVolume = null;
    protected ?QuantitativeValue $mileageFromOdometer = null;
    protected string|\PSX\Uri\Uri|QualitativeValue|null $vehicleTransmission = null;
    protected float|QuantitativeValue|null $numberOfAxles = null;
    protected ?string $knownVehicleDamages = null;
    protected float|QuantitativeValue|null $numberOfDoors = null;
    protected ?\PSX\DateTime\LocalDate $vehicleModelDate = null;
    protected ?\PSX\DateTime\LocalDate $dateVehicleFirstRegistered = null;
    protected float|QuantitativeValue|null $numberOfPreviousOwners = null;
    protected ?string $vehicleIdentificationNumber = null;
    protected ?EngineSpecification $vehicleEngine = null;
    protected string|DriveWheelConfigurationValue|null $driveWheelConfiguration = null;
    protected string|\PSX\Uri\Uri|QualitativeValue|null $fuelType = null;
    protected ?string $vehicleInteriorColor = null;
    protected float|QuantitativeValue|null $vehicleSeatingCapacity = null;
    protected ?\PSX\DateTime\LocalDate $purchaseDate = null;
    protected ?string $vehicleInteriorType = null;
    protected ?\PSX\DateTime\LocalDate $productionDate = null;
    protected ?QuantitativeValue $fuelEfficiency = null;
    protected ?QuantitativeValue $fuelConsumption = null;
    protected float|QuantitativeValue|null $numberOfForwardGears = null;
    protected string|float|null $numberOfAirbags = null;
    public function setSteeringPosition(?SteeringPositionValue $steeringPosition) : void
    {
        $this->steeringPosition = $steeringPosition;
    }
    public function getSteeringPosition() : ?SteeringPositionValue
    {
        return $this->steeringPosition;
    }
    public function setVehicleConfiguration(?string $vehicleConfiguration) : void
    {
        $this->vehicleConfiguration = $vehicleConfiguration;
    }
    public function getVehicleConfiguration() : ?string
    {
        return $this->vehicleConfiguration;
    }
    public function setCargoVolume(?QuantitativeValue $cargoVolume) : void
    {
        $this->cargoVolume = $cargoVolume;
    }
    public function getCargoVolume() : ?QuantitativeValue
    {
        return $this->cargoVolume;
    }
    public function setMileageFromOdometer(?QuantitativeValue $mileageFromOdometer) : void
    {
        $this->mileageFromOdometer = $mileageFromOdometer;
    }
    public function getMileageFromOdometer() : ?QuantitativeValue
    {
        return $this->mileageFromOdometer;
    }
    public function setVehicleTransmission(string|\PSX\Uri\Uri|QualitativeValue|null $vehicleTransmission) : void
    {
        $this->vehicleTransmission = $vehicleTransmission;
    }
    public function getVehicleTransmission() : string|\PSX\Uri\Uri|QualitativeValue|null
    {
        return $this->vehicleTransmission;
    }
    public function setNumberOfAxles(float|QuantitativeValue|null $numberOfAxles) : void
    {
        $this->numberOfAxles = $numberOfAxles;
    }
    public function getNumberOfAxles() : float|QuantitativeValue|null
    {
        return $this->numberOfAxles;
    }
    public function setKnownVehicleDamages(?string $knownVehicleDamages) : void
    {
        $this->knownVehicleDamages = $knownVehicleDamages;
    }
    public function getKnownVehicleDamages() : ?string
    {
        return $this->knownVehicleDamages;
    }
    public function setNumberOfDoors(float|QuantitativeValue|null $numberOfDoors) : void
    {
        $this->numberOfDoors = $numberOfDoors;
    }
    public function getNumberOfDoors() : float|QuantitativeValue|null
    {
        return $this->numberOfDoors;
    }
    public function setVehicleModelDate(?\PSX\DateTime\LocalDate $vehicleModelDate) : void
    {
        $this->vehicleModelDate = $vehicleModelDate;
    }
    public function getVehicleModelDate() : ?\PSX\DateTime\LocalDate
    {
        return $this->vehicleModelDate;
    }
    public function setDateVehicleFirstRegistered(?\PSX\DateTime\LocalDate $dateVehicleFirstRegistered) : void
    {
        $this->dateVehicleFirstRegistered = $dateVehicleFirstRegistered;
    }
    public function getDateVehicleFirstRegistered() : ?\PSX\DateTime\LocalDate
    {
        return $this->dateVehicleFirstRegistered;
    }
    public function setNumberOfPreviousOwners(float|QuantitativeValue|null $numberOfPreviousOwners) : void
    {
        $this->numberOfPreviousOwners = $numberOfPreviousOwners;
    }
    public function getNumberOfPreviousOwners() : float|QuantitativeValue|null
    {
        return $this->numberOfPreviousOwners;
    }
    public function setVehicleIdentificationNumber(?string $vehicleIdentificationNumber) : void
    {
        $this->vehicleIdentificationNumber = $vehicleIdentificationNumber;
    }
    public function getVehicleIdentificationNumber() : ?string
    {
        return $this->vehicleIdentificationNumber;
    }
    public function setVehicleEngine(?EngineSpecification $vehicleEngine) : void
    {
        $this->vehicleEngine = $vehicleEngine;
    }
    public function getVehicleEngine() : ?EngineSpecification
    {
        return $this->vehicleEngine;
    }
    public function setDriveWheelConfiguration(string|DriveWheelConfigurationValue|null $driveWheelConfiguration) : void
    {
        $this->driveWheelConfiguration = $driveWheelConfiguration;
    }
    public function getDriveWheelConfiguration() : string|DriveWheelConfigurationValue|null
    {
        return $this->driveWheelConfiguration;
    }
    public function setFuelType(string|\PSX\Uri\Uri|QualitativeValue|null $fuelType) : void
    {
        $this->fuelType = $fuelType;
    }
    public function getFuelType() : string|\PSX\Uri\Uri|QualitativeValue|null
    {
        return $this->fuelType;
    }
    public function setVehicleInteriorColor(?string $vehicleInteriorColor) : void
    {
        $this->vehicleInteriorColor = $vehicleInteriorColor;
    }
    public function getVehicleInteriorColor() : ?string
    {
        return $this->vehicleInteriorColor;
    }
    public function setVehicleSeatingCapacity(float|QuantitativeValue|null $vehicleSeatingCapacity) : void
    {
        $this->vehicleSeatingCapacity = $vehicleSeatingCapacity;
    }
    public function getVehicleSeatingCapacity() : float|QuantitativeValue|null
    {
        return $this->vehicleSeatingCapacity;
    }
    public function setPurchaseDate(?\PSX\DateTime\LocalDate $purchaseDate) : void
    {
        $this->purchaseDate = $purchaseDate;
    }
    public function getPurchaseDate() : ?\PSX\DateTime\LocalDate
    {
        return $this->purchaseDate;
    }
    public function setVehicleInteriorType(?string $vehicleInteriorType) : void
    {
        $this->vehicleInteriorType = $vehicleInteriorType;
    }
    public function getVehicleInteriorType() : ?string
    {
        return $this->vehicleInteriorType;
    }
    public function setProductionDate(?\PSX\DateTime\LocalDate $productionDate) : void
    {
        $this->productionDate = $productionDate;
    }
    public function getProductionDate() : ?\PSX\DateTime\LocalDate
    {
        return $this->productionDate;
    }
    public function setFuelEfficiency(?QuantitativeValue $fuelEfficiency) : void
    {
        $this->fuelEfficiency = $fuelEfficiency;
    }
    public function getFuelEfficiency() : ?QuantitativeValue
    {
        return $this->fuelEfficiency;
    }
    public function setFuelConsumption(?QuantitativeValue $fuelConsumption) : void
    {
        $this->fuelConsumption = $fuelConsumption;
    }
    public function getFuelConsumption() : ?QuantitativeValue
    {
        return $this->fuelConsumption;
    }
    public function setNumberOfForwardGears(float|QuantitativeValue|null $numberOfForwardGears) : void
    {
        $this->numberOfForwardGears = $numberOfForwardGears;
    }
    public function getNumberOfForwardGears() : float|QuantitativeValue|null
    {
        return $this->numberOfForwardGears;
    }
    public function setNumberOfAirbags(string|float|null $numberOfAirbags) : void
    {
        $this->numberOfAirbags = $numberOfAirbags;
    }
    public function getNumberOfAirbags() : string|float|null
    {
        return $this->numberOfAirbags;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('steeringPosition' => $this->steeringPosition, 'vehicleConfiguration' => $this->vehicleConfiguration, 'cargoVolume' => $this->cargoVolume, 'mileageFromOdometer' => $this->mileageFromOdometer, 'vehicleTransmission' => $this->vehicleTransmission, 'numberOfAxles' => $this->numberOfAxles, 'knownVehicleDamages' => $this->knownVehicleDamages, 'numberOfDoors' => $this->numberOfDoors, 'vehicleModelDate' => $this->vehicleModelDate, 'dateVehicleFirstRegistered' => $this->dateVehicleFirstRegistered, 'numberOfPreviousOwners' => $this->numberOfPreviousOwners, 'vehicleIdentificationNumber' => $this->vehicleIdentificationNumber, 'vehicleEngine' => $this->vehicleEngine, 'driveWheelConfiguration' => $this->driveWheelConfiguration, 'fuelType' => $this->fuelType, 'vehicleInteriorColor' => $this->vehicleInteriorColor, 'vehicleSeatingCapacity' => $this->vehicleSeatingCapacity, 'purchaseDate' => $this->purchaseDate, 'vehicleInteriorType' => $this->vehicleInteriorType, 'productionDate' => $this->productionDate, 'fuelEfficiency' => $this->fuelEfficiency, 'fuelConsumption' => $this->fuelConsumption, 'numberOfForwardGears' => $this->numberOfForwardGears, 'numberOfAirbags' => $this->numberOfAirbags), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

