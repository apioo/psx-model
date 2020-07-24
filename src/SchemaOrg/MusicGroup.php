<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A musical group, such as a band, an orchestra, or a choir. Can also be a solo musician.")
 */
class MusicGroup extends PerformingGroup implements \JsonSerializable
{
    /**
     * @var ItemList|MusicRecording|null
     */
    protected $track;
    /**
     * @var MusicAlbum|null
     */
    protected $album;
    /**
     * @var \PSX\Uri\Uri|string|null
     */
    protected $genre;
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
    /**
     * @param MusicAlbum|null $album
     */
    public function setAlbum(?MusicAlbum $album) : void
    {
        $this->album = $album;
    }
    /**
     * @return MusicAlbum|null
     */
    public function getAlbum() : ?MusicAlbum
    {
        return $this->album;
    }
    /**
     * @param \PSX\Uri\Uri|string|null $genre
     */
    public function setGenre($genre) : void
    {
        $this->genre = $genre;
    }
    /**
     * @return \PSX\Uri\Uri|string|null
     */
    public function getGenre()
    {
        return $this->genre;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('track' => $this->track, 'album' => $this->album, 'genre' => $this->genre), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
