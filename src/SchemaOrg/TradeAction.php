<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of participating in an exchange of goods and services for monetary compensation. An agent trades an object, product or service with a participant in exchange for a one time or periodic payment.")
 */
class TradeAction extends Action implements \JsonSerializable
{
    /**
     * @var PriceSpecification|null
     */
    protected $priceSpecification;
    /**
     * @var float|string|null
     */
    protected $price;
    /**
     * @var string|null
     */
    protected $priceCurrency;
    /**
     * @param PriceSpecification|null $priceSpecification
     */
    public function setPriceSpecification(?PriceSpecification $priceSpecification) : void
    {
        $this->priceSpecification = $priceSpecification;
    }
    /**
     * @return PriceSpecification|null
     */
    public function getPriceSpecification() : ?PriceSpecification
    {
        return $this->priceSpecification;
    }
    /**
     * @param float|string|null $price
     */
    public function setPrice($price) : void
    {
        $this->price = $price;
    }
    /**
     * @return float|string|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * @param string|null $priceCurrency
     */
    public function setPriceCurrency(?string $priceCurrency) : void
    {
        $this->priceCurrency = $priceCurrency;
    }
    /**
     * @return string|null
     */
    public function getPriceCurrency() : ?string
    {
        return $this->priceCurrency;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('priceSpecification' => $this->priceSpecification, 'price' => $this->price, 'priceCurrency' => $this->priceCurrency), static function ($value) : bool {
            return $value !== null;
        });
    }
}
