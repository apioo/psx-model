<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A collection of music tracks in playlist form.")
 */
class MusicPlaylist extends CreativeWork
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
}
