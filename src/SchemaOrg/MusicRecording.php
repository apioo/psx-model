<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A music recording (track), usually a single song.')]
class MusicRecording extends CreativeWork implements \JsonSerializable
{
    protected MusicGroup|Person|null $byArtist = null;
    protected ?string $isrcCode = null;
    protected ?MusicAlbum $inAlbum = null;
    protected ?MusicPlaylist $inPlaylist = null;
    protected ?Duration $duration = null;
    protected ?MusicComposition $recordingOf = null;
    public function setByArtist(MusicGroup|Person|null $byArtist) : void
    {
        $this->byArtist = $byArtist;
    }
    public function getByArtist() : MusicGroup|Person|null
    {
        return $this->byArtist;
    }
    public function setIsrcCode(?string $isrcCode) : void
    {
        $this->isrcCode = $isrcCode;
    }
    public function getIsrcCode() : ?string
    {
        return $this->isrcCode;
    }
    public function setInAlbum(?MusicAlbum $inAlbum) : void
    {
        $this->inAlbum = $inAlbum;
    }
    public function getInAlbum() : ?MusicAlbum
    {
        return $this->inAlbum;
    }
    public function setInPlaylist(?MusicPlaylist $inPlaylist) : void
    {
        $this->inPlaylist = $inPlaylist;
    }
    public function getInPlaylist() : ?MusicPlaylist
    {
        return $this->inPlaylist;
    }
    public function setDuration(?Duration $duration) : void
    {
        $this->duration = $duration;
    }
    public function getDuration() : ?Duration
    {
        return $this->duration;
    }
    public function setRecordingOf(?MusicComposition $recordingOf) : void
    {
        $this->recordingOf = $recordingOf;
    }
    public function getRecordingOf() : ?MusicComposition
    {
        return $this->recordingOf;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('byArtist' => $this->byArtist, 'isrcCode' => $this->isrcCode, 'inAlbum' => $this->inAlbum, 'inPlaylist' => $this->inPlaylist, 'duration' => $this->duration, 'recordingOf' => $this->recordingOf), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

