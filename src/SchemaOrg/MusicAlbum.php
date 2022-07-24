<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A collection of music tracks.')]
class MusicAlbum extends MusicPlaylist implements \JsonSerializable
{
    protected ?MusicAlbumProductionType $albumProductionType = null;
    protected MusicGroup|Person|null $byArtist = null;
    protected ?MusicAlbumReleaseType $albumReleaseType = null;
    protected MusicAlbum|MusicRelease|null $releaseOf = null;
    public function setAlbumProductionType(?MusicAlbumProductionType $albumProductionType) : void
    {
        $this->albumProductionType = $albumProductionType;
    }
    public function getAlbumProductionType() : ?MusicAlbumProductionType
    {
        return $this->albumProductionType;
    }
    public function setByArtist(MusicGroup|Person|null $byArtist) : void
    {
        $this->byArtist = $byArtist;
    }
    public function getByArtist() : MusicGroup|Person|null
    {
        return $this->byArtist;
    }
    public function setAlbumReleaseType(?MusicAlbumReleaseType $albumReleaseType) : void
    {
        $this->albumReleaseType = $albumReleaseType;
    }
    public function getAlbumReleaseType() : ?MusicAlbumReleaseType
    {
        return $this->albumReleaseType;
    }
    public function setReleaseOf(MusicAlbum|MusicRelease|null $releaseOf) : void
    {
        $this->releaseOf = $releaseOf;
    }
    public function getReleaseOf() : MusicAlbum|MusicRelease|null
    {
        return $this->releaseOf;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('albumProductionType' => $this->albumProductionType, 'byArtist' => $this->byArtist, 'albumReleaseType' => $this->albumReleaseType, 'releaseOf' => $this->releaseOf), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

