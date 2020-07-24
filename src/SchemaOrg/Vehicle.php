<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A vehicle is a device that is designed or used to transport people or cargo over land, water, air, or through space.")
 */
class Vehicle extends Product implements \JsonSerializable
{
    /**
     * @var SteeringPositionValue|null
     */
    protected $steeringPosition;
    /**
     * @var string|null
     */
    protected $vehicleConfiguration;
    /**
     * @var QuantitativeValue|null
     */
    protected $cargoVolume;
    /**
     * @var QuantitativeValue|null
     */
    protected $mileageFromOdometer;
    /**
     * @var string|\PSX\Uri\Uri|QualitativeValue|null
     */
    protected $vehicleTransmission;
    /**
     * @var float|QuantitativeValue|null
     */
    protected $numberOfAxles;
    /**
     * @var string|null
     */
    protected $knownVehicleDamages;
    /**
     * @var float|QuantitativeValue|null
     */
    protected $numberOfDoors;
    /**
     * @var \PSX\DateTime\Date|null
     */
    protected $vehicleModelDate;
    /**
     * @var \PSX\DateTime\Date|null
     */
    protected $dateVehicleFirstRegistered;
    /**
     * @var float|QuantitativeValue|null
     */
    protected $numberOfPreviousOwners;
    /**
     * @var string|null
     */
    protected $vehicleIdentificationNumber;
    /**
     * @var EngineSpecification|null
     */
    protected $vehicleEngine;
    /**
     * @var string|DriveWheelConfigurationValue|null
     */
    protected $driveWheelConfiguration;
    /**
     * @var string|\PSX\Uri\Uri|QualitativeValue|null
     */
    protected $fuelType;
    /**
     * @var string|null
     */
    protected $vehicleInteriorColor;
    /**
     * @var float|QuantitativeValue|null
     */
    protected $vehicleSeatingCapacity;
    /**
     * @var \PSX\DateTime\Date|null
     */
    protected $purchaseDate;
    /**
     * @var string|null
     */
    protected $vehicleInteriorType;
    /**
     * @var \PSX\DateTime\Date|null
     */
    protected $productionDate;
    /**
     * @var QuantitativeValue|null
     */
    protected $fuelEfficiency;
    /**
     * @var QuantitativeValue|null
     */
    protected $fuelConsumption;
    /**
     * @var float|QuantitativeValue|null
     */
    protected $numberOfForwardGears;
    /**
     * @var string|float|null
     */
    protected $numberOfAirbags;
    /**
     * @param SteeringPositionValue|null $steeringPosition
     */
    public function setSteeringPosition(?SteeringPositionValue $steeringPosition) : void
    {
        $this->steeringPosition = $steeringPosition;
    }
    /**
     * @return SteeringPositionValue|null
     */
    public function getSteeringPosition() : ?SteeringPositionValue
    {
        return $this->steeringPosition;
    }
    /**
     * @param string|null $vehicleConfiguration
     */
    public function setVehicleConfiguration(?string $vehicleConfiguration) : void
    {
        $this->vehicleConfiguration = $vehicleConfiguration;
    }
    /**
     * @return string|null
     */
    public function getVehicleConfiguration() : ?string
    {
        return $this->vehicleConfiguration;
    }
    /**
     * @param QuantitativeValue|null $cargoVolume
     */
    public function setCargoVolume(?QuantitativeValue $cargoVolume) : void
    {
        $this->cargoVolume = $cargoVolume;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getCargoVolume() : ?QuantitativeValue
    {
        return $this->cargoVolume;
    }
    /**
     * @param QuantitativeValue|null $mileageFromOdometer
     */
    public function setMileageFromOdometer(?QuantitativeValue $mileageFromOdometer) : void
    {
        $this->mileageFromOdometer = $mileageFromOdometer;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getMileageFromOdometer() : ?QuantitativeValue
    {
        return $this->mileageFromOdometer;
    }
    /**
     * @param string|\PSX\Uri\Uri|QualitativeValue|null $vehicleTransmission
     */
    public function setVehicleTransmission($vehicleTransmission) : void
    {
        $this->vehicleTransmission = $vehicleTransmission;
    }
    /**
     * @return string|\PSX\Uri\Uri|QualitativeValue|null
     */
    public function getVehicleTransmission()
    {
        return $this->vehicleTransmission;
    }
    /**
     * @param float|QuantitativeValue|null $numberOfAxles
     */
    public function setNumberOfAxles($numberOfAxles) : void
    {
        $this->numberOfAxles = $numberOfAxles;
    }
    /**
     * @return float|QuantitativeValue|null
     */
    public function getNumberOfAxles()
    {
        return $this->numberOfAxles;
    }
    /**
     * @param string|null $knownVehicleDamages
     */
    public function setKnownVehicleDamages(?string $knownVehicleDamages) : void
    {
        $this->knownVehicleDamages = $knownVehicleDamages;
    }
    /**
     * @return string|null
     */
    public function getKnownVehicleDamages() : ?string
    {
        return $this->knownVehicleDamages;
    }
    /**
     * @param float|QuantitativeValue|null $numberOfDoors
     */
    public function setNumberOfDoors($numberOfDoors) : void
    {
        $this->numberOfDoors = $numberOfDoors;
    }
    /**
     * @return float|QuantitativeValue|null
     */
    public function getNumberOfDoors()
    {
        return $this->numberOfDoors;
    }
    /**
     * @param \PSX\DateTime\Date|null $vehicleModelDate
     */
    public function setVehicleModelDate(?\PSX\DateTime\Date $vehicleModelDate) : void
    {
        $this->vehicleModelDate = $vehicleModelDate;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getVehicleModelDate() : ?\PSX\DateTime\Date
    {
        return $this->vehicleModelDate;
    }
    /**
     * @param \PSX\DateTime\Date|null $dateVehicleFirstRegistered
     */
    public function setDateVehicleFirstRegistered(?\PSX\DateTime\Date $dateVehicleFirstRegistered) : void
    {
        $this->dateVehicleFirstRegistered = $dateVehicleFirstRegistered;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getDateVehicleFirstRegistered() : ?\PSX\DateTime\Date
    {
        return $this->dateVehicleFirstRegistered;
    }
    /**
     * @param float|QuantitativeValue|null $numberOfPreviousOwners
     */
    public function setNumberOfPreviousOwners($numberOfPreviousOwners) : void
    {
        $this->numberOfPreviousOwners = $numberOfPreviousOwners;
    }
    /**
     * @return float|QuantitativeValue|null
     */
    public function getNumberOfPreviousOwners()
    {
        return $this->numberOfPreviousOwners;
    }
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
     * @param EngineSpecification|null $vehicleEngine
     */
    public function setVehicleEngine(?EngineSpecification $vehicleEngine) : void
    {
        $this->vehicleEngine = $vehicleEngine;
    }
    /**
     * @return EngineSpecification|null
     */
    public function getVehicleEngine() : ?EngineSpecification
    {
        return $this->vehicleEngine;
    }
    /**
     * @param string|DriveWheelConfigurationValue|null $driveWheelConfiguration
     */
    public function setDriveWheelConfiguration($driveWheelConfiguration) : void
    {
        $this->driveWheelConfiguration = $driveWheelConfiguration;
    }
    /**
     * @return string|DriveWheelConfigurationValue|null
     */
    public function getDriveWheelConfiguration()
    {
        return $this->driveWheelConfiguration;
    }
    /**
     * @param string|\PSX\Uri\Uri|QualitativeValue|null $fuelType
     */
    public function setFuelType($fuelType) : void
    {
        $this->fuelType = $fuelType;
    }
    /**
     * @return string|\PSX\Uri\Uri|QualitativeValue|null
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }
    /**
     * @param string|null $vehicleInteriorColor
     */
    public function setVehicleInteriorColor(?string $vehicleInteriorColor) : void
    {
        $this->vehicleInteriorColor = $vehicleInteriorColor;
    }
    /**
     * @return string|null
     */
    public function getVehicleInteriorColor() : ?string
    {
        return $this->vehicleInteriorColor;
    }
    /**
     * @param float|QuantitativeValue|null $vehicleSeatingCapacity
     */
    public function setVehicleSeatingCapacity($vehicleSeatingCapacity) : void
    {
        $this->vehicleSeatingCapacity = $vehicleSeatingCapacity;
    }
    /**
     * @return float|QuantitativeValue|null
     */
    public function getVehicleSeatingCapacity()
    {
        return $this->vehicleSeatingCapacity;
    }
    /**
     * @param \PSX\DateTime\Date|null $purchaseDate
     */
    public function setPurchaseDate(?\PSX\DateTime\Date $purchaseDate) : void
    {
        $this->purchaseDate = $purchaseDate;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getPurchaseDate() : ?\PSX\DateTime\Date
    {
        return $this->purchaseDate;
    }
    /**
     * @param string|null $vehicleInteriorType
     */
    public function setVehicleInteriorType(?string $vehicleInteriorType) : void
    {
        $this->vehicleInteriorType = $vehicleInteriorType;
    }
    /**
     * @return string|null
     */
    public function getVehicleInteriorType() : ?string
    {
        return $this->vehicleInteriorType;
    }
    /**
     * @param \PSX\DateTime\Date|null $productionDate
     */
    public function setProductionDate(?\PSX\DateTime\Date $productionDate) : void
    {
        $this->productionDate = $productionDate;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getProductionDate() : ?\PSX\DateTime\Date
    {
        return $this->productionDate;
    }
    /**
     * @param QuantitativeValue|null $fuelEfficiency
     */
    public function setFuelEfficiency(?QuantitativeValue $fuelEfficiency) : void
    {
        $this->fuelEfficiency = $fuelEfficiency;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getFuelEfficiency() : ?QuantitativeValue
    {
        return $this->fuelEfficiency;
    }
    /**
     * @param QuantitativeValue|null $fuelConsumption
     */
    public function setFuelConsumption(?QuantitativeValue $fuelConsumption) : void
    {
        $this->fuelConsumption = $fuelConsumption;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getFuelConsumption() : ?QuantitativeValue
    {
        return $this->fuelConsumption;
    }
    /**
     * @param float|QuantitativeValue|null $numberOfForwardGears
     */
    public function setNumberOfForwardGears($numberOfForwardGears) : void
    {
        $this->numberOfForwardGears = $numberOfForwardGears;
    }
    /**
     * @return float|QuantitativeValue|null
     */
    public function getNumberOfForwardGears()
    {
        return $this->numberOfForwardGears;
    }
    /**
     * @param string|float|null $numberOfAirbags
     */
    public function setNumberOfAirbags($numberOfAirbags) : void
    {
        $this->numberOfAirbags = $numberOfAirbags;
    }
    /**
     * @return string|float|null
     */
    public function getNumberOfAirbags()
    {
        return $this->numberOfAirbags;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('steeringPosition' => $this->steeringPosition, 'vehicleConfiguration' => $this->vehicleConfiguration, 'cargoVolume' => $this->cargoVolume, 'mileageFromOdometer' => $this->mileageFromOdometer, 'vehicleTransmission' => $this->vehicleTransmission, 'numberOfAxles' => $this->numberOfAxles, 'knownVehicleDamages' => $this->knownVehicleDamages, 'numberOfDoors' => $this->numberOfDoors, 'vehicleModelDate' => $this->vehicleModelDate, 'dateVehicleFirstRegistered' => $this->dateVehicleFirstRegistered, 'numberOfPreviousOwners' => $this->numberOfPreviousOwners, 'vehicleIdentificationNumber' => $this->vehicleIdentificationNumber, 'vehicleEngine' => $this->vehicleEngine, 'driveWheelConfiguration' => $this->driveWheelConfiguration, 'fuelType' => $this->fuelType, 'vehicleInteriorColor' => $this->vehicleInteriorColor, 'vehicleSeatingCapacity' => $this->vehicleSeatingCapacity, 'purchaseDate' => $this->purchaseDate, 'vehicleInteriorType' => $this->vehicleInteriorType, 'productionDate' => $this->productionDate, 'fuelEfficiency' => $this->fuelEfficiency, 'fuelConsumption' => $this->fuelConsumption, 'numberOfForwardGears' => $this->numberOfForwardGears, 'numberOfAirbags' => $this->numberOfAirbags), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
