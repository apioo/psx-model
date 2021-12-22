<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of giving money to a seller in exchange for goods or services rendered. An agent buys an object, product, or service from a seller for a price. Reciprocal of SellAction.')]
class BuyAction extends TradeAction implements \JsonSerializable
{
    protected Organization|Person|null $seller = null;
    public function setSeller(Organization|Person|null $seller) : void
    {
        $this->seller = $seller;
    }
    public function getSeller() : Organization|Person|null
    {
        return $this->seller;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('seller' => $this->seller), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

