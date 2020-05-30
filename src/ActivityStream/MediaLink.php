<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class MediaLink
{
    /**
     * @var string|null
     */
    protected $duration;
    /**
     * @var int|null
     */
    protected $height;
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var int|null
     */
    protected $width;
    /**
     * @param string|null $duration
     */
    public function setDuration(?string $duration) : void
    {
        $this->duration = $duration;
    }
    /**
     * @return string|null
     */
    public function getDuration() : ?string
    {
        return $this->duration;
    }
    /**
     * @param int|null $height
     */
    public function setHeight(?int $height) : void
    {
        $this->height = $height;
    }
    /**
     * @return int|null
     */
    public function getHeight() : ?int
    {
        return $this->height;
    }
    /**
     * @param string|null $url
     */
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    /**
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * @param int|null $width
     */
    public function setWidth(?int $width) : void
    {
        $this->width = $width;
    }
    /**
     * @return int|null
     */
    public function getWidth() : ?int
    {
        return $this->width;
    }
}
