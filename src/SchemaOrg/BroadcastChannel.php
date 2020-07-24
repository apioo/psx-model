<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A unique instance of a BroadcastService on a CableOrSatelliteService lineup.")
 */
class BroadcastChannel extends Intangible implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $broadcastServiceTier;
    /**
     * @var CableOrSatelliteService|null
     */
    protected $inBroadcastLineup;
    /**
     * @var \PSX\Uri\Uri|string|null
     */
    protected $genre;
    /**
     * @var string|null
     */
    protected $broadcastChannelId;
    /**
     * @var string|BroadcastFrequencySpecification|null
     */
    protected $broadcastFrequency;
    /**
     * @var BroadcastService|null
     */
    protected $providesBroadcastService;
    /**
     * @param string|null $broadcastServiceTier
     */
    public function setBroadcastServiceTier(?string $broadcastServiceTier) : void
    {
        $this->broadcastServiceTier = $broadcastServiceTier;
    }
    /**
     * @return string|null
     */
    public function getBroadcastServiceTier() : ?string
    {
        return $this->broadcastServiceTier;
    }
    /**
     * @param CableOrSatelliteService|null $inBroadcastLineup
     */
    public function setInBroadcastLineup(?CableOrSatelliteService $inBroadcastLineup) : void
    {
        $this->inBroadcastLineup = $inBroadcastLineup;
    }
    /**
     * @return CableOrSatelliteService|null
     */
    public function getInBroadcastLineup() : ?CableOrSatelliteService
    {
        return $this->inBroadcastLineup;
    }
    /**
     * @param \PSX\Uri\Uri|string|null $genre
     */
    public function setGenre($genre) : void
    {
        $this->genre = $genre;
    }
    /**
     * @return \PSX\Uri\Uri|string|null
     */
    public function getGenre()
    {
        return $this->genre;
    }
    /**
     * @param string|null $broadcastChannelId
     */
    public function setBroadcastChannelId(?string $broadcastChannelId) : void
    {
        $this->broadcastChannelId = $broadcastChannelId;
    }
    /**
     * @return string|null
     */
    public function getBroadcastChannelId() : ?string
    {
        return $this->broadcastChannelId;
    }
    /**
     * @param string|BroadcastFrequencySpecification|null $broadcastFrequency
     */
    public function setBroadcastFrequency($broadcastFrequency) : void
    {
        $this->broadcastFrequency = $broadcastFrequency;
    }
    /**
     * @return string|BroadcastFrequencySpecification|null
     */
    public function getBroadcastFrequency()
    {
        return $this->broadcastFrequency;
    }
    /**
     * @param BroadcastService|null $providesBroadcastService
     */
    public function setProvidesBroadcastService(?BroadcastService $providesBroadcastService) : void
    {
        $this->providesBroadcastService = $providesBroadcastService;
    }
    /**
     * @return BroadcastService|null
     */
    public function getProvidesBroadcastService() : ?BroadcastService
    {
        return $this->providesBroadcastService;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('broadcastServiceTier' => $this->broadcastServiceTier, 'inBroadcastLineup' => $this->inBroadcastLineup, 'genre' => $this->genre, 'broadcastChannelId' => $this->broadcastChannelId, 'broadcastFrequency' => $this->broadcastFrequency, 'providesBroadcastService' => $this->providesBroadcastService), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
