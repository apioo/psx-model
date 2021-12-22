<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A unique instance of a BroadcastService on a CableOrSatelliteService lineup.')]
class BroadcastChannel extends Intangible implements \JsonSerializable
{
    protected ?string $broadcastServiceTier = null;
    protected ?CableOrSatelliteService $inBroadcastLineup = null;
    protected \PSX\Uri\Uri|string|null $genre = null;
    protected ?string $broadcastChannelId = null;
    protected string|BroadcastFrequencySpecification|null $broadcastFrequency = null;
    protected ?BroadcastService $providesBroadcastService = null;
    public function setBroadcastServiceTier(?string $broadcastServiceTier) : void
    {
        $this->broadcastServiceTier = $broadcastServiceTier;
    }
    public function getBroadcastServiceTier() : ?string
    {
        return $this->broadcastServiceTier;
    }
    public function setInBroadcastLineup(?CableOrSatelliteService $inBroadcastLineup) : void
    {
        $this->inBroadcastLineup = $inBroadcastLineup;
    }
    public function getInBroadcastLineup() : ?CableOrSatelliteService
    {
        return $this->inBroadcastLineup;
    }
    public function setGenre(\PSX\Uri\Uri|string|null $genre) : void
    {
        $this->genre = $genre;
    }
    public function getGenre() : \PSX\Uri\Uri|string|null
    {
        return $this->genre;
    }
    public function setBroadcastChannelId(?string $broadcastChannelId) : void
    {
        $this->broadcastChannelId = $broadcastChannelId;
    }
    public function getBroadcastChannelId() : ?string
    {
        return $this->broadcastChannelId;
    }
    public function setBroadcastFrequency(string|BroadcastFrequencySpecification|null $broadcastFrequency) : void
    {
        $this->broadcastFrequency = $broadcastFrequency;
    }
    public function getBroadcastFrequency() : string|BroadcastFrequencySpecification|null
    {
        return $this->broadcastFrequency;
    }
    public function setProvidesBroadcastService(?BroadcastService $providesBroadcastService) : void
    {
        $this->providesBroadcastService = $providesBroadcastService;
    }
    public function getProvidesBroadcastService() : ?BroadcastService
    {
        return $this->providesBroadcastService;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('broadcastServiceTier' => $this->broadcastServiceTier, 'inBroadcastLineup' => $this->inBroadcastLineup, 'genre' => $this->genre, 'broadcastChannelId' => $this->broadcastChannelId, 'broadcastFrequency' => $this->broadcastFrequency, 'providesBroadcastService' => $this->providesBroadcastService), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

