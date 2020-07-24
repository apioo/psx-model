<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A music recording (track), usually a single song.")
 */
class MusicRecording extends CreativeWork implements \JsonSerializable
{
    /**
     * @var MusicGroup|Person|null
     */
    protected $byArtist;
    /**
     * @var string|null
     */
    protected $isrcCode;
    /**
     * @var MusicAlbum|null
     */
    protected $inAlbum;
    /**
     * @var MusicPlaylist|null
     */
    protected $inPlaylist;
    /**
     * @var Duration|null
     */
    protected $duration;
    /**
     * @var MusicComposition|null
     */
    protected $recordingOf;
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
     * @param string|null $isrcCode
     */
    public function setIsrcCode(?string $isrcCode) : void
    {
        $this->isrcCode = $isrcCode;
    }
    /**
     * @return string|null
     */
    public function getIsrcCode() : ?string
    {
        return $this->isrcCode;
    }
    /**
     * @param MusicAlbum|null $inAlbum
     */
    public function setInAlbum(?MusicAlbum $inAlbum) : void
    {
        $this->inAlbum = $inAlbum;
    }
    /**
     * @return MusicAlbum|null
     */
    public function getInAlbum() : ?MusicAlbum
    {
        return $this->inAlbum;
    }
    /**
     * @param MusicPlaylist|null $inPlaylist
     */
    public function setInPlaylist(?MusicPlaylist $inPlaylist) : void
    {
        $this->inPlaylist = $inPlaylist;
    }
    /**
     * @return MusicPlaylist|null
     */
    public function getInPlaylist() : ?MusicPlaylist
    {
        return $this->inPlaylist;
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
     * @param MusicComposition|null $recordingOf
     */
    public function setRecordingOf(?MusicComposition $recordingOf) : void
    {
        $this->recordingOf = $recordingOf;
    }
    /**
     * @return MusicComposition|null
     */
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
