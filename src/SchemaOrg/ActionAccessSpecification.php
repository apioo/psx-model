<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A set of requirements that a must be fulfilled in order to perform an Action.")
 */
class ActionAccessSpecification extends Intangible implements \JsonSerializable
{
    /**
     * @var string|GeoShape|Place|null
     */
    protected $eligibleRegion;
    /**
     * @var Offer|null
     */
    protected $expectsAcceptanceOf;
    /**
     * @var \PSX\Uri\Uri|Thing|string|null
     */
    protected $category;
    /**
     * @var \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null
     */
    protected $availabilityStarts;
    /**
     * @var \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null
     */
    protected $availabilityEnds;
    /**
     * @var bool|MediaSubscription|null
     */
    protected $requiresSubscription;
    /**
     * @param string|GeoShape|Place|null $eligibleRegion
     */
    public function setEligibleRegion($eligibleRegion) : void
    {
        $this->eligibleRegion = $eligibleRegion;
    }
    /**
     * @return string|GeoShape|Place|null
     */
    public function getEligibleRegion()
    {
        return $this->eligibleRegion;
    }
    /**
     * @param Offer|null $expectsAcceptanceOf
     */
    public function setExpectsAcceptanceOf(?Offer $expectsAcceptanceOf) : void
    {
        $this->expectsAcceptanceOf = $expectsAcceptanceOf;
    }
    /**
     * @return Offer|null
     */
    public function getExpectsAcceptanceOf() : ?Offer
    {
        return $this->expectsAcceptanceOf;
    }
    /**
     * @param \PSX\Uri\Uri|Thing|string|null $category
     */
    public function setCategory($category) : void
    {
        $this->category = $category;
    }
    /**
     * @return \PSX\Uri\Uri|Thing|string|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @param \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null $availabilityStarts
     */
    public function setAvailabilityStarts($availabilityStarts) : void
    {
        $this->availabilityStarts = $availabilityStarts;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null
     */
    public function getAvailabilityStarts()
    {
        return $this->availabilityStarts;
    }
    /**
     * @param \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null $availabilityEnds
     */
    public function setAvailabilityEnds($availabilityEnds) : void
    {
        $this->availabilityEnds = $availabilityEnds;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Time|\PSX\DateTime\Date|null
     */
    public function getAvailabilityEnds()
    {
        return $this->availabilityEnds;
    }
    /**
     * @param bool|MediaSubscription|null $requiresSubscription
     */
    public function setRequiresSubscription($requiresSubscription) : void
    {
        $this->requiresSubscription = $requiresSubscription;
    }
    /**
     * @return bool|MediaSubscription|null
     */
    public function getRequiresSubscription()
    {
        return $this->requiresSubscription;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('eligibleRegion' => $this->eligibleRegion, 'expectsAcceptanceOf' => $this->expectsAcceptanceOf, 'category' => $this->category, 'availabilityStarts' => $this->availabilityStarts, 'availabilityEnds' => $this->availabilityEnds, 'requiresSubscription' => $this->requiresSubscription), static function ($value) : bool {
            return $value !== null;
        });
    }
}
