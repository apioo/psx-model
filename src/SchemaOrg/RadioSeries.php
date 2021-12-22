<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('CreativeWorkSeries dedicated to radio broadcast and associated online delivery.')]
class RadioSeries extends CreativeWorkSeries implements \JsonSerializable
{
    protected ?VideoObject $trailer = null;
    protected Person|MusicGroup|null $musicBy = null;
    protected ?Person $actor = null;
    protected ?Organization $productionCompany = null;
    protected ?Episode $episode = null;
    protected ?Person $director = null;
    protected ?int $numberOfEpisodes = null;
    protected ?int $numberOfSeasons = null;
    protected ?CreativeWork $containsSeason = null;
    public function setTrailer(?VideoObject $trailer) : void
    {
        $this->trailer = $trailer;
    }
    public function getTrailer() : ?VideoObject
    {
        return $this->trailer;
    }
    public function setMusicBy(Person|MusicGroup|null $musicBy) : void
    {
        $this->musicBy = $musicBy;
    }
    public function getMusicBy() : Person|MusicGroup|null
    {
        return $this->musicBy;
    }
    public function setActor(?Person $actor) : void
    {
        $this->actor = $actor;
    }
    public function getActor() : ?Person
    {
        return $this->actor;
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
    public function setNumberOfSeasons(?int $numberOfSeasons) : void
    {
        $this->numberOfSeasons = $numberOfSeasons;
    }
    public function getNumberOfSeasons() : ?int
    {
        return $this->numberOfSeasons;
    }
    public function setContainsSeason(?CreativeWork $containsSeason) : void
    {
        $this->containsSeason = $containsSeason;
    }
    public function getContainsSeason() : ?CreativeWork
    {
        return $this->containsSeason;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('trailer' => $this->trailer, 'musicBy' => $this->musicBy, 'actor' => $this->actor, 'productionCompany' => $this->productionCompany, 'episode' => $this->episode, 'director' => $this->director, 'numberOfEpisodes' => $this->numberOfEpisodes, 'numberOfSeasons' => $this->numberOfSeasons, 'containsSeason' => $this->containsSeason), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

