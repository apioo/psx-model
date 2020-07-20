<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A collection of music tracks in playlist form.")
 */
class MusicPlaylist extends CreativeWork implements \JsonSerializable
{
    /**
     * @var int|null
     */
    protected $numTracks;
    /**
     * @var ItemList|MusicRecording|null
     */
    protected $track;
    /**
     * @param int|null $numTracks
     */
    public function setNumTracks(?int $numTracks) : void
    {
        $this->numTracks = $numTracks;
    }
    /**
     * @return int|null
     */
    public function getNumTracks() : ?int
    {
        return $this->numTracks;
    }
    /**
     * @param ItemList|MusicRecording|null $track
     */
    public function setTrack($track) : void
    {
        $this->track = $track;
    }
    /**
     * @return ItemList|MusicRecording|null
     */
    public function getTrack()
    {
        return $this->track;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('numTracks' => $this->numTracks, 'track' => $this->track), static function ($value) : bool {
            return $value !== null;
        });
    }
}
