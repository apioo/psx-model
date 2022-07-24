<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A summary of how users have interacted with this CreativeWork. In most cases, authors will use a subtype to specify the specific type of interaction.')]
class InteractionCounter extends StructuredValue implements \JsonSerializable
{
    protected ?int $userInteractionCount = null;
    protected WebSite|SoftwareApplication|null $interactionService = null;
    protected ?Action $interactionType = null;
    public function setUserInteractionCount(?int $userInteractionCount) : void
    {
        $this->userInteractionCount = $userInteractionCount;
    }
    public function getUserInteractionCount() : ?int
    {
        return $this->userInteractionCount;
    }
    public function setInteractionService(WebSite|SoftwareApplication|null $interactionService) : void
    {
        $this->interactionService = $interactionService;
    }
    public function getInteractionService() : WebSite|SoftwareApplication|null
    {
        return $this->interactionService;
    }
    public function setInteractionType(?Action $interactionType) : void
    {
        $this->interactionType = $interactionType;
    }
    public function getInteractionType() : ?Action
    {
        return $this->interactionType;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('userInteractionCount' => $this->userInteractionCount, 'interactionService' => $this->interactionService, 'interactionType' => $this->interactionType), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

