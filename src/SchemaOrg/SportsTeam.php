<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Organization: Sports team.")
 */
class SportsTeam extends SportsOrganization implements \JsonSerializable
{
    /**
     * @var Person|null
     */
    protected $athlete;
    /**
     * @var Person|null
     */
    protected $coach;
    /**
     * @param Person|null $athlete
     */
    public function setAthlete(?Person $athlete) : void
    {
        $this->athlete = $athlete;
    }
    /**
     * @return Person|null
     */
    public function getAthlete() : ?Person
    {
        return $this->athlete;
    }
    /**
     * @param Person|null $coach
     */
    public function setCoach(?Person $coach) : void
    {
        $this->coach = $coach;
    }
    /**
     * @return Person|null
     */
    public function getCoach() : ?Person
    {
        return $this->coach;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('athlete' => $this->athlete, 'coach' => $this->coach), static function ($value) : bool {
            return $value !== null;
        });
    }
}
