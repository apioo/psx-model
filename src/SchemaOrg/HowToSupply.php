<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A supply consumed when performing the instructions for how to achieve a result.")
 */
class HowToSupply extends HowToItem
{
    /**
     * @var string|MonetaryAmount|null
     */
    protected $estimatedCost;
    /**
     * @param string|MonetaryAmount|null $estimatedCost
     */
    public function setEstimatedCost($estimatedCost) : void
    {
        $this->estimatedCost = $estimatedCost;
    }
    /**
     * @return string|MonetaryAmount|null
     */
    public function getEstimatedCost()
    {
        return $this->estimatedCost;
    }
}
