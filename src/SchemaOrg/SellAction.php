<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of taking money from a buyer in exchange for goods or services rendered. An agent sells an object, product, or service to a buyer for a price. Reciprocal of BuyAction.')]
class SellAction extends TradeAction implements \JsonSerializable
{
    protected ?Person $buyer = null;
    public function setBuyer(?Person $buyer) : void
    {
        $this->buyer = $buyer;
    }
    public function getBuyer() : ?Person
    {
        return $this->buyer;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('buyer' => $this->buyer), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

