<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of taking money from a buyer in exchange for goods or services rendered. An agent sells an object, product, or service to a buyer for a price. Reciprocal of BuyAction.")
 */
class SellAction extends TradeAction implements \JsonSerializable
{
    /**
     * @var Person|null
     */
    protected $buyer;
    /**
     * @param Person|null $buyer
     */
    public function setBuyer(?Person $buyer) : void
    {
        $this->buyer = $buyer;
    }
    /**
     * @return Person|null
     */
    public function getBuyer() : ?Person
    {
        return $this->buyer;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('buyer' => $this->buyer), static function ($value) : bool {
            return $value !== null;
        });
    }
}
