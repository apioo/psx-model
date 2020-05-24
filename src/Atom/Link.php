<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Link
{
    /**
     * @var string
     */
    protected $href;
    /**
     * @var string
     */
    protected $rel;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $hreflang;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var int
     */
    protected $length;
    /**
     * @param string $href
     */
    public function setHref(?string $href)
    {
        $this->href = $href;
    }
    /**
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * @param string $rel
     */
    public function setRel(?string $rel)
    {
        $this->rel = $rel;
    }
    /**
     * @return string
     */
    public function getRel() : ?string
    {
        return $this->rel;
    }
    /**
     * @param string $type
     */
    public function setType(?string $type)
    {
        $this->type = $type;
    }
    /**
     * @return string
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * @param string $hreflang
     */
    public function setHreflang(?string $hreflang)
    {
        $this->hreflang = $hreflang;
    }
    /**
     * @return string
     */
    public function getHreflang() : ?string
    {
        return $this->hreflang;
    }
    /**
     * @param string $title
     */
    public function setTitle(?string $title)
    {
        $this->title = $title;
    }
    /**
     * @return string
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param int $length
     */
    public function setLength(?int $length)
    {
        $this->length = $length;
    }
    /**
     * @return int
     */
    public function getLength() : ?int
    {
        return $this->length;
    }
}
