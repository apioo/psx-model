<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A movie.')]
class Movie extends CreativeWork implements \JsonSerializable
{
    protected ?VideoObject $trailer = null;
    protected Person|MusicGroup|null $musicBy = null;
    protected ?Person $actor = null;
    protected ?Organization $productionCompany = null;
    protected ?Country $countryOfOrigin = null;
    protected ?Person $director = null;
    protected ?Duration $duration = null;
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
    public function setCountryOfOrigin(?Country $countryOfOrigin) : void
    {
        $this->countryOfOrigin = $countryOfOrigin;
    }
    public function getCountryOfOrigin() : ?Country
    {
        return $this->countryOfOrigin;
    }
    public function setDirector(?Person $director) : void
    {
        $this->director = $director;
    }
    public function getDirector() : ?Person
    {
        return $this->director;
    }
    public function setDuration(?Duration $duration) : void
    {
        $this->duration = $duration;
    }
    public function getDuration() : ?Duration
    {
        return $this->duration;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('trailer' => $this->trailer, 'musicBy' => $this->musicBy, 'actor' => $this->actor, 'productionCompany' => $this->productionCompany, 'countryOfOrigin' => $this->countryOfOrigin, 'director' => $this->director, 'duration' => $this->duration), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

