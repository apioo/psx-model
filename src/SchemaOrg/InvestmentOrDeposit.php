<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A type of financial product that typically requires the client to transfer funds to a financial service in return for potential beneficial financial return.")
 */
class InvestmentOrDeposit extends FinancialProduct
{
    /**
     * @var float|MonetaryAmount|null
     */
    protected $amount;
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
