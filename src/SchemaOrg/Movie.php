<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A movie.")
 */
class Movie extends CreativeWork
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
     * @var Country|null
     */
    protected $countryOfOrigin;
    /**
     * @var Person|null
     */
    protected $director;
    /**
     * @var Duration|null
     */
    protected $duration;
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
     * @param Country|null $countryOfOrigin
     */
    public function setCountryOfOrigin(?Country $countryOfOrigin) : void
    {
        $this->countryOfOrigin = $countryOfOrigin;
    }
    /**
     * @return Country|null
     */
    public function getCountryOfOrigin() : ?Country
    {
        return $this->countryOfOrigin;
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
     * @param Duration|null $duration
     */
    public function setDuration(?Duration $duration) : void
    {
        $this->duration = $duration;
    }
    /**
     * @return Duration|null
     */
    public function getDuration() : ?Duration
    {
        return $this->duration;
    }
}
