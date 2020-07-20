<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A collection of music tracks.")
 */
class MusicAlbum extends MusicPlaylist implements \JsonSerializable
{
    /**
     * @var MusicAlbumProductionType|null
     */
    protected $albumProductionType;
    /**
     * @var MusicGroup|Person|null
     */
    protected $byArtist;
    /**
     * @var MusicAlbumReleaseType|null
     */
    protected $albumReleaseType;
    /**
     * @var MusicAlbum|MusicRelease|null
     */
    protected $releaseOf;
    /**
     * @param MusicAlbumProductionType|null $albumProductionType
     */
    public function setAlbumProductionType(?MusicAlbumProductionType $albumProductionType) : void
    {
        $this->albumProductionType = $albumProductionType;
    }
    /**
     * @return MusicAlbumProductionType|null
     */
    public function getAlbumProductionType() : ?MusicAlbumProductionType
    {
        return $this->albumProductionType;
    }
    /**
     * @param MusicGroup|Person|null $byArtist
     */
    public function setByArtist($byArtist) : void
    {
        $this->byArtist = $byArtist;
    }
    /**
     * @return MusicGroup|Person|null
     */
    public function getByArtist()
    {
        return $this->byArtist;
    }
    /**
     * @param MusicAlbumReleaseType|null $albumReleaseType
     */
    public function setAlbumReleaseType(?MusicAlbumReleaseType $albumReleaseType) : void
    {
        $this->albumReleaseType = $albumReleaseType;
    }
    /**
     * @return MusicAlbumReleaseType|null
     */
    public function getAlbumReleaseType() : ?MusicAlbumReleaseType
    {
        return $this->albumReleaseType;
    }
    /**
     * @param MusicAlbum|MusicRelease|null $releaseOf
     */
    public function setReleaseOf($releaseOf) : void
    {
        $this->releaseOf = $releaseOf;
    }
    /**
     * @return MusicAlbum|MusicRelease|null
     */
    public function getReleaseOf()
    {
        return $this->releaseOf;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('albumProductionType' => $this->albumProductionType, 'byArtist' => $this->byArtist, 'albumReleaseType' => $this->albumReleaseType, 'releaseOf' => $this->releaseOf), static function ($value) : bool {
            return $value !== null;
        });
    }
}
