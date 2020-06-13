<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A MusicRelease is a specific release of a music album.")
 */
class MusicRelease extends MusicPlaylist
{
    /**
     * @var Organization|null
     */
    protected $recordLabel;
    /**
     * @var MusicReleaseFormatType|null
     */
    protected $musicReleaseFormat;
    /**
     * @var string|null
     */
    protected $catalogNumber;
    /**
     * @var Organization|Person|null
     */
    protected $creditedTo;
    /**
     * @var Duration|null
     */
    protected $duration;
    /**
     * @var MusicAlbum|null
     */
    protected $releaseOf;
    /**
     * @param Organization|null $recordLabel
     */
    public function setRecordLabel(?Organization $recordLabel) : void
    {
        $this->recordLabel = $recordLabel;
    }
    /**
     * @return Organization|null
     */
    public function getRecordLabel() : ?Organization
    {
        return $this->recordLabel;
    }
    /**
     * @param MusicReleaseFormatType|null $musicReleaseFormat
     */
    public function setMusicReleaseFormat(?MusicReleaseFormatType $musicReleaseFormat) : void
    {
        $this->musicReleaseFormat = $musicReleaseFormat;
    }
    /**
     * @return MusicReleaseFormatType|null
     */
    public function getMusicReleaseFormat() : ?MusicReleaseFormatType
    {
        return $this->musicReleaseFormat;
    }
    /**
     * @param string|null $catalogNumber
     */
    public function setCatalogNumber(?string $catalogNumber) : void
    {
        $this->catalogNumber = $catalogNumber;
    }
    /**
     * @return string|null
     */
    public function getCatalogNumber() : ?string
    {
        return $this->catalogNumber;
    }
    /**
     * @param Organization|Person|null $creditedTo
     */
    public function setCreditedTo($creditedTo) : void
    {
        $this->creditedTo = $creditedTo;
    }
    /**
     * @return Organization|Person|null
     */
    public function getCreditedTo()
    {
        return $this->creditedTo;
    }
    /**
     * @param Duration|null $duration
     */
    public function setDuration(?Duration $duration) : void
    {
        $this->duration = $duration;
    }
    /**
     * @return Duration|null
     */
    public function getDuration() : ?Duration
    {
        return $this->duration;
    }
    /**
     * @param MusicAlbum|null $releaseOf
     */
    public function setReleaseOf(?MusicAlbum $releaseOf) : void
    {
        $this->releaseOf = $releaseOf;
    }
    /**
     * @return MusicAlbum|null
     */
    public function getReleaseOf() : ?MusicAlbum
    {
        return $this->releaseOf;
    }
}
