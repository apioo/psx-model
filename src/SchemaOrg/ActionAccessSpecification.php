<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A set of requirements that a must be fulfilled in order to perform an Action.')]
class ActionAccessSpecification extends Intangible implements \JsonSerializable
{
    protected string|GeoShape|Place|null $eligibleRegion = null;
    protected ?Offer $expectsAcceptanceOf = null;
    protected \PSX\Uri\Uri|Thing|string|null $category = null;
    protected \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null $availabilityStarts = null;
    protected \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null $availabilityEnds = null;
    protected bool|MediaSubscription|null $requiresSubscription = null;
    public function setEligibleRegion(string|GeoShape|Place|null $eligibleRegion) : void
    {
        $this->eligibleRegion = $eligibleRegion;
    }
    public function getEligibleRegion() : string|GeoShape|Place|null
    {
        return $this->eligibleRegion;
    }
    public function setExpectsAcceptanceOf(?Offer $expectsAcceptanceOf) : void
    {
        $this->expectsAcceptanceOf = $expectsAcceptanceOf;
    }
    public function getExpectsAcceptanceOf() : ?Offer
    {
        return $this->expectsAcceptanceOf;
    }
    public function setCategory(\PSX\Uri\Uri|Thing|string|null $category) : void
    {
        $this->category = $category;
    }
    public function getCategory() : \PSX\Uri\Uri|Thing|string|null
    {
        return $this->category;
    }
    public function setAvailabilityStarts(\DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null $availabilityStarts) : void
    {
        $this->availabilityStarts = $availabilityStarts;
    }
    public function getAvailabilityStarts() : \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null
    {
        return $this->availabilityStarts;
    }
    public function setAvailabilityEnds(\DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null $availabilityEnds) : void
    {
        $this->availabilityEnds = $availabilityEnds;
    }
    public function getAvailabilityEnds() : \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null
    {
        return $this->availabilityEnds;
    }
    public function setRequiresSubscription(bool|MediaSubscription|null $requiresSubscription) : void
    {
        $this->requiresSubscription = $requiresSubscription;
    }
    public function getRequiresSubscription() : bool|MediaSubscription|null
    {
        return $this->requiresSubscription;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('eligibleRegion' => $this->eligibleRegion, 'expectsAcceptanceOf' => $this->expectsAcceptanceOf, 'category' => $this->category, 'availabilityStarts' => $this->availabilityStarts, 'availabilityEnds' => $this->availabilityEnds, 'requiresSubscription' => $this->requiresSubscription), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

