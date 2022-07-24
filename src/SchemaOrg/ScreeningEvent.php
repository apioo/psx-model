<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A screening of a movie or other video.')]
class ScreeningEvent extends Event implements \JsonSerializable
{
    protected ?CreativeWork $workFeatured = null;
    protected ?string $videoFormat = null;
    public function setWorkFeatured(?CreativeWork $workFeatured) : void
    {
        $this->workFeatured = $workFeatured;
    }
    public function getWorkFeatured() : ?CreativeWork
    {
        return $this->workFeatured;
    }
    public function setVideoFormat(?string $videoFormat) : void
    {
        $this->videoFormat = $videoFormat;
    }
    public function getVideoFormat() : ?string
    {
        return $this->videoFormat;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('workFeatured' => $this->workFeatured, 'videoFormat' => $this->videoFormat), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

