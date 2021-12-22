<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A direction indicating a single action to do in the instructions for how to achieve a result.')]
class HowToDirection extends ListItem implements \JsonSerializable
{
    protected ?Duration $totalTime = null;
    protected ?Duration $cookTime = null;
    protected ?Duration $performTime = null;
    protected \PSX\Uri\Uri|MediaObject|null $afterMedia = null;
    protected string|HowToSupply|null $supply = null;
    protected string|HowToTool|null $tool = null;
    protected ?Duration $prepTime = null;
    protected \PSX\Uri\Uri|MediaObject|null $beforeMedia = null;
    protected \PSX\Uri\Uri|MediaObject|null $duringMedia = null;
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
    public function setAfterMedia(\PSX\Uri\Uri|MediaObject|null $afterMedia) : void
    {
        $this->afterMedia = $afterMedia;
    }
    public function getAfterMedia() : \PSX\Uri\Uri|MediaObject|null
    {
        return $this->afterMedia;
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
    public function setPrepTime(?Duration $prepTime) : void
    {
        $this->prepTime = $prepTime;
    }
    public function getPrepTime() : ?Duration
    {
        return $this->prepTime;
    }
    public function setBeforeMedia(\PSX\Uri\Uri|MediaObject|null $beforeMedia) : void
    {
        $this->beforeMedia = $beforeMedia;
    }
    public function getBeforeMedia() : \PSX\Uri\Uri|MediaObject|null
    {
        return $this->beforeMedia;
    }
    public function setDuringMedia(\PSX\Uri\Uri|MediaObject|null $duringMedia) : void
    {
        $this->duringMedia = $duringMedia;
    }
    public function getDuringMedia() : \PSX\Uri\Uri|MediaObject|null
    {
        return $this->duringMedia;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('totalTime' => $this->totalTime, 'cookTime' => $this->cookTime, 'performTime' => $this->performTime, 'afterMedia' => $this->afterMedia, 'supply' => $this->supply, 'tool' => $this->tool, 'prepTime' => $this->prepTime, 'beforeMedia' => $this->beforeMedia, 'duringMedia' => $this->duringMedia), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

