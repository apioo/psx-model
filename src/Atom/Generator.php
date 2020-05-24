<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Generator
{
    /**
     * @var string
     */
    protected $text;
    /**
     * @var string
     */
    protected $uri;
    /**
     * @var string
     */
    protected $version;
    /**
     * @param string $text
     */
    public function setText(?string $text)
    {
        $this->text = $text;
    }
    /**
     * @return string
     */
    public function getText() : ?string
    {
        return $this->text;
    }
    /**
     * @param string $uri
     */
    public function setUri(?string $uri)
    {
        $this->uri = $uri;
    }
    /**
     * @return string
     */
    public function getUri() : ?string
    {
        return $this->uri;
    }
    /**
     * @param string $version
     */
    public function setVersion(?string $version)
    {
        $this->version = $version;
    }
    /**
     * @return string
     */
    public function getVersion() : ?string
    {
        return $this->version;
    }
}
