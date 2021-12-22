<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A listing that describes a job opening in a certain organization.')]
class JobPosting extends Intangible implements \JsonSerializable
{
    protected ?string $experienceRequirements = null;
    protected float|MonetaryAmountDistribution|MonetaryAmount|null $estimatedSalary = null;
    protected ?string $workHours = null;
    protected ?Organization $hiringOrganization = null;
    protected ?string $incentiveCompensation = null;
    protected ?string $skills = null;
    protected \DateTime|\PSX\DateTime\Date|null $datePosted = null;
    protected ?string $jobBenefits = null;
    protected \PSX\DateTime\Date|\DateTime|null $validThrough = null;
    protected float|PriceSpecification|MonetaryAmount|null $baseSalary = null;
    protected ?string $employmentType = null;
    protected ?Place $jobLocation = null;
    protected ?string $salaryCurrency = null;
    protected ?string $specialCommitments = null;
    protected ?string $title = null;
    protected ?Occupation $relevantOccupation = null;
    protected ?string $responsibilities = null;
    protected ?string $industry = null;
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
    public function setWorkHours(?string $workHours) : void
    {
        $this->workHours = $workHours;
    }
    public function getWorkHours() : ?string
    {
        return $this->workHours;
    }
    public function setHiringOrganization(?Organization $hiringOrganization) : void
    {
        $this->hiringOrganization = $hiringOrganization;
    }
    public function getHiringOrganization() : ?Organization
    {
        return $this->hiringOrganization;
    }
    public function setIncentiveCompensation(?string $incentiveCompensation) : void
    {
        $this->incentiveCompensation = $incentiveCompensation;
    }
    public function getIncentiveCompensation() : ?string
    {
        return $this->incentiveCompensation;
    }
    public function setSkills(?string $skills) : void
    {
        $this->skills = $skills;
    }
    public function getSkills() : ?string
    {
        return $this->skills;
    }
    public function setDatePosted(\DateTime|\PSX\DateTime\Date|null $datePosted) : void
    {
        $this->datePosted = $datePosted;
    }
    public function getDatePosted() : \DateTime|\PSX\DateTime\Date|null
    {
        return $this->datePosted;
    }
    public function setJobBenefits(?string $jobBenefits) : void
    {
        $this->jobBenefits = $jobBenefits;
    }
    public function getJobBenefits() : ?string
    {
        return $this->jobBenefits;
    }
    public function setValidThrough(\PSX\DateTime\Date|\DateTime|null $validThrough) : void
    {
        $this->validThrough = $validThrough;
    }
    public function getValidThrough() : \PSX\DateTime\Date|\DateTime|null
    {
        return $this->validThrough;
    }
    public function setBaseSalary(float|PriceSpecification|MonetaryAmount|null $baseSalary) : void
    {
        $this->baseSalary = $baseSalary;
    }
    public function getBaseSalary() : float|PriceSpecification|MonetaryAmount|null
    {
        return $this->baseSalary;
    }
    public function setEmploymentType(?string $employmentType) : void
    {
        $this->employmentType = $employmentType;
    }
    public function getEmploymentType() : ?string
    {
        return $this->employmentType;
    }
    public function setJobLocation(?Place $jobLocation) : void
    {
        $this->jobLocation = $jobLocation;
    }
    public function getJobLocation() : ?Place
    {
        return $this->jobLocation;
    }
    public function setSalaryCurrency(?string $salaryCurrency) : void
    {
        $this->salaryCurrency = $salaryCurrency;
    }
    public function getSalaryCurrency() : ?string
    {
        return $this->salaryCurrency;
    }
    public function setSpecialCommitments(?string $specialCommitments) : void
    {
        $this->specialCommitments = $specialCommitments;
    }
    public function getSpecialCommitments() : ?string
    {
        return $this->specialCommitments;
    }
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    public function setRelevantOccupation(?Occupation $relevantOccupation) : void
    {
        $this->relevantOccupation = $relevantOccupation;
    }
    public function getRelevantOccupation() : ?Occupation
    {
        return $this->relevantOccupation;
    }
    public function setResponsibilities(?string $responsibilities) : void
    {
        $this->responsibilities = $responsibilities;
    }
    public function getResponsibilities() : ?string
    {
        return $this->responsibilities;
    }
    public function setIndustry(?string $industry) : void
    {
        $this->industry = $industry;
    }
    public function getIndustry() : ?string
    {
        return $this->industry;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('experienceRequirements' => $this->experienceRequirements, 'estimatedSalary' => $this->estimatedSalary, 'workHours' => $this->workHours, 'hiringOrganization' => $this->hiringOrganization, 'incentiveCompensation' => $this->incentiveCompensation, 'skills' => $this->skills, 'datePosted' => $this->datePosted, 'jobBenefits' => $this->jobBenefits, 'validThrough' => $this->validThrough, 'baseSalary' => $this->baseSalary, 'employmentType' => $this->employmentType, 'jobLocation' => $this->jobLocation, 'salaryCurrency' => $this->salaryCurrency, 'specialCommitments' => $this->specialCommitments, 'title' => $this->title, 'relevantOccupation' => $this->relevantOccupation, 'responsibilities' => $this->responsibilities, 'industry' => $this->industry), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

