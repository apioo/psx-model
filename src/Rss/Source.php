<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Source
{
    /**
     * @var string|null
     */
    protected $text;
    /**
     * @var string|null
     */
    protected $url;
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
}
