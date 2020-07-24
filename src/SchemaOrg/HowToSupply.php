<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A supply consumed when performing the instructions for how to achieve a result.")
 */
class HowToSupply extends HowToItem implements \JsonSerializable
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
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('estimatedCost' => $this->estimatedCost), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
