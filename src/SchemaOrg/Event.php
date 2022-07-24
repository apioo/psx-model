<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An event happening at a certain time and location, such as a concert, lecture, or festival. Ticketing information may be added via the <a class="localLink" href="http://schema.org/offers">offers</a> property. Repeated events may be structured as separate Event objects.')]
class Event extends Thing implements \JsonSerializable
{
    protected ?Audience $audience = null;
    protected \PSX\DateTime\Date|\DateTime|null $endDate = null;
    protected ?int $remainingAttendeeCapacity = null;
    protected Person|Organization|null $sponsor = null;
    protected \DateTime|\PSX\DateTime\Date|null $startDate = null;
    protected string|PostalAddress|Place|null $location = null;
    protected Person|Organization|null $performer = null;
    protected ?string $typicalAgeRange = null;
    protected ?Person $actor = null;
    protected ?CreativeWork $workFeatured = null;
    protected ?AggregateRating $aggregateRating = null;
    protected string|Language|null $inLanguage = null;
    protected ?Review $review = null;
    protected \DateTime|\PSX\DateTime\Time|null $doorTime = null;
    protected Organization|Person|null $translator = null;
    protected ?EventStatusType $eventStatus = null;
    protected ?int $maximumAttendeeCapacity = null;
    protected Organization|Person|null $attendee = null;
    protected Person|Organization|null $organizer = null;
    protected ?bool $isAccessibleForFree = null;
    protected ?CreativeWork $workPerformed = null;
    protected ?Person $director = null;
    protected ?Event $subEvent = null;
    protected Organization|Person|null $composer = null;
    protected ?\PSX\DateTime\Date $previousStartDate = null;
    protected ?Duration $duration = null;
    protected Organization|Person|null $contributor = null;
    protected ?Thing $about = null;
    protected ?Event $superEvent = null;
    protected Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered = null;
    protected Offer|Demand|null $offers = null;
    protected Event|CreativeWork|null $recordedAt = null;
    public function setAudience(?Audience $audience) : void
    {
        $this->audience = $audience;
    }
    public function getAudience() : ?Audience
    {
        return $this->audience;
    }
    public function setEndDate(\PSX\DateTime\Date|\DateTime|null $endDate) : void
    {
        $this->endDate = $endDate;
    }
    public function getEndDate() : \PSX\DateTime\Date|\DateTime|null
    {
        return $this->endDate;
    }
    public function setRemainingAttendeeCapacity(?int $remainingAttendeeCapacity) : void
    {
        $this->remainingAttendeeCapacity = $remainingAttendeeCapacity;
    }
    public function getRemainingAttendeeCapacity() : ?int
    {
        return $this->remainingAttendeeCapacity;
    }
    public function setSponsor(Person|Organization|null $sponsor) : void
    {
        $this->sponsor = $sponsor;
    }
    public function getSponsor() : Person|Organization|null
    {
        return $this->sponsor;
    }
    public function setStartDate(\DateTime|\PSX\DateTime\Date|null $startDate) : void
    {
        $this->startDate = $startDate;
    }
    public function getStartDate() : \DateTime|\PSX\DateTime\Date|null
    {
        return $this->startDate;
    }
    public function setLocation(string|PostalAddress|Place|null $location) : void
    {
        $this->location = $location;
    }
    public function getLocation() : string|PostalAddress|Place|null
    {
        return $this->location;
    }
    public function setPerformer(Person|Organization|null $performer) : void
    {
        $this->performer = $performer;
    }
    public function getPerformer() : Person|Organization|null
    {
        return $this->performer;
    }
    public function setTypicalAgeRange(?string $typicalAgeRange) : void
    {
        $this->typicalAgeRange = $typicalAgeRange;
    }
    public function getTypicalAgeRange() : ?string
    {
        return $this->typicalAgeRange;
    }
    public function setActor(?Person $actor) : void
    {
        $this->actor = $actor;
    }
    public function getActor() : ?Person
    {
        return $this->actor;
    }
    public function setWorkFeatured(?CreativeWork $workFeatured) : void
    {
        $this->workFeatured = $workFeatured;
    }
    public function getWorkFeatured() : ?CreativeWork
    {
        return $this->workFeatured;
    }
    public function setAggregateRating(?AggregateRating $aggregateRating) : void
    {
        $this->aggregateRating = $aggregateRating;
    }
    public function getAggregateRating() : ?AggregateRating
    {
        return $this->aggregateRating;
    }
    public function setInLanguage(string|Language|null $inLanguage) : void
    {
        $this->inLanguage = $inLanguage;
    }
    public function getInLanguage() : string|Language|null
    {
        return $this->inLanguage;
    }
    public function setReview(?Review $review) : void
    {
        $this->review = $review;
    }
    public function getReview() : ?Review
    {
        return $this->review;
    }
    public function setDoorTime(\DateTime|\PSX\DateTime\Time|null $doorTime) : void
    {
        $this->doorTime = $doorTime;
    }
    public function getDoorTime() : \DateTime|\PSX\DateTime\Time|null
    {
        return $this->doorTime;
    }
    public function setTranslator(Organization|Person|null $translator) : void
    {
        $this->translator = $translator;
    }
    public function getTranslator() : Organization|Person|null
    {
        return $this->translator;
    }
    public function setEventStatus(?EventStatusType $eventStatus) : void
    {
        $this->eventStatus = $eventStatus;
    }
    public function getEventStatus() : ?EventStatusType
    {
        return $this->eventStatus;
    }
    public function setMaximumAttendeeCapacity(?int $maximumAttendeeCapacity) : void
    {
        $this->maximumAttendeeCapacity = $maximumAttendeeCapacity;
    }
    public function getMaximumAttendeeCapacity() : ?int
    {
        return $this->maximumAttendeeCapacity;
    }
    public function setAttendee(Organization|Person|null $attendee) : void
    {
        $this->attendee = $attendee;
    }
    public function getAttendee() : Organization|Person|null
    {
        return $this->attendee;
    }
    public function setOrganizer(Person|Organization|null $organizer) : void
    {
        $this->organizer = $organizer;
    }
    public function getOrganizer() : Person|Organization|null
    {
        return $this->organizer;
    }
    public function setIsAccessibleForFree(?bool $isAccessibleForFree) : void
    {
        $this->isAccessibleForFree = $isAccessibleForFree;
    }
    public function getIsAccessibleForFree() : ?bool
    {
        return $this->isAccessibleForFree;
    }
    public function setWorkPerformed(?CreativeWork $workPerformed) : void
    {
        $this->workPerformed = $workPerformed;
    }
    public function getWorkPerformed() : ?CreativeWork
    {
        return $this->workPerformed;
    }
    public function setDirector(?Person $director) : void
    {
        $this->director = $director;
    }
    public function getDirector() : ?Person
    {
        return $this->director;
    }
    public function setSubEvent(?Event $subEvent) : void
    {
        $this->subEvent = $subEvent;
    }
    public function getSubEvent() : ?Event
    {
        return $this->subEvent;
    }
    public function setComposer(Organization|Person|null $composer) : void
    {
        $this->composer = $composer;
    }
    public function getComposer() : Organization|Person|null
    {
        return $this->composer;
    }
    public function setPreviousStartDate(?\PSX\DateTime\Date $previousStartDate) : void
    {
        $this->previousStartDate = $previousStartDate;
    }
    public function getPreviousStartDate() : ?\PSX\DateTime\Date
    {
        return $this->previousStartDate;
    }
    public function setDuration(?Duration $duration) : void
    {
        $this->duration = $duration;
    }
    public function getDuration() : ?Duration
    {
        return $this->duration;
    }
    public function setContributor(Organization|Person|null $contributor) : void
    {
        $this->contributor = $contributor;
    }
    public function getContributor() : Organization|Person|null
    {
        return $this->contributor;
    }
    public function setAbout(?Thing $about) : void
    {
        $this->about = $about;
    }
    public function getAbout() : ?Thing
    {
        return $this->about;
    }
    public function setSuperEvent(?Event $superEvent) : void
    {
        $this->superEvent = $superEvent;
    }
    public function getSuperEvent() : ?Event
    {
        return $this->superEvent;
    }
    public function setItemOffered(Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered) : void
    {
        $this->itemOffered = $itemOffered;
    }
    public function getItemOffered() : Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
    {
        return $this->itemOffered;
    }
    public function setOffers(Offer|Demand|null $offers) : void
    {
        $this->offers = $offers;
    }
    public function getOffers() : Offer|Demand|null
    {
        return $this->offers;
    }
    public function setRecordedAt(Event|CreativeWork|null $recordedAt) : void
    {
        $this->recordedAt = $recordedAt;
    }
    public function getRecordedAt() : Event|CreativeWork|null
    {
        return $this->recordedAt;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('audience' => $this->audience, 'endDate' => $this->endDate, 'remainingAttendeeCapacity' => $this->remainingAttendeeCapacity, 'sponsor' => $this->sponsor, 'startDate' => $this->startDate, 'location' => $this->location, 'performer' => $this->performer, 'typicalAgeRange' => $this->typicalAgeRange, 'actor' => $this->actor, 'workFeatured' => $this->workFeatured, 'aggregateRating' => $this->aggregateRating, 'inLanguage' => $this->inLanguage, 'review' => $this->review, 'doorTime' => $this->doorTime, 'translator' => $this->translator, 'eventStatus' => $this->eventStatus, 'maximumAttendeeCapacity' => $this->maximumAttendeeCapacity, 'attendee' => $this->attendee, 'organizer' => $this->organizer, 'isAccessibleForFree' => $this->isAccessibleForFree, 'workPerformed' => $this->workPerformed, 'director' => $this->director, 'subEvent' => $this->subEvent, 'composer' => $this->composer, 'previousStartDate' => $this->previousStartDate, 'duration' => $this->duration, 'contributor' => $this->contributor, 'about' => $this->about, 'superEvent' => $this->superEvent, 'itemOffered' => $this->itemOffered, 'offers' => $this->offers, 'recordedAt' => $this->recordedAt), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

