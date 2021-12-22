<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A delivery service through which content is provided via broadcast over the air or online.')]
class BroadcastService extends Service implements \JsonSerializable
{
    protected ?string $broadcastDisplayName = null;
    protected string|Language|null $inLanguage = null;
    protected ?Organization $broadcastAffiliateOf = null;
    protected ?string $broadcastTimezone = null;
    protected ?BroadcastService $parentService = null;
    protected ?string $videoFormat = null;
    protected ?Organization $broadcaster = null;
    protected string|BroadcastFrequencySpecification|null $broadcastFrequency = null;
    protected BroadcastService|BroadcastChannel|null $providesBroadcastService = null;
    public function setBroadcastDisplayName(?string $broadcastDisplayName) : void
    {
        $this->broadcastDisplayName = $broadcastDisplayName;
    }
    public function getBroadcastDisplayName() : ?string
    {
        return $this->broadcastDisplayName;
    }
    public function setInLanguage(string|Language|null $inLanguage) : void
    {
        $this->inLanguage = $inLanguage;
    }
    public function getInLanguage() : string|Language|null
    {
        return $this->inLanguage;
    }
    public function setBroadcastAffiliateOf(?Organization $broadcastAffiliateOf) : void
    {
        $this->broadcastAffiliateOf = $broadcastAffiliateOf;
    }
    public function getBroadcastAffiliateOf() : ?Organization
    {
        return $this->broadcastAffiliateOf;
    }
    public function setBroadcastTimezone(?string $broadcastTimezone) : void
    {
        $this->broadcastTimezone = $broadcastTimezone;
    }
    public function getBroadcastTimezone() : ?string
    {
        return $this->broadcastTimezone;
    }
    public function setParentService(?BroadcastService $parentService) : void
    {
        $this->parentService = $parentService;
    }
    public function getParentService() : ?BroadcastService
    {
        return $this->parentService;
    }
    public function setVideoFormat(?string $videoFormat) : void
    {
        $this->videoFormat = $videoFormat;
    }
    public function getVideoFormat() : ?string
    {
        return $this->videoFormat;
    }
    public function setBroadcaster(?Organization $broadcaster) : void
    {
        $this->broadcaster = $broadcaster;
    }
    public function getBroadcaster() : ?Organization
    {
        return $this->broadcaster;
    }
    public function setBroadcastFrequency(string|BroadcastFrequencySpecification|null $broadcastFrequency) : void
    {
        $this->broadcastFrequency = $broadcastFrequency;
    }
    public function getBroadcastFrequency() : string|BroadcastFrequencySpecification|null
    {
        return $this->broadcastFrequency;
    }
    public function setProvidesBroadcastService(BroadcastService|BroadcastChannel|null $providesBroadcastService) : void
    {
        $this->providesBroadcastService = $providesBroadcastService;
    }
    public function getProvidesBroadcastService() : BroadcastService|BroadcastChannel|null
    {
        return $this->providesBroadcastService;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('broadcastDisplayName' => $this->broadcastDisplayName, 'inLanguage' => $this->inLanguage, 'broadcastAffiliateOf' => $this->broadcastAffiliateOf, 'broadcastTimezone' => $this->broadcastTimezone, 'parentService' => $this->parentService, 'videoFormat' => $this->videoFormat, 'broadcaster' => $this->broadcaster, 'broadcastFrequency' => $this->broadcastFrequency, 'providesBroadcastService' => $this->providesBroadcastService), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

