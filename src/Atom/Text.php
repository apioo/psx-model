<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Text
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $content;
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
     * @param string $content
     */
    public function setContent(?string $content)
    {
        $this->content = $content;
    }
    /**
     * @return string
     */
    public function getContent() : ?string
    {
        return $this->content;
    }
}
