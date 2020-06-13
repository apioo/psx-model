<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A media season e.g. tv, radio, video game etc.")
 */
class CreativeWorkSeason extends CreativeWork
{
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $endDate;
    /**
     * @var VideoObject|null
     */
    protected $trailer;
    /**
     * @var \DateTime|\PSX\DateTime\Date|null
     */
    protected $startDate;
    /**
     * @var CreativeWorkSeries|null
     */
    protected $partOfSeries;
    /**
     * @var Person|null
     */
    protected $actor;
    /**
     * @var int|string|null
     */
    protected $seasonNumber;
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
     * @param \PSX\DateTime\Date|\DateTime|null $endDate
     */
    public function setEndDate($endDate) : void
    {
        $this->endDate = $endDate;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
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
     * @param \DateTime|\PSX\DateTime\Date|null $startDate
     */
    public function setStartDate($startDate) : void
    {
        $this->startDate = $startDate;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Date|null
     */
    public function getStartDate()
    {
        return $this->startDate;
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
     * @param int|string|null $seasonNumber
     */
    public function setSeasonNumber($seasonNumber) : void
    {
        $this->seasonNumber = $seasonNumber;
    }
    /**
     * @return int|string|null
     */
    public function getSeasonNumber()
    {
        return $this->seasonNumber;
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
}
