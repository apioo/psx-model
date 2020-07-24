<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Instructions that explain how to achieve a result by performing a sequence of steps.")
 */
class HowTo extends CreativeWork implements \JsonSerializable
{
    /**
     * @var string|QuantitativeValue|null
     */
    protected $yield;
    /**
     * @var string|MonetaryAmount|null
     */
    protected $estimatedCost;
    /**
     * @var Duration|null
     */
    protected $totalTime;
    /**
     * @var Duration|null
     */
    protected $cookTime;
    /**
     * @var Duration|null
     */
    protected $performTime;
    /**
     * @var string|HowToSupply|null
     */
    protected $supply;
    /**
     * @var string|HowToTool|null
     */
    protected $tool;
    /**
     * @var string|CreativeWork|HowToSection|null
     */
    protected $step;
    /**
     * @var Duration|null
     */
    protected $prepTime;
    /**
     * @param string|QuantitativeValue|null $yield
     */
    public function setYield($yield) : void
    {
        $this->yield = $yield;
    }
    /**
     * @return string|QuantitativeValue|null
     */
    public function getYield()
    {
        return $this->yield;
    }
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
    /**
     * @param Duration|null $totalTime
     */
    public function setTotalTime(?Duration $totalTime) : void
    {
        $this->totalTime = $totalTime;
    }
    /**
     * @return Duration|null
     */
    public function getTotalTime() : ?Duration
    {
        return $this->totalTime;
    }
    /**
     * @param Duration|null $cookTime
     */
    public function setCookTime(?Duration $cookTime) : void
    {
        $this->cookTime = $cookTime;
    }
    /**
     * @return Duration|null
     */
    public function getCookTime() : ?Duration
    {
        return $this->cookTime;
    }
    /**
     * @param Duration|null $performTime
     */
    public function setPerformTime(?Duration $performTime) : void
    {
        $this->performTime = $performTime;
    }
    /**
     * @return Duration|null
     */
    public function getPerformTime() : ?Duration
    {
        return $this->performTime;
    }
    /**
     * @param string|HowToSupply|null $supply
     */
    public function setSupply($supply) : void
    {
        $this->supply = $supply;
    }
    /**
     * @return string|HowToSupply|null
     */
    public function getSupply()
    {
        return $this->supply;
    }
    /**
     * @param string|HowToTool|null $tool
     */
    public function setTool($tool) : void
    {
        $this->tool = $tool;
    }
    /**
     * @return string|HowToTool|null
     */
    public function getTool()
    {
        return $this->tool;
    }
    /**
     * @param string|CreativeWork|HowToSection|null $step
     */
    public function setStep($step) : void
    {
        $this->step = $step;
    }
    /**
     * @return string|CreativeWork|HowToSection|null
     */
    public function getStep()
    {
        return $this->step;
    }
    /**
     * @param Duration|null $prepTime
     */
    public function setPrepTime(?Duration $prepTime) : void
    {
        $this->prepTime = $prepTime;
    }
    /**
     * @return Duration|null
     */
    public function getPrepTime() : ?Duration
    {
        return $this->prepTime;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('yield' => $this->yield, 'estimatedCost' => $this->estimatedCost, 'totalTime' => $this->totalTime, 'cookTime' => $this->cookTime, 'performTime' => $this->performTime, 'supply' => $this->supply, 'tool' => $this->tool, 'step' => $this->step, 'prepTime' => $this->prepTime), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
