<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A DatedMoneySpecification represents monetary values with optional start and end dates. For example, this could represent an employee's salary over a specific period of time. <strong>Note:</strong> This type has been superseded by <a class=""localLink"" href=""http://schema.org/MonetaryAmount"">MonetaryAmount</a> use of that type is recommended")
 */
class DatedMoneySpecification extends StructuredValue
{
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $endDate;
    /**
     * @var \DateTime|\PSX\DateTime\Date|null
     */
    protected $startDate;
    /**
     * @var string|null
     */
    protected $currency;
    /**
     * @var float|MonetaryAmount|null
     */
    protected $amount;
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $endDate
     */
    public function setEndDate($endDate) : void
    {
        $this->endDate = $endDate;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
    /**
     * @param \DateTime|\PSX\DateTime\Date|null $startDate
     */
    public function setStartDate($startDate) : void
    {
        $this->startDate = $startDate;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Date|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    /**
     * @param string|null $currency
     */
    public function setCurrency(?string $currency) : void
    {
        $this->currency = $currency;
    }
    /**
     * @return string|null
     */
    public function getCurrency() : ?string
    {
        return $this->currency;
    }
    /**
     * @param float|MonetaryAmount|null $amount
     */
    public function setAmount($amount) : void
    {
        $this->amount = $amount;
    }
    /**
     * @return float|MonetaryAmount|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
