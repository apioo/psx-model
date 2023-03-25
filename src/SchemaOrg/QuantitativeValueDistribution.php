<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('A statistical distribution of values.')]
class QuantitativeValueDistribution extends StructuredValue implements \JsonSerializable
{
    protected ?float $median = null;
    #[Key('percentile25')]
    protected ?float $percentile = null;
    #[Key('percentile75')]
    protected ?float $percentile = null;
    #[Key('percentile10')]
    protected ?float $percentile = null;
    #[Key('percentile90')]
    protected ?float $percentile = null;
    protected ?Duration $duration = null;
    public function setMedian(?float $median) : void
    {
        $this->median = $median;
    }
    public function getMedian() : ?float
    {
        return $this->median;
    }
    public function setPercentile(?float $percentile) : void
    {
        $this->percentile = $percentile;
    }
    public function getPercentile() : ?float
    {
        return $this->percentile;
    }
    public function setPercentile(?float $percentile) : void
    {
        $this->percentile = $percentile;
    }
    public function getPercentile() : ?float
    {
        return $this->percentile;
    }
    public function setPercentile(?float $percentile) : void
    {
        $this->percentile = $percentile;
    }
    public function getPercentile() : ?float
    {
        return $this->percentile;
    }
    public function setPercentile(?float $percentile) : void
    {
        $this->percentile = $percentile;
    }
    public function getPercentile() : ?float
    {
        return $this->percentile;
    }
    public function setDuration(?Duration $duration) : void
    {
        $this->duration = $duration;
    }
    public function getDuration() : ?Duration
    {
        return $this->duration;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('median' => $this->median, 'percentile90' => $this->percentile, 'duration' => $this->duration), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

