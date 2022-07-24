<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A short TV or radio program or a segment/part of a program.')]
class Clip extends CreativeWork implements \JsonSerializable
{
    protected int|string|null $position = null;
    protected Person|MusicGroup|null $musicBy = null;
    protected ?CreativeWorkSeries $partOfSeries = null;
    protected ?Person $actor = null;
    protected ?CreativeWorkSeason $partOfSeason = null;
    protected ?Episode $partOfEpisode = null;
    protected ?Person $director = null;
    public function setPosition(int|string|null $position) : void
    {
        $this->position = $position;
    }
    public function getPosition() : int|string|null
    {
        return $this->position;
    }
    public function setMusicBy(Person|MusicGroup|null $musicBy) : void
    {
        $this->musicBy = $musicBy;
    }
    public function getMusicBy() : Person|MusicGroup|null
    {
        return $this->musicBy;
    }
    public function setPartOfSeries(?CreativeWorkSeries $partOfSeries) : void
    {
        $this->partOfSeries = $partOfSeries;
    }
    public function getPartOfSeries() : ?CreativeWorkSeries
    {
        return $this->partOfSeries;
    }
    public function setActor(?Person $actor) : void
    {
        $this->actor = $actor;
    }
    public function getActor() : ?Person
    {
        return $this->actor;
    }
    public function setPartOfSeason(?CreativeWorkSeason $partOfSeason) : void
    {
        $this->partOfSeason = $partOfSeason;
    }
    public function getPartOfSeason() : ?CreativeWorkSeason
    {
        return $this->partOfSeason;
    }
    public function setPartOfEpisode(?Episode $partOfEpisode) : void
    {
        $this->partOfEpisode = $partOfEpisode;
    }
    public function getPartOfEpisode() : ?Episode
    {
        return $this->partOfEpisode;
    }
    public function setDirector(?Person $director) : void
    {
        $this->director = $director;
    }
    public function getDirector() : ?Person
    {
        return $this->director;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('position' => $this->position, 'musicBy' => $this->musicBy, 'partOfSeries' => $this->partOfSeries, 'actor' => $this->actor, 'partOfSeason' => $this->partOfSeason, 'partOfEpisode' => $this->partOfEpisode, 'director' => $this->director), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

