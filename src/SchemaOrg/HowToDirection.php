<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A direction indicating a single action to do in the instructions for how to achieve a result.")
 */
class HowToDirection extends ListItem implements \JsonSerializable
{
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
     * @var \PSX\Uri\Uri|MediaObject|null
     */
    protected $afterMedia;
    /**
     * @var string|HowToSupply|null
     */
    protected $supply;
    /**
     * @var string|HowToTool|null
     */
    protected $tool;
    /**
     * @var Duration|null
     */
    protected $prepTime;
    /**
     * @var \PSX\Uri\Uri|MediaObject|null
     */
    protected $beforeMedia;
    /**
     * @var \PSX\Uri\Uri|MediaObject|null
     */
    protected $duringMedia;
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
     * @param \PSX\Uri\Uri|MediaObject|null $afterMedia
     */
    public function setAfterMedia($afterMedia) : void
    {
        $this->afterMedia = $afterMedia;
    }
    /**
     * @return \PSX\Uri\Uri|MediaObject|null
     */
    public function getAfterMedia()
    {
        return $this->afterMedia;
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
    /**
     * @param \PSX\Uri\Uri|MediaObject|null $beforeMedia
     */
    public function setBeforeMedia($beforeMedia) : void
    {
        $this->beforeMedia = $beforeMedia;
    }
    /**
     * @return \PSX\Uri\Uri|MediaObject|null
     */
    public function getBeforeMedia()
    {
        return $this->beforeMedia;
    }
    /**
     * @param \PSX\Uri\Uri|MediaObject|null $duringMedia
     */
    public function setDuringMedia($duringMedia) : void
    {
        $this->duringMedia = $duringMedia;
    }
    /**
     * @return \PSX\Uri\Uri|MediaObject|null
     */
    public function getDuringMedia()
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
