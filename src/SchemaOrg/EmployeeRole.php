<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A subclass of OrganizationRole used to describe employee relationships.")
 */
class EmployeeRole extends OrganizationRole
{
    /**
     * @var float|PriceSpecification|MonetaryAmount|null
     */
    protected $baseSalary;
    /**
     * @var string|null
     */
    protected $salaryCurrency;
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
}
