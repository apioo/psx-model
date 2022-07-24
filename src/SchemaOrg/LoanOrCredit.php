<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A financial product for the loaning of an amount of money under agreed terms and charges.')]
class LoanOrCredit extends FinancialProduct implements \JsonSerializable
{
    protected ?string $currency = null;
    protected Thing|string|null $requiredCollateral = null;
    protected float|MonetaryAmount|null $amount = null;
    protected QuantitativeValue|Duration|null $duration = null;
    public function setCurrency(?string $currency) : void
    {
        $this->currency = $currency;
    }
    public function getCurrency() : ?string
    {
        return $this->currency;
    }
    public function setRequiredCollateral(Thing|string|null $requiredCollateral) : void
    {
        $this->requiredCollateral = $requiredCollateral;
    }
    public function getRequiredCollateral() : Thing|string|null
    {
        return $this->requiredCollateral;
    }
    public function setAmount(float|MonetaryAmount|null $amount) : void
    {
        $this->amount = $amount;
    }
    public function getAmount() : float|MonetaryAmount|null
    {
        return $this->amount;
    }
    public function setDuration(QuantitativeValue|Duration|null $duration) : void
    {
        $this->duration = $duration;
    }
    public function getDuration() : QuantitativeValue|Duration|null
    {
        return $this->duration;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('currency' => $this->currency, 'requiredCollateral' => $this->requiredCollateral, 'amount' => $this->amount, 'duration' => $this->duration), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

