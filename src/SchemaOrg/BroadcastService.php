<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A delivery service through which content is provided via broadcast over the air or online.")
 */
class BroadcastService extends Service
{
    /**
     * @var string|null
     */
    protected $broadcastDisplayName;
    /**
     * @var string|Language|null
     */
    protected $inLanguage;
    /**
     * @var Organization|null
     */
    protected $broadcastAffiliateOf;
    /**
     * @var string|null
     */
    protected $broadcastTimezone;
    /**
     * @var BroadcastService|null
     */
    protected $parentService;
    /**
     * @var string|null
     */
    protected $videoFormat;
    /**
     * @var Organization|null
     */
    protected $broadcaster;
    /**
     * @var string|BroadcastFrequencySpecification|null
     */
    protected $broadcastFrequency;
    /**
     * @var BroadcastService|BroadcastChannel|null
     */
    protected $providesBroadcastService;
    /**
     * @param string|null $broadcastDisplayName
     */
    public function setBroadcastDisplayName(?string $broadcastDisplayName) : void
    {
        $this->broadcastDisplayName = $broadcastDisplayName;
    }
    /**
     * @return string|null
     */
    public function getBroadcastDisplayName() : ?string
    {
        return $this->broadcastDisplayName;
    }
    /**
     * @param string|Language|null $inLanguage
     */
    public function setInLanguage($inLanguage) : void
    {
        $this->inLanguage = $inLanguage;
    }
    /**
     * @return string|Language|null
     */
    public function getInLanguage()
    {
        return $this->inLanguage;
    }
    /**
     * @param Organization|null $broadcastAffiliateOf
     */
    public function setBroadcastAffiliateOf(?Organization $broadcastAffiliateOf) : void
    {
        $this->broadcastAffiliateOf = $broadcastAffiliateOf;
    }
    /**
     * @return Organization|null
     */
    public function getBroadcastAffiliateOf() : ?Organization
    {
        return $this->broadcastAffiliateOf;
    }
    /**
     * @param string|null $broadcastTimezone
     */
    public function setBroadcastTimezone(?string $broadcastTimezone) : void
    {
        $this->broadcastTimezone = $broadcastTimezone;
    }
    /**
     * @return string|null
     */
    public function getBroadcastTimezone() : ?string
    {
        return $this->broadcastTimezone;
    }
    /**
     * @param BroadcastService|null $parentService
     */
    public function setParentService(?BroadcastService $parentService) : void
    {
        $this->parentService = $parentService;
    }
    /**
     * @return BroadcastService|null
     */
    public function getParentService() : ?BroadcastService
    {
        return $this->parentService;
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
     * @param Organization|null $broadcaster
     */
    public function setBroadcaster(?Organization $broadcaster) : void
    {
        $this->broadcaster = $broadcaster;
    }
    /**
     * @return Organization|null
     */
    public function getBroadcaster() : ?Organization
    {
        return $this->broadcaster;
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
     * @param BroadcastService|BroadcastChannel|null $providesBroadcastService
     */
    public function setProvidesBroadcastService($providesBroadcastService) : void
    {
        $this->providesBroadcastService = $providesBroadcastService;
    }
    /**
     * @return BroadcastService|BroadcastChannel|null
     */
    public function getProvidesBroadcastService()
    {
        return $this->providesBroadcastService;
    }
}
