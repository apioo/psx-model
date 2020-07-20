<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A profession, may involve prolonged training and/or a formal qualification.")
 */
class Occupation extends Intangible implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $experienceRequirements;
    /**
     * @var float|MonetaryAmountDistribution|MonetaryAmount|null
     */
    protected $estimatedSalary;
    /**
     * @var string|null
     */
    protected $skills;
    /**
     * @var AdministrativeArea|null
     */
    protected $occupationLocation;
    /**
     * @var string|null
     */
    protected $responsibilities;
    /**
     * @param string|null $experienceRequirements
     */
    public function setExperienceRequirements(?string $experienceRequirements) : void
    {
        $this->experienceRequirements = $experienceRequirements;
    }
    /**
     * @return string|null
     */
    public function getExperienceRequirements() : ?string
    {
        return $this->experienceRequirements;
    }
    /**
     * @param float|MonetaryAmountDistribution|MonetaryAmount|null $estimatedSalary
     */
    public function setEstimatedSalary($estimatedSalary) : void
    {
        $this->estimatedSalary = $estimatedSalary;
    }
    /**
     * @return float|MonetaryAmountDistribution|MonetaryAmount|null
     */
    public function getEstimatedSalary()
    {
        return $this->estimatedSalary;
    }
    /**
     * @param string|null $skills
     */
    public function setSkills(?string $skills) : void
    {
        $this->skills = $skills;
    }
    /**
     * @return string|null
     */
    public function getSkills() : ?string
    {
        return $this->skills;
    }
    /**
     * @param AdministrativeArea|null $occupationLocation
     */
    public function setOccupationLocation(?AdministrativeArea $occupationLocation) : void
    {
        $this->occupationLocation = $occupationLocation;
    }
    /**
     * @return AdministrativeArea|null
     */
    public function getOccupationLocation() : ?AdministrativeArea
    {
        return $this->occupationLocation;
    }
    /**
     * @param string|null $responsibilities
     */
    public function setResponsibilities(?string $responsibilities) : void
    {
        $this->responsibilities = $responsibilities;
    }
    /**
     * @return string|null
     */
    public function getResponsibilities() : ?string
    {
        return $this->responsibilities;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('experienceRequirements' => $this->experienceRequirements, 'estimatedSalary' => $this->estimatedSalary, 'skills' => $this->skills, 'occupationLocation' => $this->occupationLocation, 'responsibilities' => $this->responsibilities), static function ($value) : bool {
            return $value !== null;
        });
    }
}
