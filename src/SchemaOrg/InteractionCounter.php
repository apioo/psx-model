<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A summary of how users have interacted with this CreativeWork. In most cases, authors will use a subtype to specify the specific type of interaction.")
 */
class InteractionCounter extends StructuredValue implements \JsonSerializable
{
    /**
     * @var int|null
     */
    protected $userInteractionCount;
    /**
     * @var WebSite|SoftwareApplication|null
     */
    protected $interactionService;
    /**
     * @var Action|null
     */
    protected $interactionType;
    /**
     * @param int|null $userInteractionCount
     */
    public function setUserInteractionCount(?int $userInteractionCount) : void
    {
        $this->userInteractionCount = $userInteractionCount;
    }
    /**
     * @return int|null
     */
    public function getUserInteractionCount() : ?int
    {
        return $this->userInteractionCount;
    }
    /**
     * @param WebSite|SoftwareApplication|null $interactionService
     */
    public function setInteractionService($interactionService) : void
    {
        $this->interactionService = $interactionService;
    }
    /**
     * @return WebSite|SoftwareApplication|null
     */
    public function getInteractionService()
    {
        return $this->interactionService;
    }
    /**
     * @param Action|null $interactionType
     */
    public function setInteractionType(?Action $interactionType) : void
    {
        $this->interactionType = $interactionType;
    }
    /**
     * @return Action|null
     */
    public function getInteractionType() : ?Action
    {
        return $this->interactionType;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('userInteractionCount' => $this->userInteractionCount, 'interactionService' => $this->interactionService, 'interactionType' => $this->interactionType), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
