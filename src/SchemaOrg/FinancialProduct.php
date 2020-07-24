<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A product provided to consumers and businesses by financial institutions such as banks, insurance companies, brokerage firms, consumer finance companies, and investment companies which comprise the financial services industry.")
 */
class FinancialProduct extends Service implements \JsonSerializable
{
    /**
     * @var float|QuantitativeValue|null
     */
    protected $annualPercentageRate;
    /**
     * @var \PSX\Uri\Uri|string|null
     */
    protected $feesAndCommissionsSpecification;
    /**
     * @var float|QuantitativeValue|null
     */
    protected $interestRate;
    /**
     * @param float|QuantitativeValue|null $annualPercentageRate
     */
    public function setAnnualPercentageRate($annualPercentageRate) : void
    {
        $this->annualPercentageRate = $annualPercentageRate;
    }
    /**
     * @return float|QuantitativeValue|null
     */
    public function getAnnualPercentageRate()
    {
        return $this->annualPercentageRate;
    }
    /**
     * @param \PSX\Uri\Uri|string|null $feesAndCommissionsSpecification
     */
    public function setFeesAndCommissionsSpecification($feesAndCommissionsSpecification) : void
    {
        $this->feesAndCommissionsSpecification = $feesAndCommissionsSpecification;
    }
    /**
     * @return \PSX\Uri\Uri|string|null
     */
    public function getFeesAndCommissionsSpecification()
    {
        return $this->feesAndCommissionsSpecification;
    }
    /**
     * @param float|QuantitativeValue|null $interestRate
     */
    public function setInterestRate($interestRate) : void
    {
        $this->interestRate = $interestRate;
    }
    /**
     * @return float|QuantitativeValue|null
     */
    public function getInterestRate()
    {
        return $this->interestRate;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('annualPercentageRate' => $this->annualPercentageRate, 'feesAndCommissionsSpecification' => $this->feesAndCommissionsSpecification, 'interestRate' => $this->interestRate), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
