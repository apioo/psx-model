<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A type of financial product that typically requires the client to transfer funds to a financial service in return for potential beneficial financial return.')]
class InvestmentOrDeposit extends FinancialProduct implements \JsonSerializable
{
    protected float|MonetaryAmount|null $amount = null;
    public function setAmount(float|MonetaryAmount|null $amount) : void
    {
        $this->amount = $amount;
    }
    public function getAmount() : float|MonetaryAmount|null
    {
        return $this->amount;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('amount' => $this->amount), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

