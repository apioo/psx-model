<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Category
{
    /**
     * @var string
     */
    protected $text;
    /**
     * @var string
     */
    protected $domain;
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
     * @param string $domain
     */
    public function setDomain(?string $domain)
    {
        $this->domain = $domain;
    }
    /**
     * @return string
     */
    public function getDomain() : ?string
    {
        return $this->domain;
    }
}
