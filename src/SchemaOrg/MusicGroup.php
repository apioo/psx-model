<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A musical group, such as a band, an orchestra, or a choir. Can also be a solo musician.')]
class MusicGroup extends PerformingGroup implements \JsonSerializable
{
    protected ItemList|MusicRecording|null $track = null;
    protected ?MusicAlbum $album = null;
    protected \PSX\Uri\Uri|string|null $genre = null;
    public function setTrack(ItemList|MusicRecording|null $track) : void
    {
        $this->track = $track;
    }
    public function getTrack() : ItemList|MusicRecording|null
    {
        return $this->track;
    }
    public function setAlbum(?MusicAlbum $album) : void
    {
        $this->album = $album;
    }
    public function getAlbum() : ?MusicAlbum
    {
        return $this->album;
    }
    public function setGenre(\PSX\Uri\Uri|string|null $genre) : void
    {
        $this->genre = $genre;
    }
    public function getGenre() : \PSX\Uri\Uri|string|null
    {
        return $this->genre;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('track' => $this->track, 'album' => $this->album, 'genre' => $this->genre), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

