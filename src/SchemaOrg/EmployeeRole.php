<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A subclass of OrganizationRole used to describe employee relationships.')]
class EmployeeRole extends OrganizationRole implements \JsonSerializable
{
    protected float|PriceSpecification|MonetaryAmount|null $baseSalary = null;
    protected ?string $salaryCurrency = null;
    public function setBaseSalary(float|PriceSpecification|MonetaryAmount|null $baseSalary) : void
    {
        $this->baseSalary = $baseSalary;
    }
    public function getBaseSalary() : float|PriceSpecification|MonetaryAmount|null
    {
        return $this->baseSalary;
    }
    public function setSalaryCurrency(?string $salaryCurrency) : void
    {
        $this->salaryCurrency = $salaryCurrency;
    }
    public function getSalaryCurrency() : ?string
    {
        return $this->salaryCurrency;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('baseSalary' => $this->baseSalary, 'salaryCurrency' => $this->salaryCurrency), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

