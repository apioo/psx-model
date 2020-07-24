<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("A structured value providing information about the opening hours of a place or a certain service inside a place.<br/><br/>

The place is <strong>open</strong> if the <a class=""localLink"" href=""http://schema.org/opens"">opens</a> property is specified, and <strong>closed</strong> otherwise.<br/><br/>

If the value for the <a class=""localLink"" href=""http://schema.org/closes"">closes</a> property is less than the value for the <a class=""localLink"" href=""http://schema.org/opens"">opens</a> property then the hour range is assumed to span over the next day.")
*/
class OpeningHoursSpecification extends StructuredValue implements \JsonSerializable
{
    /**
     * @var \PSX\DateTime\Time|null
     */
    protected $closes;
    /**
     * @var DayOfWeek|null
     */
    protected $dayOfWeek;
    /**
     * @var \PSX\DateTime\Time|null
     */
    protected $opens;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $validThrough;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $validFrom;
    /**
     * @param \PSX\DateTime\Time|null $closes
     */
    public function setCloses(?\PSX\DateTime\Time $closes) : void
    {
        $this->closes = $closes;
    }
    /**
     * @return \PSX\DateTime\Time|null
     */
    public function getCloses() : ?\PSX\DateTime\Time
    {
        return $this->closes;
    }
    /**
     * @param DayOfWeek|null $dayOfWeek
     */
    public function setDayOfWeek(?DayOfWeek $dayOfWeek) : void
    {
        $this->dayOfWeek = $dayOfWeek;
    }
    /**
     * @return DayOfWeek|null
     */
    public function getDayOfWeek() : ?DayOfWeek
    {
        return $this->dayOfWeek;
    }
    /**
     * @param \PSX\DateTime\Time|null $opens
     */
    public function setOpens(?\PSX\DateTime\Time $opens) : void
    {
        $this->opens = $opens;
    }
    /**
     * @return \PSX\DateTime\Time|null
     */
    public function getOpens() : ?\PSX\DateTime\Time
    {
        return $this->opens;
    }
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $validThrough
     */
    public function setValidThrough($validThrough) : void
    {
        $this->validThrough = $validThrough;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $validFrom
     */
    public function setValidFrom($validFrom) : void
    {
        $this->validFrom = $validFrom;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('closes' => $this->closes, 'dayOfWeek' => $this->dayOfWeek, 'opens' => $this->opens, 'validThrough' => $this->validThrough, 'validFrom' => $this->validFrom), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
