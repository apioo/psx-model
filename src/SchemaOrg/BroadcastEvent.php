<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An over the air or online broadcast event.')]
class BroadcastEvent extends PublicationEvent implements \JsonSerializable
{
    protected ?Event $broadcastOfEvent = null;
    protected ?string $videoFormat = null;
    protected ?bool $isLiveBroadcast = null;
    public function setBroadcastOfEvent(?Event $broadcastOfEvent) : void
    {
        $this->broadcastOfEvent = $broadcastOfEvent;
    }
    public function getBroadcastOfEvent() : ?Event
    {
        return $this->broadcastOfEvent;
    }
    public function setVideoFormat(?string $videoFormat) : void
    {
        $this->videoFormat = $videoFormat;
    }
    public function getVideoFormat() : ?string
    {
        return $this->videoFormat;
    }
    public function setIsLiveBroadcast(?bool $isLiveBroadcast) : void
    {
        $this->isLiveBroadcast = $isLiveBroadcast;
    }
    public function getIsLiveBroadcast() : ?bool
    {
        return $this->isLiveBroadcast;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('broadcastOfEvent' => $this->broadcastOfEvent, 'videoFormat' => $this->videoFormat, 'isLiveBroadcast' => $this->isLiveBroadcast), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

