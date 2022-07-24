<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Link implements \JsonSerializable
{
    protected ?string $href = null;
    protected ?string $rel = null;
    protected ?string $type = null;
    protected ?string $hreflang = null;
    protected ?string $title = null;
    protected ?int $length = null;
    public function setHref(?string $href) : void
    {
        $this->href = $href;
    }
    public function getHref() : ?string
    {
        return $this->href;
    }
    public function setRel(?string $rel) : void
    {
        $this->rel = $rel;
    }
    public function getRel() : ?string
    {
        return $this->rel;
    }
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    public function getType() : ?string
    {
        return $this->type;
    }
    public function setHreflang(?string $hreflang) : void
    {
        $this->hreflang = $hreflang;
    }
    public function getHreflang() : ?string
    {
        return $this->hreflang;
    }
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    public function setLength(?int $length) : void
    {
        $this->length = $length;
    }
    public function getLength() : ?int
    {
        return $this->length;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('href' => $this->href, 'rel' => $this->rel, 'type' => $this->type, 'hreflang' => $this->hreflang, 'title' => $this->title, 'length' => $this->length), static function ($value) : bool {
            return $value !== null;
        });
    }
}

