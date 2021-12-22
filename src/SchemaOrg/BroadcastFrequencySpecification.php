<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The frequency in MHz and the modulation used for a particular BroadcastService.')]
class BroadcastFrequencySpecification extends Intangible implements \JsonSerializable
{
    protected float|QuantitativeValue|null $broadcastFrequencyValue = null;
    public function setBroadcastFrequencyValue(float|QuantitativeValue|null $broadcastFrequencyValue) : void
    {
        $this->broadcastFrequencyValue = $broadcastFrequencyValue;
    }
    public function getBroadcastFrequencyValue() : float|QuantitativeValue|null
    {
        return $this->broadcastFrequencyValue;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('broadcastFrequencyValue' => $this->broadcastFrequencyValue), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

