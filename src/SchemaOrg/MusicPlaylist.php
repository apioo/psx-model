<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A collection of music tracks in playlist form.')]
class MusicPlaylist extends CreativeWork implements \JsonSerializable
{
    protected ?int $numTracks = null;
    protected ItemList|MusicRecording|null $track = null;
    public function setNumTracks(?int $numTracks) : void
    {
        $this->numTracks = $numTracks;
    }
    public function getNumTracks() : ?int
    {
        return $this->numTracks;
    }
    public function setTrack(ItemList|MusicRecording|null $track) : void
    {
        $this->track = $track;
    }
    public function getTrack() : ItemList|MusicRecording|null
    {
        return $this->track;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('numTracks' => $this->numTracks, 'track' => $this->track), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

