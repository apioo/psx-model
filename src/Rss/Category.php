<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Category implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $text;
    /**
     * @var string|null
     */
    protected $domain;
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
     * @param string|null $domain
     */
    public function setDomain(?string $domain) : void
    {
        $this->domain = $domain;
    }
    /**
     * @return string|null
     */
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
