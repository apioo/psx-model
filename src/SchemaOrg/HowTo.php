<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Instructions that explain how to achieve a result by performing a sequence of steps.')]
class HowTo extends CreativeWork implements \JsonSerializable
{
    protected string|QuantitativeValue|null $yield = null;
    protected string|MonetaryAmount|null $estimatedCost = null;
    protected ?Duration $totalTime = null;
    protected ?Duration $cookTime = null;
    protected ?Duration $performTime = null;
    protected string|HowToSupply|null $supply = null;
    protected string|HowToTool|null $tool = null;
    protected string|CreativeWork|HowToSection|null $step = null;
    protected ?Duration $prepTime = null;
    public function setYield(string|QuantitativeValue|null $yield) : void
    {
        $this->yield = $yield;
    }
    public function getYield() : string|QuantitativeValue|null
    {
        return $this->yield;
    }
    public function setEstimatedCost(string|MonetaryAmount|null $estimatedCost) : void
    {
        $this->estimatedCost = $estimatedCost;
    }
    public function getEstimatedCost() : string|MonetaryAmount|null
    {
        return $this->estimatedCost;
    }
    public function setTotalTime(?Duration $totalTime) : void
    {
        $this->totalTime = $totalTime;
    }
    public function getTotalTime() : ?Duration
    {
        return $this->totalTime;
    }
    public function setCookTime(?Duration $cookTime) : void
    {
        $this->cookTime = $cookTime;
    }
    public function getCookTime() : ?Duration
    {
        return $this->cookTime;
    }
    public function setPerformTime(?Duration $performTime) : void
    {
        $this->performTime = $performTime;
    }
    public function getPerformTime() : ?Duration
    {
        return $this->performTime;
    }
    public function setSupply(string|HowToSupply|null $supply) : void
    {
        $this->supply = $supply;
    }
    public function getSupply() : string|HowToSupply|null
    {
        return $this->supply;
    }
    public function setTool(string|HowToTool|null $tool) : void
    {
        $this->tool = $tool;
    }
    public function getTool() : string|HowToTool|null
    {
        return $this->tool;
    }
    public function setStep(string|CreativeWork|HowToSection|null $step) : void
    {
        $this->step = $step;
    }
    public function getStep() : string|CreativeWork|HowToSection|null
    {
        return $this->step;
    }
    public function setPrepTime(?Duration $prepTime) : void
    {
        $this->prepTime = $prepTime;
    }
    public function getPrepTime() : ?Duration
    {
        return $this->prepTime;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('yield' => $this->yield, 'estimatedCost' => $this->estimatedCost, 'totalTime' => $this->totalTime, 'cookTime' => $this->cookTime, 'performTime' => $this->performTime, 'supply' => $this->supply, 'tool' => $this->tool, 'step' => $this->step, 'prepTime' => $this->prepTime), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

