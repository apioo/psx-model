<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Source implements \JsonSerializable
{
    protected ?string $text = null;
    protected ?string $url = null;
    public function setText(?string $text) : void
    {
        $this->text = $text;
    }
    public function getText() : ?string
    {
        return $this->text;
    }
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    public function getUrl() : ?string
    {
        return $this->url;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('text' => $this->text, 'url' => $this->url), static function ($value) : bool {
            return $value !== null;
        });
    }
}

