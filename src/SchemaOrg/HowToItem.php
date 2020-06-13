<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An item used as either a tool or supply when performing the instructions for how to to achieve a result.")
 */
class HowToItem extends ListItem
{
    /**
     * @var float|string|QuantitativeValue|null
     */
    protected $requiredQuantity;
    /**
     * @param float|string|QuantitativeValue|null $requiredQuantity
     */
    public function setRequiredQuantity($requiredQuantity) : void
    {
        $this->requiredQuantity = $requiredQuantity;
    }
    /**
     * @return float|string|QuantitativeValue|null
     */
    public function getRequiredQuantity()
    {
        return $this->requiredQuantity;
    }
}
