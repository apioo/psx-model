<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A structured value providing information about the opening hours of a place or a certain service inside a place.<br/><br/>

The place is <strong>open</strong> if the <a class="localLink" href="http://schema.org/opens">opens</a> property is specified, and <strong>closed</strong> otherwise.<br/><br/>

If the value for the <a class="localLink" href="http://schema.org/closes">closes</a> property is less than the value for the <a class="localLink" href="http://schema.org/opens">opens</a> property then the hour range is assumed to span over the next day.')]
class OpeningHoursSpecification extends StructuredValue implements \JsonSerializable
{
    protected ?\PSX\DateTime\LocalTime $closes = null;
    protected ?DayOfWeek $dayOfWeek = null;
    protected ?\PSX\DateTime\LocalTime $opens = null;
    protected \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $validThrough = null;
    protected \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $validFrom = null;
    public function setCloses(?\PSX\DateTime\LocalTime $closes) : void
    {
        $this->closes = $closes;
    }
    public function getCloses() : ?\PSX\DateTime\LocalTime
    {
        return $this->closes;
    }
    public function setDayOfWeek(?DayOfWeek $dayOfWeek) : void
    {
        $this->dayOfWeek = $dayOfWeek;
    }
    public function getDayOfWeek() : ?DayOfWeek
    {
        return $this->dayOfWeek;
    }
    public function setOpens(?\PSX\DateTime\LocalTime $opens) : void
    {
        $this->opens = $opens;
    }
    public function getOpens() : ?\PSX\DateTime\LocalTime
    {
        return $this->opens;
    }
    public function setValidThrough(\PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $validThrough) : void
    {
        $this->validThrough = $validThrough;
    }
    public function getValidThrough() : \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null
    {
        return $this->validThrough;
    }
    public function setValidFrom(\PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $validFrom) : void
    {
        $this->validFrom = $validFrom;
    }
    public function getValidFrom() : \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null
    {
        return $this->validFrom;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('closes' => $this->closes, 'dayOfWeek' => $this->dayOfWeek, 'opens' => $this->opens, 'validThrough' => $this->validThrough, 'validFrom' => $this->validFrom), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

