<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class MediaLink
{
    /**
     * @var string
     */
    protected $duration;
    /**
     * @var int
     */
    protected $height;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var int
     */
    protected $width;
    /**
     * @param string $duration
     */
    public function setDuration(?string $duration)
    {
        $this->duration = $duration;
    }
    /**
     * @return string
     */
    public function getDuration() : ?string
    {
        return $this->duration;
    }
    /**
     * @param int $height
     */
    public function setHeight(?int $height)
    {
        $this->height = $height;
    }
    /**
     * @return int
     */
    public function getHeight() : ?int
    {
        return $this->height;
    }
    /**
     * @param string $url
     */
    public function setUrl(?string $url)
    {
        $this->url = $url;
    }
    /**
     * @return string
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * @param int $width
     */
    public function setWidth(?int $width)
    {
        $this->width = $width;
    }
    /**
     * @return int
     */
    public function getWidth() : ?int
    {
        return $this->width;
    }
}
