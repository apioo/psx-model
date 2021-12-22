<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A MusicRelease is a specific release of a music album.')]
class MusicRelease extends MusicPlaylist implements \JsonSerializable
{
    protected ?Organization $recordLabel = null;
    protected ?MusicReleaseFormatType $musicReleaseFormat = null;
    protected ?string $catalogNumber = null;
    protected Organization|Person|null $creditedTo = null;
    protected ?Duration $duration = null;
    protected ?MusicAlbum $releaseOf = null;
    public function setRecordLabel(?Organization $recordLabel) : void
    {
        $this->recordLabel = $recordLabel;
    }
    public function getRecordLabel() : ?Organization
    {
        return $this->recordLabel;
    }
    public function setMusicReleaseFormat(?MusicReleaseFormatType $musicReleaseFormat) : void
    {
        $this->musicReleaseFormat = $musicReleaseFormat;
    }
    public function getMusicReleaseFormat() : ?MusicReleaseFormatType
    {
        return $this->musicReleaseFormat;
    }
    public function setCatalogNumber(?string $catalogNumber) : void
    {
        $this->catalogNumber = $catalogNumber;
    }
    public function getCatalogNumber() : ?string
    {
        return $this->catalogNumber;
    }
    public function setCreditedTo(Organization|Person|null $creditedTo) : void
    {
        $this->creditedTo = $creditedTo;
    }
    public function getCreditedTo() : Organization|Person|null
    {
        return $this->creditedTo;
    }
    public function setDuration(?Duration $duration) : void
    {
        $this->duration = $duration;
    }
    public function getDuration() : ?Duration
    {
        return $this->duration;
    }
    public function setReleaseOf(?MusicAlbum $releaseOf) : void
    {
        $this->releaseOf = $releaseOf;
    }
    public function getReleaseOf() : ?MusicAlbum
    {
        return $this->releaseOf;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('recordLabel' => $this->recordLabel, 'musicReleaseFormat' => $this->musicReleaseFormat, 'catalogNumber' => $this->catalogNumber, 'creditedTo' => $this->creditedTo, 'duration' => $this->duration, 'releaseOf' => $this->releaseOf), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

