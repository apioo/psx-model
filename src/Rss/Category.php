<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Category implements \JsonSerializable
{
    protected ?string $text = null;
    protected ?string $domain = null;
    public function setText(?string $text) : void
    {
        $this->text = $text;
    }
    public function getText() : ?string
    {
        return $this->text;
    }
    public function setDomain(?string $domain) : void
    {
        $this->domain = $domain;
    }
    public function getDomain() : ?string
    {
        return $this->domain;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('text' => $this->text, 'domain' => $this->domain), static function ($value) : bool {
            return $value !== null;
        });
    }
}

