<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of participating in exertive activity for the purposes of improving health and fitness.')]
class ExerciseAction extends PlayAction implements \JsonSerializable
{
    protected ?Place $exerciseCourse = null;
    protected ?SportsTeam $sportsTeam = null;
    protected ?SportsActivityLocation $sportsActivityLocation = null;
    protected ?Place $fromLocation = null;
    protected ?Distance $distance = null;
    protected ?Place $toLocation = null;
    protected ?Person $opponent = null;
    protected ?SportsEvent $sportsEvent = null;
    public function setExerciseCourse(?Place $exerciseCourse) : void
    {
        $this->exerciseCourse = $exerciseCourse;
    }
    public function getExerciseCourse() : ?Place
    {
        return $this->exerciseCourse;
    }
    public function setSportsTeam(?SportsTeam $sportsTeam) : void
    {
        $this->sportsTeam = $sportsTeam;
    }
    public function getSportsTeam() : ?SportsTeam
    {
        return $this->sportsTeam;
    }
    public function setSportsActivityLocation(?SportsActivityLocation $sportsActivityLocation) : void
    {
        $this->sportsActivityLocation = $sportsActivityLocation;
    }
    public function getSportsActivityLocation() : ?SportsActivityLocation
    {
        return $this->sportsActivityLocation;
    }
    public function setFromLocation(?Place $fromLocation) : void
    {
        $this->fromLocation = $fromLocation;
    }
    public function getFromLocation() : ?Place
    {
        return $this->fromLocation;
    }
    public function setDistance(?Distance $distance) : void
    {
        $this->distance = $distance;
    }
    public function getDistance() : ?Distance
    {
        return $this->distance;
    }
    public function setToLocation(?Place $toLocation) : void
    {
        $this->toLocation = $toLocation;
    }
    public function getToLocation() : ?Place
    {
        return $this->toLocation;
    }
    public function setOpponent(?Person $opponent) : void
    {
        $this->opponent = $opponent;
    }
    public function getOpponent() : ?Person
    {
        return $this->opponent;
    }
    public function setSportsEvent(?SportsEvent $sportsEvent) : void
    {
        $this->sportsEvent = $sportsEvent;
    }
    public function getSportsEvent() : ?SportsEvent
    {
        return $this->sportsEvent;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('exerciseCourse' => $this->exerciseCourse, 'sportsTeam' => $this->sportsTeam, 'sportsActivityLocation' => $this->sportsActivityLocation, 'fromLocation' => $this->fromLocation, 'distance' => $this->distance, 'toLocation' => $this->toLocation, 'opponent' => $this->opponent, 'sportsEvent' => $this->sportsEvent), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

