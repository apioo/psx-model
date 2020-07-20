<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A media episode (e.g. TV, radio, video game) which can be part of a series or season.")
 */
class Episode extends CreativeWork implements \JsonSerializable
{
    /**
     * @var VideoObject|null
     */
    protected $trailer;
    /**
     * @var int|string|null
     */
    protected $episodeNumber;
    /**
     * @var Person|MusicGroup|null
     */
    protected $musicBy;
    /**
     * @var CreativeWorkSeries|null
     */
    protected $partOfSeries;
    /**
     * @var Person|null
     */
    protected $actor;
    /**
     * @var CreativeWorkSeason|null
     */
    protected $partOfSeason;
    /**
     * @var Organization|null
     */
    protected $productionCompany;
    /**
     * @var Person|null
     */
    protected $director;
    /**
     * @param VideoObject|null $trailer
     */
    public function setTrailer(?VideoObject $trailer) : void
    {
        $this->trailer = $trailer;
    }
    /**
     * @return VideoObject|null
     */
    public function getTrailer() : ?VideoObject
    {
        return $this->trailer;
    }
    /**
     * @param int|string|null $episodeNumber
     */
    public function setEpisodeNumber($episodeNumber) : void
    {
        $this->episodeNumber = $episodeNumber;
    }
    /**
     * @return int|string|null
     */
    public function getEpisodeNumber()
    {
        return $this->episodeNumber;
    }
    /**
     * @param Person|MusicGroup|null $musicBy
     */
    public function setMusicBy($musicBy) : void
    {
        $this->musicBy = $musicBy;
    }
    /**
     * @return Person|MusicGroup|null
     */
    public function getMusicBy()
    {
        return $this->musicBy;
    }
    /**
     * @param CreativeWorkSeries|null $partOfSeries
     */
    public function setPartOfSeries(?CreativeWorkSeries $partOfSeries) : void
    {
        $this->partOfSeries = $partOfSeries;
    }
    /**
     * @return CreativeWorkSeries|null
     */
    public function getPartOfSeries() : ?CreativeWorkSeries
    {
        return $this->partOfSeries;
    }
    /**
     * @param Person|null $actor
     */
    public function setActor(?Person $actor) : void
    {
        $this->actor = $actor;
    }
    /**
     * @return Person|null
     */
    public function getActor() : ?Person
    {
        return $this->actor;
    }
    /**
     * @param CreativeWorkSeason|null $partOfSeason
     */
    public function setPartOfSeason(?CreativeWorkSeason $partOfSeason) : void
    {
        $this->partOfSeason = $partOfSeason;
    }
    /**
     * @return CreativeWorkSeason|null
     */
    public function getPartOfSeason() : ?CreativeWorkSeason
    {
        return $this->partOfSeason;
    }
    /**
     * @param Organization|null $productionCompany
     */
    public function setProductionCompany(?Organization $productionCompany) : void
    {
        $this->productionCompany = $productionCompany;
    }
    /**
     * @return Organization|null
     */
    public function getProductionCompany() : ?Organization
    {
        return $this->productionCompany;
    }
    /**
     * @param Person|null $director
     */
    public function setDirector(?Person $director) : void
    {
        $this->director = $director;
    }
    /**
     * @return Person|null
     */
    public function getDirector() : ?Person
    {
        return $this->director;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('trailer' => $this->trailer, 'episodeNumber' => $this->episodeNumber, 'musicBy' => $this->musicBy, 'partOfSeries' => $this->partOfSeries, 'actor' => $this->actor, 'partOfSeason' => $this->partOfSeason, 'productionCompany' => $this->productionCompany, 'director' => $this->director), static function ($value) : bool {
            return $value !== null;
        });
    }
}
