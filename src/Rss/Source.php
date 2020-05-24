<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Source
{
    /**
     * @var string
     */
    protected $text;
    /**
     * @var string
     */
    protected $url;
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
}
