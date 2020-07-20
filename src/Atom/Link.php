<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Link implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $href;
    /**
     * @var string|null
     */
    protected $rel;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $hreflang;
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var int|null
     */
    protected $length;
    /**
     * @param string|null $href
     */
    public function setHref(?string $href) : void
    {
        $this->href = $href;
    }
    /**
     * @return string|null
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * @param string|null $rel
     */
    public function setRel(?string $rel) : void
    {
        $this->rel = $rel;
    }
    /**
     * @return string|null
     */
    public function getRel() : ?string
    {
        return $this->rel;
    }
    /**
     * @param string|null $type
     */
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    /**
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * @param string|null $hreflang
     */
    public function setHreflang(?string $hreflang) : void
    {
        $this->hreflang = $hreflang;
    }
    /**
     * @return string|null
     */
    public function getHreflang() : ?string
    {
        return $this->hreflang;
    }
    /**
     * @param string|null $title
     */
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    /**
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param int|null $length
     */
    public function setLength(?int $length) : void
    {
        $this->length = $length;
    }
    /**
     * @return int|null
     */
    public function getLength() : ?int
    {
        return $this->length;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('href' => $this->href, 'rel' => $this->rel, 'type' => $this->type, 'hreflang' => $this->hreflang, 'title' => $this->title, 'length' => $this->length), static function ($value) : bool {
            return $value !== null;
        });
    }
}
