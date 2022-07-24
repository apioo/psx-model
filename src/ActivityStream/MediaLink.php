<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class MediaLink implements \JsonSerializable
{
    protected ?string $duration = null;
    protected ?int $height = null;
    protected ?string $url = null;
    protected ?int $width = null;
    public function setDuration(?string $duration) : void
    {
        $this->duration = $duration;
    }
    public function getDuration() : ?string
    {
        return $this->duration;
    }
    public function setHeight(?int $height) : void
    {
        $this->height = $height;
    }
    public function getHeight() : ?int
    {
        return $this->height;
    }
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    public function getUrl() : ?string
    {
        return $this->url;
    }
    public function setWidth(?int $width) : void
    {
        $this->width = $width;
    }
    public function getWidth() : ?int
    {
        return $this->width;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('duration' => $this->duration, 'height' => $this->height, 'url' => $this->url, 'width' => $this->width), static function ($value) : bool {
            return $value !== null;
        });
    }
}

