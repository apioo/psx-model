<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A media episode (e.g. TV, radio, video game) which can be part of a series or season.')]
class Episode extends CreativeWork implements \JsonSerializable
{
    protected ?VideoObject $trailer = null;
    protected int|string|null $episodeNumber = null;
    protected Person|MusicGroup|null $musicBy = null;
    protected ?CreativeWorkSeries $partOfSeries = null;
    protected ?Person $actor = null;
    protected ?CreativeWorkSeason $partOfSeason = null;
    protected ?Organization $productionCompany = null;
    protected ?Person $director = null;
    public function setTrailer(?VideoObject $trailer) : void
    {
        $this->trailer = $trailer;
    }
    public function getTrailer() : ?VideoObject
    {
        return $this->trailer;
    }
    public function setEpisodeNumber(int|string|null $episodeNumber) : void
    {
        $this->episodeNumber = $episodeNumber;
    }
    public function getEpisodeNumber() : int|string|null
    {
        return $this->episodeNumber;
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
    public function setProductionCompany(?Organization $productionCompany) : void
    {
        $this->productionCompany = $productionCompany;
    }
    public function getProductionCompany() : ?Organization
    {
        return $this->productionCompany;
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
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('trailer' => $this->trailer, 'episodeNumber' => $this->episodeNumber, 'musicBy' => $this->musicBy, 'partOfSeries' => $this->partOfSeries, 'actor' => $this->actor, 'partOfSeason' => $this->partOfSeason, 'productionCompany' => $this->productionCompany, 'director' => $this->director), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

