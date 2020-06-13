<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An over the air or online broadcast event.")
 */
class BroadcastEvent extends PublicationEvent
{
    /**
     * @var Event|null
     */
    protected $broadcastOfEvent;
    /**
     * @var string|null
     */
    protected $videoFormat;
    /**
     * @var bool|null
     */
    protected $isLiveBroadcast;
    /**
     * @param Event|null $broadcastOfEvent
     */
    public function setBroadcastOfEvent(?Event $broadcastOfEvent) : void
    {
        $this->broadcastOfEvent = $broadcastOfEvent;
    }
    /**
     * @return Event|null
     */
    public function getBroadcastOfEvent() : ?Event
    {
        return $this->broadcastOfEvent;
    }
    /**
     * @param string|null $videoFormat
     */
    public function setVideoFormat(?string $videoFormat) : void
    {
        $this->videoFormat = $videoFormat;
    }
    /**
     * @return string|null
     */
    public function getVideoFormat() : ?string
    {
        return $this->videoFormat;
    }
    /**
     * @param bool|null $isLiveBroadcast
     */
    public function setIsLiveBroadcast(?bool $isLiveBroadcast) : void
    {
        $this->isLiveBroadcast = $isLiveBroadcast;
    }
    /**
     * @return bool|null
     */
    public function getIsLiveBroadcast() : ?bool
    {
        return $this->isLiveBroadcast;
    }
}
