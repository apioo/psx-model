<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of giving money to a seller in exchange for goods or services rendered. An agent buys an object, product, or service from a seller for a price. Reciprocal of SellAction.")
 */
class BuyAction extends TradeAction
{
    /**
     * @var Organization|Person|null
     */
    protected $seller;
    /**
     * @param Organization|Person|null $seller
     */
    public function setSeller($seller) : void
    {
        $this->seller = $seller;
    }
    /**
     * @return Organization|Person|null
     */
    public function getSeller()
    {
        return $this->seller;
    }
}
