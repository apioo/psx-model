<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An event happening at a certain time and location, such as a concert, lecture, or festival. Ticketing information may be added via the <a class=""localLink"" href=""http://schema.org/offers"">offers</a> property. Repeated events may be structured as separate Event objects.")
 */
class Event extends Thing
{
    /**
     * @var Audience|null
     */
    protected $audience;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $endDate;
    /**
     * @var int|null
     */
    protected $remainingAttendeeCapacity;
    /**
     * @var Person|Organization|null
     */
    protected $sponsor;
    /**
     * @var \DateTime|\PSX\DateTime\Date|null
     */
    protected $startDate;
    /**
     * @var string|PostalAddress|Place|null
     */
    protected $location;
    /**
     * @var Person|Organization|null
     */
    protected $performer;
    /**
     * @var string|null
     */
    protected $typicalAgeRange;
    /**
     * @var Person|null
     */
    protected $actor;
    /**
     * @var CreativeWork|null
     */
    protected $workFeatured;
    /**
     * @var AggregateRating|null
     */
    protected $aggregateRating;
    /**
     * @var string|Language|null
     */
    protected $inLanguage;
    /**
     * @var Review|null
     */
    protected $review;
    /**
     * @var \DateTime|\PSX\DateTime\Time|null
     */
    protected $doorTime;
    /**
     * @var Organization|Person|null
     */
    protected $translator;
    /**
     * @var EventStatusType|null
     */
    protected $eventStatus;
    /**
     * @var int|null
     */
    protected $maximumAttendeeCapacity;
    /**
     * @var Organization|Person|null
     */
    protected $attendee;
    /**
     * @var Person|Organization|null
     */
    protected $organizer;
    /**
     * @var bool|null
     */
    protected $isAccessibleForFree;
    /**
     * @var CreativeWork|null
     */
    protected $workPerformed;
    /**
     * @var Person|null
     */
    protected $director;
    /**
     * @var Event|null
     */
    protected $subEvent;
    /**
     * @var Organization|Person|null
     */
    protected $composer;
    /**
     * @var \PSX\DateTime\Date|null
     */
    protected $previousStartDate;
    /**
     * @var Duration|null
     */
    protected $duration;
    /**
     * @var Organization|Person|null
     */
    protected $contributor;
    /**
     * @var Thing|null
     */
    protected $about;
    /**
     * @var Event|null
     */
    protected $superEvent;
    /**
     * @var Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
     */
    protected $itemOffered;
    /**
     * @var Offer|Demand|null
     */
    protected $offers;
    /**
     * @var Event|CreativeWork|null
     */
    protected $recordedAt;
    /**
     * @param Audience|null $audience
     */
    public function setAudience(?Audience $audience) : void
    {
        $this->audience = $audience;
    }
    /**
     * @return Audience|null
     */
    public function getAudience() : ?Audience
    {
        return $this->audience;
    }
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
     * @param int|null $remainingAttendeeCapacity
     */
    public function setRemainingAttendeeCapacity(?int $remainingAttendeeCapacity) : void
    {
        $this->remainingAttendeeCapacity = $remainingAttendeeCapacity;
    }
    /**
     * @return int|null
     */
    public function getRemainingAttendeeCapacity() : ?int
    {
        return $this->remainingAttendeeCapacity;
    }
    /**
     * @param Person|Organization|null $sponsor
     */
    public function setSponsor($sponsor) : void
    {
        $this->sponsor = $sponsor;
    }
    /**
     * @return Person|Organization|null
     */
    public function getSponsor()
    {
        return $this->sponsor;
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
     * @param string|PostalAddress|Place|null $location
     */
    public function setLocation($location) : void
    {
        $this->location = $location;
    }
    /**
     * @return string|PostalAddress|Place|null
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * @param Person|Organization|null $performer
     */
    public function setPerformer($performer) : void
    {
        $this->performer = $performer;
    }
    /**
     * @return Person|Organization|null
     */
    public function getPerformer()
    {
        return $this->performer;
    }
    /**
     * @param string|null $typicalAgeRange
     */
    public function setTypicalAgeRange(?string $typicalAgeRange) : void
    {
        $this->typicalAgeRange = $typicalAgeRange;
    }
    /**
     * @return string|null
     */
    public function getTypicalAgeRange() : ?string
    {
        return $this->typicalAgeRange;
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
     * @param CreativeWork|null $workFeatured
     */
    public function setWorkFeatured(?CreativeWork $workFeatured) : void
    {
        $this->workFeatured = $workFeatured;
    }
    /**
     * @return CreativeWork|null
     */
    public function getWorkFeatured() : ?CreativeWork
    {
        return $this->workFeatured;
    }
    /**
     * @param AggregateRating|null $aggregateRating
     */
    public function setAggregateRating(?AggregateRating $aggregateRating) : void
    {
        $this->aggregateRating = $aggregateRating;
    }
    /**
     * @return AggregateRating|null
     */
    public function getAggregateRating() : ?AggregateRating
    {
        return $this->aggregateRating;
    }
    /**
     * @param string|Language|null $inLanguage
     */
    public function setInLanguage($inLanguage) : void
    {
        $this->inLanguage = $inLanguage;
    }
    /**
     * @return string|Language|null
     */
    public function getInLanguage()
    {
        return $this->inLanguage;
    }
    /**
     * @param Review|null $review
     */
    public function setReview(?Review $review) : void
    {
        $this->review = $review;
    }
    /**
     * @return Review|null
     */
    public function getReview() : ?Review
    {
        return $this->review;
    }
    /**
     * @param \DateTime|\PSX\DateTime\Time|null $doorTime
     */
    public function setDoorTime($doorTime) : void
    {
        $this->doorTime = $doorTime;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Time|null
     */
    public function getDoorTime()
    {
        return $this->doorTime;
    }
    /**
     * @param Organization|Person|null $translator
     */
    public function setTranslator($translator) : void
    {
        $this->translator = $translator;
    }
    /**
     * @return Organization|Person|null
     */
    public function getTranslator()
    {
        return $this->translator;
    }
    /**
     * @param EventStatusType|null $eventStatus
     */
    public function setEventStatus(?EventStatusType $eventStatus) : void
    {
        $this->eventStatus = $eventStatus;
    }
    /**
     * @return EventStatusType|null
     */
    public function getEventStatus() : ?EventStatusType
    {
        return $this->eventStatus;
    }
    /**
     * @param int|null $maximumAttendeeCapacity
     */
    public function setMaximumAttendeeCapacity(?int $maximumAttendeeCapacity) : void
    {
        $this->maximumAttendeeCapacity = $maximumAttendeeCapacity;
    }
    /**
     * @return int|null
     */
    public function getMaximumAttendeeCapacity() : ?int
    {
        return $this->maximumAttendeeCapacity;
    }
    /**
     * @param Organization|Person|null $attendee
     */
    public function setAttendee($attendee) : void
    {
        $this->attendee = $attendee;
    }
    /**
     * @return Organization|Person|null
     */
    public function getAttendee()
    {
        return $this->attendee;
    }
    /**
     * @param Person|Organization|null $organizer
     */
    public function setOrganizer($organizer) : void
    {
        $this->organizer = $organizer;
    }
    /**
     * @return Person|Organization|null
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }
    /**
     * @param bool|null $isAccessibleForFree
     */
    public function setIsAccessibleForFree(?bool $isAccessibleForFree) : void
    {
        $this->isAccessibleForFree = $isAccessibleForFree;
    }
    /**
     * @return bool|null
     */
    public function getIsAccessibleForFree() : ?bool
    {
        return $this->isAccessibleForFree;
    }
    /**
     * @param CreativeWork|null $workPerformed
     */
    public function setWorkPerformed(?CreativeWork $workPerformed) : void
    {
        $this->workPerformed = $workPerformed;
    }
    /**
     * @return CreativeWork|null
     */
    public function getWorkPerformed() : ?CreativeWork
    {
        return $this->workPerformed;
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
     * @param Event|null $subEvent
     */
    public function setSubEvent(?Event $subEvent) : void
    {
        $this->subEvent = $subEvent;
    }
    /**
     * @return Event|null
     */
    public function getSubEvent() : ?Event
    {
        return $this->subEvent;
    }
    /**
     * @param Organization|Person|null $composer
     */
    public function setComposer($composer) : void
    {
        $this->composer = $composer;
    }
    /**
     * @return Organization|Person|null
     */
    public function getComposer()
    {
        return $this->composer;
    }
    /**
     * @param \PSX\DateTime\Date|null $previousStartDate
     */
    public function setPreviousStartDate(?\PSX\DateTime\Date $previousStartDate) : void
    {
        $this->previousStartDate = $previousStartDate;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getPreviousStartDate() : ?\PSX\DateTime\Date
    {
        return $this->previousStartDate;
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
    /**
     * @param Organization|Person|null $contributor
     */
    public function setContributor($contributor) : void
    {
        $this->contributor = $contributor;
    }
    /**
     * @return Organization|Person|null
     */
    public function getContributor()
    {
        return $this->contributor;
    }
    /**
     * @param Thing|\PSX\Uri\Uri|CreativeWork|null $about
     */
    public function setAbout($about) : void
    {
        $this->about = $about;
    }
    /**
     * @return Thing|\PSX\Uri\Uri|CreativeWork|null
     */
    public function getAbout()
    {
        return $this->about;
    }
    /**
     * @param Event|null $superEvent
     */
    public function setSuperEvent(?Event $superEvent) : void
    {
        $this->superEvent = $superEvent;
    }
    /**
     * @return Event|null
     */
    public function getSuperEvent() : ?Event
    {
        return $this->superEvent;
    }
    /**
     * @param Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered
     */
    public function setItemOffered($itemOffered) : void
    {
        $this->itemOffered = $itemOffered;
    }
    /**
     * @return Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
     */
    public function getItemOffered()
    {
        return $this->itemOffered;
    }
    /**
     * @param Offer|Demand|null $offers
     */
    public function setOffers($offers) : void
    {
        $this->offers = $offers;
    }
    /**
     * @return Offer|Demand|null
     */
    public function getOffers()
    {
        return $this->offers;
    }
    /**
     * @param Event|CreativeWork|null $recordedAt
     */
    public function setRecordedAt($recordedAt) : void
    {
        $this->recordedAt = $recordedAt;
    }
    /**
     * @return Event|CreativeWork|null
     */
    public function getRecordedAt()
    {
        return $this->recordedAt;
    }
}
