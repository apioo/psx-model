<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("CreativeWorkSeries dedicated to radio broadcast and associated online delivery.")
 */
class RadioSeries extends CreativeWorkSeries implements \JsonSerializable
{
    /**
     * @var VideoObject|null
     */
    protected $trailer;
    /**
     * @var Person|MusicGroup|null
     */
    protected $musicBy;
    /**
     * @var Person|null
     */
    protected $actor;
    /**
     * @var Organization|null
     */
    protected $productionCompany;
    /**
     * @var Episode|null
     */
    protected $episode;
    /**
     * @var Person|null
     */
    protected $director;
    /**
     * @var int|null
     */
    protected $numberOfEpisodes;
    /**
     * @var int|null
     */
    protected $numberOfSeasons;
    /**
     * @var CreativeWork|null
     */
    protected $containsSeason;
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
     * @param Episode|null $episode
     */
    public function setEpisode(?Episode $episode) : void
    {
        $this->episode = $episode;
    }
    /**
     * @return Episode|null
     */
    public function getEpisode() : ?Episode
    {
        return $this->episode;
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
    /**
     * @param int|null $numberOfEpisodes
     */
    public function setNumberOfEpisodes(?int $numberOfEpisodes) : void
    {
        $this->numberOfEpisodes = $numberOfEpisodes;
    }
    /**
     * @return int|null
     */
    public function getNumberOfEpisodes() : ?int
    {
        return $this->numberOfEpisodes;
    }
    /**
     * @param int|null $numberOfSeasons
     */
    public function setNumberOfSeasons(?int $numberOfSeasons) : void
    {
        $this->numberOfSeasons = $numberOfSeasons;
    }
    /**
     * @return int|null
     */
    public function getNumberOfSeasons() : ?int
    {
        return $this->numberOfSeasons;
    }
    /**
     * @param CreativeWork|null $containsSeason
     */
    public function setContainsSeason(?CreativeWork $containsSeason) : void
    {
        $this->containsSeason = $containsSeason;
    }
    /**
     * @return CreativeWork|null
     */
    public function getContainsSeason() : ?CreativeWork
    {
        return $this->containsSeason;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('trailer' => $this->trailer, 'musicBy' => $this->musicBy, 'actor' => $this->actor, 'productionCompany' => $this->productionCompany, 'episode' => $this->episode, 'director' => $this->director, 'numberOfEpisodes' => $this->numberOfEpisodes, 'numberOfSeasons' => $this->numberOfSeasons, 'containsSeason' => $this->containsSeason), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
