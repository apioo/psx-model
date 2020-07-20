<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The frequency in MHz and the modulation used for a particular BroadcastService.")
 */
class BroadcastFrequencySpecification extends Intangible implements \JsonSerializable
{
    /**
     * @var float|QuantitativeValue|null
     */
    protected $broadcastFrequencyValue;
    /**
     * @param float|QuantitativeValue|null $broadcastFrequencyValue
     */
    public function setBroadcastFrequencyValue($broadcastFrequencyValue) : void
    {
        $this->broadcastFrequencyValue = $broadcastFrequencyValue;
    }
    /**
     * @return float|QuantitativeValue|null
     */
    public function getBroadcastFrequencyValue()
    {
        return $this->broadcastFrequencyValue;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('broadcastFrequencyValue' => $this->broadcastFrequencyValue), static function ($value) : bool {
            return $value !== null;
        });
    }
}
