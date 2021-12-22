<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Generator implements \JsonSerializable
{
    protected ?string $text = null;
    protected ?string $uri = null;
    protected ?string $version = null;
    public function setText(?string $text) : void
    {
        $this->text = $text;
    }
    public function getText() : ?string
    {
        return $this->text;
    }
    public function setUri(?string $uri) : void
    {
        $this->uri = $uri;
    }
    public function getUri() : ?string
    {
        return $this->uri;
    }
    public function setVersion(?string $version) : void
    {
        $this->version = $version;
    }
    public function getVersion() : ?string
    {
        return $this->version;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('text' => $this->text, 'uri' => $this->uri, 'version' => $this->version), static function ($value) : bool {
            return $value !== null;
        });
    }
}

