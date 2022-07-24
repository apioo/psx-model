<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of participating in an exchange of goods and services for monetary compensation. An agent trades an object, product or service with a participant in exchange for a one time or periodic payment.')]
class TradeAction extends Action implements \JsonSerializable
{
    protected ?PriceSpecification $priceSpecification = null;
    protected float|string|null $price = null;
    protected ?string $priceCurrency = null;
    public function setPriceSpecification(?PriceSpecification $priceSpecification) : void
    {
        $this->priceSpecification = $priceSpecification;
    }
    public function getPriceSpecification() : ?PriceSpecification
    {
        return $this->priceSpecification;
    }
    public function setPrice(float|string|null $price) : void
    {
        $this->price = $price;
    }
    public function getPrice() : float|string|null
    {
        return $this->price;
    }
    public function setPriceCurrency(?string $priceCurrency) : void
    {
        $this->priceCurrency = $priceCurrency;
    }
    public function getPriceCurrency() : ?string
    {
        return $this->priceCurrency;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('priceSpecification' => $this->priceSpecification, 'price' => $this->price, 'priceCurrency' => $this->priceCurrency), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

