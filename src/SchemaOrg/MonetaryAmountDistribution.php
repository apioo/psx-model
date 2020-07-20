<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A statistical distribution of monetary amounts.")
 */
class MonetaryAmountDistribution extends QuantitativeValueDistribution implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $currency;
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
    public function jsonSerialize()
    {
        return (object) array_filter(array('currency' => $this->currency), static function ($value) : bool {
            return $value !== null;
        });
    }
}
