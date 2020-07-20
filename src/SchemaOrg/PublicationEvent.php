<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A PublicationEvent corresponds indifferently to the event of publication for a CreativeWork of any type e.g. a broadcast event, an on-demand event, a book/journal publication via a variety of delivery media.")
 */
class PublicationEvent extends Event implements \JsonSerializable
{
    /**
     * @var BroadcastService|null
     */
    protected $publishedOn;
    /**
     * @var bool|null
     */
    protected $isAccessibleForFree;
    /**
     * @param BroadcastService|null $publishedOn
     */
    public function setPublishedOn(?BroadcastService $publishedOn) : void
    {
        $this->publishedOn = $publishedOn;
    }
    /**
     * @return BroadcastService|null
     */
    public function getPublishedOn() : ?BroadcastService
    {
        return $this->publishedOn;
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
    public function jsonSerialize()
    {
        return (object) array_filter(array('publishedOn' => $this->publishedOn, 'isAccessibleForFree' => $this->isAccessibleForFree), static function ($value) : bool {
            return $value !== null;
        });
    }
}
