<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Event type: Sports event.")
 */
class SportsEvent extends Event implements \JsonSerializable
{
    /**
     * @var Person|SportsTeam|null
     */
    protected $awayTeam;
    /**
     * @var SportsTeam|Person|null
     */
    protected $competitor;
    /**
     * @var SportsTeam|Person|null
     */
    protected $homeTeam;
    /**
     * @param Person|SportsTeam|null $awayTeam
     */
    public function setAwayTeam($awayTeam) : void
    {
        $this->awayTeam = $awayTeam;
    }
    /**
     * @return Person|SportsTeam|null
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }
    /**
     * @param SportsTeam|Person|null $competitor
     */
    public function setCompetitor($competitor) : void
    {
        $this->competitor = $competitor;
    }
    /**
     * @return SportsTeam|Person|null
     */
    public function getCompetitor()
    {
        return $this->competitor;
    }
    /**
     * @param SportsTeam|Person|null $homeTeam
     */
    public function setHomeTeam($homeTeam) : void
    {
        $this->homeTeam = $homeTeam;
    }
    /**
     * @return SportsTeam|Person|null
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('awayTeam' => $this->awayTeam, 'competitor' => $this->competitor, 'homeTeam' => $this->homeTeam), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
