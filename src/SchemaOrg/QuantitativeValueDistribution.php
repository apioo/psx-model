<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A statistical distribution of values.")
 */
class QuantitativeValueDistribution extends StructuredValue implements \JsonSerializable
{
    /**
     * @var float|null
     */
    protected $median;
    /**
     * @var float|null
     */
    protected $percentile25;
    /**
     * @var float|null
     */
    protected $percentile75;
    /**
     * @var float|null
     */
    protected $percentile10;
    /**
     * @var float|null
     */
    protected $percentile90;
    /**
     * @var Duration|null
     */
    protected $duration;
    /**
     * @param float|null $median
     */
    public function setMedian(?float $median) : void
    {
        $this->median = $median;
    }
    /**
     * @return float|null
     */
    public function getMedian() : ?float
    {
        return $this->median;
    }
    /**
     * @param float|null $percentile25
     */
    public function setPercentile25(?float $percentile25) : void
    {
        $this->percentile25 = $percentile25;
    }
    /**
     * @return float|null
     */
    public function getPercentile25() : ?float
    {
        return $this->percentile25;
    }
    /**
     * @param float|null $percentile75
     */
    public function setPercentile75(?float $percentile75) : void
    {
        $this->percentile75 = $percentile75;
    }
    /**
     * @return float|null
     */
    public function getPercentile75() : ?float
    {
        return $this->percentile75;
    }
    /**
     * @param float|null $percentile10
     */
    public function setPercentile10(?float $percentile10) : void
    {
        $this->percentile10 = $percentile10;
    }
    /**
     * @return float|null
     */
    public function getPercentile10() : ?float
    {
        return $this->percentile10;
    }
    /**
     * @param float|null $percentile90
     */
    public function setPercentile90(?float $percentile90) : void
    {
        $this->percentile90 = $percentile90;
    }
    /**
     * @return float|null
     */
    public function getPercentile90() : ?float
    {
        return $this->percentile90;
    }
    /**
     * @param Duration|null $duration
     */
    public function setDuration(?Duration $duration) : void
    {
        $this->duration = $duration;
    }
    /**
     * @return Duration|null
     */
    public function getDuration() : ?Duration
    {
        return $this->duration;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('median' => $this->median, 'percentile25' => $this->percentile25, 'percentile75' => $this->percentile75, 'percentile10' => $this->percentile10, 'percentile90' => $this->percentile90, 'duration' => $this->duration), static function ($value) : bool {
            return $value !== null;
        });
    }
}
