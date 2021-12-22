<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of ingesting information/resources/food.')]
class ConsumeAction extends Action implements \JsonSerializable
{
    protected ?ActionAccessSpecification $actionAccessibilityRequirement = null;
    protected ?Offer $expectsAcceptanceOf = null;
    public function setActionAccessibilityRequirement(?ActionAccessSpecification $actionAccessibilityRequirement) : void
    {
        $this->actionAccessibilityRequirement = $actionAccessibilityRequirement;
    }
    public function getActionAccessibilityRequirement() : ?ActionAccessSpecification
    {
        return $this->actionAccessibilityRequirement;
    }
    public function setExpectsAcceptanceOf(?Offer $expectsAcceptanceOf) : void
    {
        $this->expectsAcceptanceOf = $expectsAcceptanceOf;
    }
    public function getExpectsAcceptanceOf() : ?Offer
    {
        return $this->expectsAcceptanceOf;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('actionAccessibilityRequirement' => $this->actionAccessibilityRequirement, 'expectsAcceptanceOf' => $this->expectsAcceptanceOf), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

