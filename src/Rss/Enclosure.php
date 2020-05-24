<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Enclosure
{
    /**
     * @var string
     */
    protected $url;
    /**
     * @var int
     */
    protected $length;
    /**
     * @var string
     */
    protected $type;
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
     * @param int $length
     */
    public function setLength(?int $length)
    {
        $this->length = $length;
    }
    /**
     * @return int
     */
    public function getLength() : ?int
    {
        return $this->length;
    }
    /**
     * @param string $type
     */
    public function setType(?string $type)
    {
        $this->type = $type;
    }
    /**
     * @return string
     */
    public function getType() : ?string
    {
        return $this->type;
    }
}
