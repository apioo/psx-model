<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A screening of a movie or other video.")
 */
class ScreeningEvent extends Event implements \JsonSerializable
{
    /**
     * @var CreativeWork|null
     */
    protected $workFeatured;
    /**
     * @var string|null
     */
    protected $videoFormat;
    /**
     * @param CreativeWork|null $workFeatured
     */
    public function setWorkFeatured(?CreativeWork $workFeatured) : void
    {
        $this->workFeatured = $workFeatured;
    }
    /**
     * @return CreativeWork|null
     */
    public function getWorkFeatured() : ?CreativeWork
    {
        return $this->workFeatured;
    }
    /**
     * @param string|null $videoFormat
     */
    public function setVideoFormat(?string $videoFormat) : void
    {
        $this->videoFormat = $videoFormat;
    }
    /**
     * @return string|null
     */
    public function getVideoFormat() : ?string
    {
        return $this->videoFormat;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('workFeatured' => $this->workFeatured, 'videoFormat' => $this->videoFormat), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
