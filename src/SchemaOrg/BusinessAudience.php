<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A set of characteristics belonging to businesses, e.g. who compose an item's target audience.")
 */
class BusinessAudience extends Audience implements \JsonSerializable
{
    /**
     * @var QuantitativeValue|null
     */
    protected $numberOfEmployees;
    /**
     * @var QuantitativeValue|null
     */
    protected $yearsInOperation;
    /**
     * @var QuantitativeValue|null
     */
    protected $yearlyRevenue;
    /**
     * @param QuantitativeValue|null $numberOfEmployees
     */
    public function setNumberOfEmployees(?QuantitativeValue $numberOfEmployees) : void
    {
        $this->numberOfEmployees = $numberOfEmployees;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getNumberOfEmployees() : ?QuantitativeValue
    {
        return $this->numberOfEmployees;
    }
    /**
     * @param QuantitativeValue|null $yearsInOperation
     */
    public function setYearsInOperation(?QuantitativeValue $yearsInOperation) : void
    {
        $this->yearsInOperation = $yearsInOperation;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getYearsInOperation() : ?QuantitativeValue
    {
        return $this->yearsInOperation;
    }
    /**
     * @param QuantitativeValue|null $yearlyRevenue
     */
    public function setYearlyRevenue(?QuantitativeValue $yearlyRevenue) : void
    {
        $this->yearlyRevenue = $yearlyRevenue;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getYearlyRevenue() : ?QuantitativeValue
    {
        return $this->yearlyRevenue;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('numberOfEmployees' => $this->numberOfEmployees, 'yearsInOperation' => $this->yearsInOperation, 'yearlyRevenue' => $this->yearlyRevenue), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
