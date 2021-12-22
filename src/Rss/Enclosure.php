<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Enclosure implements \JsonSerializable
{
    protected ?string $url = null;
    protected ?int $length = null;
    protected ?string $type = null;
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    public function getUrl() : ?string
    {
        return $this->url;
    }
    public function setLength(?int $length) : void
    {
        $this->length = $length;
    }
    public function getLength() : ?int
    {
        return $this->length;
    }
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    public function getType() : ?string
    {
        return $this->type;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('url' => $this->url, 'length' => $this->length, 'type' => $this->type), static function ($value) : bool {
            return $value !== null;
        });
    }
}

