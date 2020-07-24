<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A short TV or radio program or a segment/part of a program.")
 */
class Clip extends CreativeWork implements \JsonSerializable
{
    /**
     * @var int|string|null
     */
    protected $position;
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
     * @var Episode|null
     */
    protected $partOfEpisode;
    /**
     * @var Person|null
     */
    protected $director;
    /**
     * @param int|string|null $position
     */
    public function setPosition($position) : void
    {
        $this->position = $position;
    }
    /**
     * @return int|string|null
     */
    public function getPosition()
    {
        return $this->position;
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
     * @param Episode|null $partOfEpisode
     */
    public function setPartOfEpisode(?Episode $partOfEpisode) : void
    {
        $this->partOfEpisode = $partOfEpisode;
    }
    /**
     * @return Episode|null
     */
    public function getPartOfEpisode() : ?Episode
    {
        return $this->partOfEpisode;
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
        return array_merge(parent::jsonSerialize(), array_filter(array('position' => $this->position, 'musicBy' => $this->musicBy, 'partOfSeries' => $this->partOfSeries, 'actor' => $this->actor, 'partOfSeason' => $this->partOfSeason, 'partOfEpisode' => $this->partOfEpisode, 'director' => $this->director), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
