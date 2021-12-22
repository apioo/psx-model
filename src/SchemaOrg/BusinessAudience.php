<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A set of characteristics belonging to businesses, e.g. who compose an item\'s target audience.')]
class BusinessAudience extends Audience implements \JsonSerializable
{
    protected ?QuantitativeValue $numberOfEmployees = null;
    protected ?QuantitativeValue $yearsInOperation = null;
    protected ?QuantitativeValue $yearlyRevenue = null;
    public function setNumberOfEmployees(?QuantitativeValue $numberOfEmployees) : void
    {
        $this->numberOfEmployees = $numberOfEmployees;
    }
    public function getNumberOfEmployees() : ?QuantitativeValue
    {
        return $this->numberOfEmployees;
    }
    public function setYearsInOperation(?QuantitativeValue $yearsInOperation) : void
    {
        $this->yearsInOperation = $yearsInOperation;
    }
    public function getYearsInOperation() : ?QuantitativeValue
    {
        return $this->yearsInOperation;
    }
    public function setYearlyRevenue(?QuantitativeValue $yearlyRevenue) : void
    {
        $this->yearlyRevenue = $yearlyRevenue;
    }
    public function getYearlyRevenue() : ?QuantitativeValue
    {
        return $this->yearlyRevenue;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('numberOfEmployees' => $this->numberOfEmployees, 'yearsInOperation' => $this->yearsInOperation, 'yearlyRevenue' => $this->yearlyRevenue), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

