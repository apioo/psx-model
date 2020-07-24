<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Enclosure implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var int|null
     */
    protected $length;
    /**
     * @var string|null
     */
    protected $type;
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
     * @param int|null $length
     */
    public function setLength(?int $length) : void
    {
        $this->length = $length;
    }
    /**
     * @return int|null
     */
    public function getLength() : ?int
    {
        return $this->length;
    }
    /**
     * @param string|null $type
     */
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    /**
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    public function jsonSerialize()
    {
        return array_filter(array('url' => $this->url, 'length' => $this->length, 'type' => $this->type), static function ($value) : bool {
            return $value !== null;
        });
    }
}
