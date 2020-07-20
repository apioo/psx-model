<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A financial product for the loaning of an amount of money under agreed terms and charges.")
 */
class LoanOrCredit extends FinancialProduct implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $currency;
    /**
     * @var Thing|string|null
     */
    protected $requiredCollateral;
    /**
     * @var float|MonetaryAmount|null
     */
    protected $amount;
    /**
     * @var QuantitativeValue|Duration|null
     */
    protected $duration;
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
     * @param Thing|string|null $requiredCollateral
     */
    public function setRequiredCollateral($requiredCollateral) : void
    {
        $this->requiredCollateral = $requiredCollateral;
    }
    /**
     * @return Thing|string|null
     */
    public function getRequiredCollateral()
    {
        return $this->requiredCollateral;
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
    /**
     * @param QuantitativeValue|Duration|null $duration
     */
    public function setDuration($duration) : void
    {
        $this->duration = $duration;
    }
    /**
     * @return QuantitativeValue|Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('currency' => $this->currency, 'requiredCollateral' => $this->requiredCollateral, 'amount' => $this->amount, 'duration' => $this->duration), static function ($value) : bool {
            return $value !== null;
        });
    }
}
