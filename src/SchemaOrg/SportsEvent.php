<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Event type: Sports event.')]
class SportsEvent extends Event implements \JsonSerializable
{
    protected Person|SportsTeam|null $awayTeam = null;
    protected SportsTeam|Person|null $competitor = null;
    protected SportsTeam|Person|null $homeTeam = null;
    public function setAwayTeam(Person|SportsTeam|null $awayTeam) : void
    {
        $this->awayTeam = $awayTeam;
    }
    public function getAwayTeam() : Person|SportsTeam|null
    {
        return $this->awayTeam;
    }
    public function setCompetitor(SportsTeam|Person|null $competitor) : void
    {
        $this->competitor = $competitor;
    }
    public function getCompetitor() : SportsTeam|Person|null
    {
        return $this->competitor;
    }
    public function setHomeTeam(SportsTeam|Person|null $homeTeam) : void
    {
        $this->homeTeam = $homeTeam;
    }
    public function getHomeTeam() : SportsTeam|Person|null
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

