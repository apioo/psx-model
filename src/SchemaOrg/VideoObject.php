<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A video file.")
 */
class VideoObject extends MediaObject implements \JsonSerializable
{
    /**
     * @var ImageObject|null
     */
    protected $thumbnail;
    /**
     * @var string|null
     */
    protected $videoFrameSize;
    /**
     * @var Person|MusicGroup|null
     */
    protected $musicBy;
    /**
     * @var Person|null
     */
    protected $actor;
    /**
     * @var string|null
     */
    protected $videoQuality;
    /**
     * @var string|MediaObject|null
     */
    protected $caption;
    /**
     * @var Person|null
     */
    protected $director;
    /**
     * @var string|null
     */
    protected $transcript;
    /**
     * @param ImageObject|null $thumbnail
     */
    public function setThumbnail(?ImageObject $thumbnail) : void
    {
        $this->thumbnail = $thumbnail;
    }
    /**
     * @return ImageObject|null
     */
    public function getThumbnail() : ?ImageObject
    {
        return $this->thumbnail;
    }
    /**
     * @param string|null $videoFrameSize
     */
    public function setVideoFrameSize(?string $videoFrameSize) : void
    {
        $this->videoFrameSize = $videoFrameSize;
    }
    /**
     * @return string|null
     */
    public function getVideoFrameSize() : ?string
    {
        return $this->videoFrameSize;
    }
    /**
     * @param Person|MusicGroup|null $musicBy
     */
    public function setMusicBy($musicBy) : void
    {
        $this->musicBy = $musicBy;
    }
    /**
     * @return Person|MusicGroup|null
     */
    public function getMusicBy()
    {
        return $this->musicBy;
    }
    /**
     * @param Person|null $actor
     */
    public function setActor(?Person $actor) : void
    {
        $this->actor = $actor;
    }
    /**
     * @return Person|null
     */
    public function getActor() : ?Person
    {
        return $this->actor;
    }
    /**
     * @param string|null $videoQuality
     */
    public function setVideoQuality(?string $videoQuality) : void
    {
        $this->videoQuality = $videoQuality;
    }
    /**
     * @return string|null
     */
    public function getVideoQuality() : ?string
    {
        return $this->videoQuality;
    }
    /**
     * @param string|MediaObject|null $caption
     */
    public function setCaption($caption) : void
    {
        $this->caption = $caption;
    }
    /**
     * @return string|MediaObject|null
     */
    public function getCaption()
    {
        return $this->caption;
    }
    /**
     * @param Person|null $director
     */
    public function setDirector(?Person $director) : void
    {
        $this->director = $director;
    }
    /**
     * @return Person|null
     */
    public function getDirector() : ?Person
    {
        return $this->director;
    }
    /**
     * @param string|null $transcript
     */
    public function setTranscript(?string $transcript) : void
    {
        $this->transcript = $transcript;
    }
    /**
     * @return string|null
     */
    public function getTranscript() : ?string
    {
        return $this->transcript;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('thumbnail' => $this->thumbnail, 'videoFrameSize' => $this->videoFrameSize, 'musicBy' => $this->musicBy, 'actor' => $this->actor, 'videoQuality' => $this->videoQuality, 'caption' => $this->caption, 'director' => $this->director, 'transcript' => $this->transcript), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
