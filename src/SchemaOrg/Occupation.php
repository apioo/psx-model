<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A profession, may involve prolonged training and/or a formal qualification.')]
class Occupation extends Intangible implements \JsonSerializable
{
    protected ?string $experienceRequirements = null;
    protected float|MonetaryAmountDistribution|MonetaryAmount|null $estimatedSalary = null;
    protected ?string $skills = null;
    protected ?AdministrativeArea $occupationLocation = null;
    protected ?string $responsibilities = null;
    public function setExperienceRequirements(?string $experienceRequirements) : void
    {
        $this->experienceRequirements = $experienceRequirements;
    }
    public function getExperienceRequirements() : ?string
    {
        return $this->experienceRequirements;
    }
    public function setEstimatedSalary(float|MonetaryAmountDistribution|MonetaryAmount|null $estimatedSalary) : void
    {
        $this->estimatedSalary = $estimatedSalary;
    }
    public function getEstimatedSalary() : float|MonetaryAmountDistribution|MonetaryAmount|null
    {
        return $this->estimatedSalary;
    }
    public function setSkills(?string $skills) : void
    {
        $this->skills = $skills;
    }
    public function getSkills() : ?string
    {
        return $this->skills;
    }
    public function setOccupationLocation(?AdministrativeArea $occupationLocation) : void
    {
        $this->occupationLocation = $occupationLocation;
    }
    public function getOccupationLocation() : ?AdministrativeArea
    {
        return $this->occupationLocation;
    }
    public function setResponsibilities(?string $responsibilities) : void
    {
        $this->responsibilities = $responsibilities;
    }
    public function getResponsibilities() : ?string
    {
        return $this->responsibilities;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('experienceRequirements' => $this->experienceRequirements, 'estimatedSalary' => $this->estimatedSalary, 'skills' => $this->skills, 'occupationLocation' => $this->occupationLocation, 'responsibilities' => $this->responsibilities), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

