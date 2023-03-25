<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A CreativeWorkSeries in schema.org is a group of related items, typically but not necessarily of the same kind. CreativeWorkSeries are usually organized into some order, often chronological. Unlike <a class="localLink" href="http://schema.org/ItemList">ItemList</a> which is a general purpose data structure for lists of things, the emphasis with CreativeWorkSeries is on published materials (written e.g. books and periodicals, or media such as tv, radio and games).<br/><br/>

Specific subtypes are available for describing <a class="localLink" href="http://schema.org/TVSeries">TVSeries</a>, <a class="localLink" href="http://schema.org/RadioSeries">RadioSeries</a>, <a class="localLink" href="http://schema.org/MovieSeries">MovieSeries</a>, <a class="localLink" href="http://schema.org/BookSeries">BookSeries</a>, <a class="localLink" href="http://schema.org/Periodical">Periodical</a> and <a class="localLink" href="http://schema.org/VideoGameSeries">VideoGameSeries</a>. In each case, the <a class="localLink" href="http://schema.org/hasPart">hasPart</a> / <a class="localLink" href="http://schema.org/isPartOf">isPartOf</a> properties can be used to relate the CreativeWorkSeries to its parts. The general CreativeWorkSeries type serves largely just to organize these more specific and practical subtypes.<br/><br/>

It is common for properties applicable to an item from the series to be usefully applied to the containing group. Schema.org attempts to anticipate some of these cases, but publishers should be free to apply properties of the series parts to the series as a whole wherever they seem appropriate.')]
class CreativeWorkSeries extends Series implements \JsonSerializable
{
    protected \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $endDate = null;
    protected ?string $issn = null;
    protected \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalDate|null $startDate = null;
    public function setEndDate(\PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $endDate) : void
    {
        $this->endDate = $endDate;
    }
    public function getEndDate() : \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null
    {
        return $this->endDate;
    }
    public function setIssn(?string $issn) : void
    {
        $this->issn = $issn;
    }
    public function getIssn() : ?string
    {
        return $this->issn;
    }
    public function setStartDate(\PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalDate|null $startDate) : void
    {
        $this->startDate = $startDate;
    }
    public function getStartDate() : \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalDate|null
    {
        return $this->startDate;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('endDate' => $this->endDate, 'issn' => $this->issn, 'startDate' => $this->startDate), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

