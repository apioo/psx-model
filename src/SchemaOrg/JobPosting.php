<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A listing that describes a job opening in a certain organization.")
 */
class JobPosting extends Intangible implements \JsonSerializable
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
    protected $workHours;
    /**
     * @var Organization|null
     */
    protected $hiringOrganization;
    /**
     * @var string|null
     */
    protected $incentiveCompensation;
    /**
     * @var string|null
     */
    protected $skills;
    /**
     * @var \DateTime|\PSX\DateTime\Date|null
     */
    protected $datePosted;
    /**
     * @var string|null
     */
    protected $jobBenefits;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $validThrough;
    /**
     * @var float|PriceSpecification|MonetaryAmount|null
     */
    protected $baseSalary;
    /**
     * @var string|null
     */
    protected $employmentType;
    /**
     * @var Place|null
     */
    protected $jobLocation;
    /**
     * @var string|null
     */
    protected $salaryCurrency;
    /**
     * @var string|null
     */
    protected $specialCommitments;
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var Occupation|null
     */
    protected $relevantOccupation;
    /**
     * @var string|null
     */
    protected $responsibilities;
    /**
     * @var string|null
     */
    protected $industry;
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
     * @param string|null $workHours
     */
    public function setWorkHours(?string $workHours) : void
    {
        $this->workHours = $workHours;
    }
    /**
     * @return string|null
     */
    public function getWorkHours() : ?string
    {
        return $this->workHours;
    }
    /**
     * @param Organization|null $hiringOrganization
     */
    public function setHiringOrganization(?Organization $hiringOrganization) : void
    {
        $this->hiringOrganization = $hiringOrganization;
    }
    /**
     * @return Organization|null
     */
    public function getHiringOrganization() : ?Organization
    {
        return $this->hiringOrganization;
    }
    /**
     * @param string|null $incentiveCompensation
     */
    public function setIncentiveCompensation(?string $incentiveCompensation) : void
    {
        $this->incentiveCompensation = $incentiveCompensation;
    }
    /**
     * @return string|null
     */
    public function getIncentiveCompensation() : ?string
    {
        return $this->incentiveCompensation;
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
     * @param \DateTime|\PSX\DateTime\Date|null $datePosted
     */
    public function setDatePosted($datePosted) : void
    {
        $this->datePosted = $datePosted;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Date|null
     */
    public function getDatePosted()
    {
        return $this->datePosted;
    }
    /**
     * @param string|null $jobBenefits
     */
    public function setJobBenefits(?string $jobBenefits) : void
    {
        $this->jobBenefits = $jobBenefits;
    }
    /**
     * @return string|null
     */
    public function getJobBenefits() : ?string
    {
        return $this->jobBenefits;
    }
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $validThrough
     */
    public function setValidThrough($validThrough) : void
    {
        $this->validThrough = $validThrough;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }
    /**
     * @param float|PriceSpecification|MonetaryAmount|null $baseSalary
     */
    public function setBaseSalary($baseSalary) : void
    {
        $this->baseSalary = $baseSalary;
    }
    /**
     * @return float|PriceSpecification|MonetaryAmount|null
     */
    public function getBaseSalary()
    {
        return $this->baseSalary;
    }
    /**
     * @param string|null $employmentType
     */
    public function setEmploymentType(?string $employmentType) : void
    {
        $this->employmentType = $employmentType;
    }
    /**
     * @return string|null
     */
    public function getEmploymentType() : ?string
    {
        return $this->employmentType;
    }
    /**
     * @param Place|null $jobLocation
     */
    public function setJobLocation(?Place $jobLocation) : void
    {
        $this->jobLocation = $jobLocation;
    }
    /**
     * @return Place|null
     */
    public function getJobLocation() : ?Place
    {
        return $this->jobLocation;
    }
    /**
     * @param string|null $salaryCurrency
     */
    public function setSalaryCurrency(?string $salaryCurrency) : void
    {
        $this->salaryCurrency = $salaryCurrency;
    }
    /**
     * @return string|null
     */
    public function getSalaryCurrency() : ?string
    {
        return $this->salaryCurrency;
    }
    /**
     * @param string|null $specialCommitments
     */
    public function setSpecialCommitments(?string $specialCommitments) : void
    {
        $this->specialCommitments = $specialCommitments;
    }
    /**
     * @return string|null
     */
    public function getSpecialCommitments() : ?string
    {
        return $this->specialCommitments;
    }
    /**
     * @param string|null $title
     */
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    /**
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param Occupation|null $relevantOccupation
     */
    public function setRelevantOccupation(?Occupation $relevantOccupation) : void
    {
        $this->relevantOccupation = $relevantOccupation;
    }
    /**
     * @return Occupation|null
     */
    public function getRelevantOccupation() : ?Occupation
    {
        return $this->relevantOccupation;
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
    /**
     * @param string|null $industry
     */
    public function setIndustry(?string $industry) : void
    {
        $this->industry = $industry;
    }
    /**
     * @return string|null
     */
    public function getIndustry() : ?string
    {
        return $this->industry;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('experienceRequirements' => $this->experienceRequirements, 'estimatedSalary' => $this->estimatedSalary, 'workHours' => $this->workHours, 'hiringOrganization' => $this->hiringOrganization, 'incentiveCompensation' => $this->incentiveCompensation, 'skills' => $this->skills, 'datePosted' => $this->datePosted, 'jobBenefits' => $this->jobBenefits, 'validThrough' => $this->validThrough, 'baseSalary' => $this->baseSalary, 'employmentType' => $this->employmentType, 'jobLocation' => $this->jobLocation, 'salaryCurrency' => $this->salaryCurrency, 'specialCommitments' => $this->specialCommitments, 'title' => $this->title, 'relevantOccupation' => $this->relevantOccupation, 'responsibilities' => $this->responsibilities, 'industry' => $this->industry), static function ($value) : bool {
            return $value !== null;
        });
    }
}
