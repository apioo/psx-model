<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of ingesting information/resources/food.")
 */
class ConsumeAction extends Action implements \JsonSerializable
{
    /**
     * @var ActionAccessSpecification|null
     */
    protected $actionAccessibilityRequirement;
    /**
     * @var Offer|null
     */
    protected $expectsAcceptanceOf;
    /**
     * @param ActionAccessSpecification|null $actionAccessibilityRequirement
     */
    public function setActionAccessibilityRequirement(?ActionAccessSpecification $actionAccessibilityRequirement) : void
    {
        $this->actionAccessibilityRequirement = $actionAccessibilityRequirement;
    }
    /**
     * @return ActionAccessSpecification|null
     */
    public function getActionAccessibilityRequirement() : ?ActionAccessSpecification
    {
        return $this->actionAccessibilityRequirement;
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
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('actionAccessibilityRequirement' => $this->actionAccessibilityRequirement, 'expectsAcceptanceOf' => $this->expectsAcceptanceOf), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
