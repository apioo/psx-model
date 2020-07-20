<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Generator implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $text;
    /**
     * @var string|null
     */
    protected $uri;
    /**
     * @var string|null
     */
    protected $version;
    /**
     * @param string|null $text
     */
    public function setText(?string $text) : void
    {
        $this->text = $text;
    }
    /**
     * @return string|null
     */
    public function getText() : ?string
    {
        return $this->text;
    }
    /**
     * @param string|null $uri
     */
    public function setUri(?string $uri) : void
    {
        $this->uri = $uri;
    }
    /**
     * @return string|null
     */
    public function getUri() : ?string
    {
        return $this->uri;
    }
    /**
     * @param string|null $version
     */
    public function setVersion(?string $version) : void
    {
        $this->version = $version;
    }
    /**
     * @return string|null
     */
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
