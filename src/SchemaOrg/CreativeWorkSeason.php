<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A media season e.g. tv, radio, video game etc.')]
class CreativeWorkSeason extends CreativeWork implements \JsonSerializable
{
    protected \PSX\DateTime\Date|\DateTime|null $endDate = null;
    protected ?VideoObject $trailer = null;
    protected \DateTime|\PSX\DateTime\Date|null $startDate = null;
    protected ?CreativeWorkSeries $partOfSeries = null;
    protected ?Person $actor = null;
    protected int|string|null $seasonNumber = null;
    protected ?Organization $productionCompany = null;
    protected ?Episode $episode = null;
    protected ?Person $director = null;
    protected ?int $numberOfEpisodes = null;
    public function setEndDate(\PSX\DateTime\Date|\DateTime|null $endDate) : void
    {
        $this->endDate = $endDate;
    }
    public function getEndDate() : \PSX\DateTime\Date|\DateTime|null
    {
        return $this->endDate;
    }
    public function setTrailer(?VideoObject $trailer) : void
    {
        $this->trailer = $trailer;
    }
    public function getTrailer() : ?VideoObject
    {
        return $this->trailer;
    }
    public function setStartDate(\DateTime|\PSX\DateTime\Date|null $startDate) : void
    {
        $this->startDate = $startDate;
    }
    public function getStartDate() : \DateTime|\PSX\DateTime\Date|null
    {
        return $this->startDate;
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
    public function setSeasonNumber(int|string|null $seasonNumber) : void
    {
        $this->seasonNumber = $seasonNumber;
    }
    public function getSeasonNumber() : int|string|null
    {
        return $this->seasonNumber;
    }
    public function setProductionCompany(?Organization $productionCompany) : void
    {
        $this->productionCompany = $productionCompany;
    }
    public function getProductionCompany() : ?Organization
    {
        return $this->productionCompany;
    }
    public function setEpisode(?Episode $episode) : void
    {
        $this->episode = $episode;
    }
    public function getEpisode() : ?Episode
    {
        return $this->episode;
    }
    public function setDirector(?Person $director) : void
    {
        $this->director = $director;
    }
    public function getDirector() : ?Person
    {
        return $this->director;
    }
    public function setNumberOfEpisodes(?int $numberOfEpisodes) : void
    {
        $this->numberOfEpisodes = $numberOfEpisodes;
    }
    public function getNumberOfEpisodes() : ?int
    {
        return $this->numberOfEpisodes;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('endDate' => $this->endDate, 'trailer' => $this->trailer, 'startDate' => $this->startDate, 'partOfSeries' => $this->partOfSeries, 'actor' => $this->actor, 'seasonNumber' => $this->seasonNumber, 'productionCompany' => $this->productionCompany, 'episode' => $this->episode, 'director' => $this->director, 'numberOfEpisodes' => $this->numberOfEpisodes), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

