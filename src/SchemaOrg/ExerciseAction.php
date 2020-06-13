<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of participating in exertive activity for the purposes of improving health and fitness.")
 */
class ExerciseAction extends PlayAction
{
    /**
     * @var Place|null
     */
    protected $exerciseCourse;
    /**
     * @var SportsTeam|null
     */
    protected $sportsTeam;
    /**
     * @var SportsActivityLocation|null
     */
    protected $sportsActivityLocation;
    /**
     * @var Place|null
     */
    protected $fromLocation;
    /**
     * @var Distance|null
     */
    protected $distance;
    /**
     * @var Place|null
     */
    protected $toLocation;
    /**
     * @var Person|null
     */
    protected $opponent;
    /**
     * @var SportsEvent|null
     */
    protected $sportsEvent;
    /**
     * @param Place|null $exerciseCourse
     */
    public function setExerciseCourse(?Place $exerciseCourse) : void
    {
        $this->exerciseCourse = $exerciseCourse;
    }
    /**
     * @return Place|null
     */
    public function getExerciseCourse() : ?Place
    {
        return $this->exerciseCourse;
    }
    /**
     * @param SportsTeam|null $sportsTeam
     */
    public function setSportsTeam(?SportsTeam $sportsTeam) : void
    {
        $this->sportsTeam = $sportsTeam;
    }
    /**
     * @return SportsTeam|null
     */
    public function getSportsTeam() : ?SportsTeam
    {
        return $this->sportsTeam;
    }
    /**
     * @param SportsActivityLocation|null $sportsActivityLocation
     */
    public function setSportsActivityLocation(?SportsActivityLocation $sportsActivityLocation) : void
    {
        $this->sportsActivityLocation = $sportsActivityLocation;
    }
    /**
     * @return SportsActivityLocation|null
     */
    public function getSportsActivityLocation() : ?SportsActivityLocation
    {
        return $this->sportsActivityLocation;
    }
    /**
     * @param Place|null $fromLocation
     */
    public function setFromLocation(?Place $fromLocation) : void
    {
        $this->fromLocation = $fromLocation;
    }
    /**
     * @return Place|null
     */
    public function getFromLocation() : ?Place
    {
        return $this->fromLocation;
    }
    /**
     * @param Distance|null $distance
     */
    public function setDistance(?Distance $distance) : void
    {
        $this->distance = $distance;
    }
    /**
     * @return Distance|null
     */
    public function getDistance() : ?Distance
    {
        return $this->distance;
    }
    /**
     * @param Place|null $toLocation
     */
    public function setToLocation(?Place $toLocation) : void
    {
        $this->toLocation = $toLocation;
    }
    /**
     * @return Place|null
     */
    public function getToLocation() : ?Place
    {
        return $this->toLocation;
    }
    /**
     * @param Person|null $opponent
     */
    public function setOpponent(?Person $opponent) : void
    {
        $this->opponent = $opponent;
    }
    /**
     * @return Person|null
     */
    public function getOpponent() : ?Person
    {
        return $this->opponent;
    }
    /**
     * @param SportsEvent|null $sportsEvent
     */
    public function setSportsEvent(?SportsEvent $sportsEvent) : void
    {
        $this->sportsEvent = $sportsEvent;
    }
    /**
     * @return SportsEvent|null
     */
    public function getSportsEvent() : ?SportsEvent
    {
        return $this->sportsEvent;
    }
}
