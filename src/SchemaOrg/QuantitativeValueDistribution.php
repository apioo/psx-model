<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A statistical distribution of values.')]
class QuantitativeValueDistribution extends StructuredValue implements \JsonSerializable
{
    protected ?float $median = null;
    protected ?float $percentile25 = null;
    protected ?float $percentile75 = null;
    protected ?float $percentile10 = null;
    protected ?float $percentile90 = null;
    protected ?Duration $duration = null;
    public function setMedian(?float $median) : void
    {
        $this->median = $median;
    }
    public function getMedian() : ?float
    {
        return $this->median;
    }
    public function setPercentile25(?float $percentile25) : void
    {
        $this->percentile25 = $percentile25;
    }
    public function getPercentile25() : ?float
    {
        return $this->percentile25;
    }
    public function setPercentile75(?float $percentile75) : void
    {
        $this->percentile75 = $percentile75;
    }
    public function getPercentile75() : ?float
    {
        return $this->percentile75;
    }
    public function setPercentile10(?float $percentile10) : void
    {
        $this->percentile10 = $percentile10;
    }
    public function getPercentile10() : ?float
    {
        return $this->percentile10;
    }
    public function setPercentile90(?float $percentile90) : void
    {
        $this->percentile90 = $percentile90;
    }
    public function getPercentile90() : ?float
    {
        return $this->percentile90;
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
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('median' => $this->median, 'percentile25' => $this->percentile25, 'percentile75' => $this->percentile75, 'percentile10' => $this->percentile10, 'percentile90' => $this->percentile90, 'duration' => $this->duration), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

