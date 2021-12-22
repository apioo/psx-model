<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A video file.')]
class VideoObject extends MediaObject implements \JsonSerializable
{
    protected ?ImageObject $thumbnail = null;
    protected ?string $videoFrameSize = null;
    protected Person|MusicGroup|null $musicBy = null;
    protected ?Person $actor = null;
    protected ?string $videoQuality = null;
    protected string|MediaObject|null $caption = null;
    protected ?Person $director = null;
    protected ?string $transcript = null;
    public function setThumbnail(?ImageObject $thumbnail) : void
    {
        $this->thumbnail = $thumbnail;
    }
    public function getThumbnail() : ?ImageObject
    {
        return $this->thumbnail;
    }
    public function setVideoFrameSize(?string $videoFrameSize) : void
    {
        $this->videoFrameSize = $videoFrameSize;
    }
    public function getVideoFrameSize() : ?string
    {
        return $this->videoFrameSize;
    }
    public function setMusicBy(Person|MusicGroup|null $musicBy) : void
    {
        $this->musicBy = $musicBy;
    }
    public function getMusicBy() : Person|MusicGroup|null
    {
        return $this->musicBy;
    }
    public function setActor(?Person $actor) : void
    {
        $this->actor = $actor;
    }
    public function getActor() : ?Person
    {
        return $this->actor;
    }
    public function setVideoQuality(?string $videoQuality) : void
    {
        $this->videoQuality = $videoQuality;
    }
    public function getVideoQuality() : ?string
    {
        return $this->videoQuality;
    }
    public function setCaption(string|MediaObject|null $caption) : void
    {
        $this->caption = $caption;
    }
    public function getCaption() : string|MediaObject|null
    {
        return $this->caption;
    }
    public function setDirector(?Person $director) : void
    {
        $this->director = $director;
    }
    public function getDirector() : ?Person
    {
        return $this->director;
    }
    public function setTranscript(?string $transcript) : void
    {
        $this->transcript = $transcript;
    }
    public function getTranscript() : ?string
    {
        return $this->transcript;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('thumbnail' => $this->thumbnail, 'videoFrameSize' => $this->videoFrameSize, 'musicBy' => $this->musicBy, 'actor' => $this->actor, 'videoQuality' => $this->videoQuality, 'caption' => $this->caption, 'director' => $this->director, 'transcript' => $this->transcript), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

