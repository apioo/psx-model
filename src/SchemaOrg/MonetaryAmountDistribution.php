<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A statistical distribution of monetary amounts.')]
class MonetaryAmountDistribution extends QuantitativeValueDistribution implements \JsonSerializable
{
    protected ?string $currency = null;
    public function setCurrency(?string $currency) : void
    {
        $this->currency = $currency;
    }
    public function getCurrency() : ?string
    {
        return $this->currency;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('currency' => $this->currency), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

