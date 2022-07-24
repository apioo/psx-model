<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Organization: Sports team.')]
class SportsTeam extends SportsOrganization implements \JsonSerializable
{
    protected ?Person $athlete = null;
    protected ?Person $coach = null;
    public function setAthlete(?Person $athlete) : void
    {
        $this->athlete = $athlete;
    }
    public function getAthlete() : ?Person
    {
        return $this->athlete;
    }
    public function setCoach(?Person $coach) : void
    {
        $this->coach = $coach;
    }
    public function getCoach() : ?Person
    {
        return $this->coach;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('athlete' => $this->athlete, 'coach' => $this->coach), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

