<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A product provided to consumers and businesses by financial institutions such as banks, insurance companies, brokerage firms, consumer finance companies, and investment companies which comprise the financial services industry.')]
class FinancialProduct extends Service implements \JsonSerializable
{
    protected float|QuantitativeValue|null $annualPercentageRate = null;
    protected \PSX\Uri\Uri|string|null $feesAndCommissionsSpecification = null;
    protected float|QuantitativeValue|null $interestRate = null;
    public function setAnnualPercentageRate(float|QuantitativeValue|null $annualPercentageRate) : void
    {
        $this->annualPercentageRate = $annualPercentageRate;
    }
    public function getAnnualPercentageRate() : float|QuantitativeValue|null
    {
        return $this->annualPercentageRate;
    }
    public function setFeesAndCommissionsSpecification(\PSX\Uri\Uri|string|null $feesAndCommissionsSpecification) : void
    {
        $this->feesAndCommissionsSpecification = $feesAndCommissionsSpecification;
    }
    public function getFeesAndCommissionsSpecification() : \PSX\Uri\Uri|string|null
    {
        return $this->feesAndCommissionsSpecification;
    }
    public function setInterestRate(float|QuantitativeValue|null $interestRate) : void
    {
        $this->interestRate = $interestRate;
    }
    public function getInterestRate() : float|QuantitativeValue|null
    {
        return $this->interestRate;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('annualPercentageRate' => $this->annualPercentageRate, 'feesAndCommissionsSpecification' => $this->feesAndCommissionsSpecification, 'interestRate' => $this->interestRate), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

