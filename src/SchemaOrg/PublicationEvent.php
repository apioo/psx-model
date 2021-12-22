<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A PublicationEvent corresponds indifferently to the event of publication for a CreativeWork of any type e.g. a broadcast event, an on-demand event, a book/journal publication via a variety of delivery media.')]
class PublicationEvent extends Event implements \JsonSerializable
{
    protected ?BroadcastService $publishedOn = null;
    protected ?bool $isAccessibleForFree = null;
    public function setPublishedOn(?BroadcastService $publishedOn) : void
    {
        $this->publishedOn = $publishedOn;
    }
    public function getPublishedOn() : ?BroadcastService
    {
        return $this->publishedOn;
    }
    public function setIsAccessibleForFree(?bool $isAccessibleForFree) : void
    {
        $this->isAccessibleForFree = $isAccessibleForFree;
    }
    public function getIsAccessibleForFree() : ?bool
    {
        return $this->isAccessibleForFree;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('publishedOn' => $this->publishedOn, 'isAccessibleForFree' => $this->isAccessibleForFree), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

