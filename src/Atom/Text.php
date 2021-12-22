<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Text implements \JsonSerializable
{
    protected ?string $type = null;
    protected ?string $content = null;
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    public function getType() : ?string
    {
        return $this->type;
    }
    public function setContent(?string $content) : void
    {
        $this->content = $content;
    }
    public function getContent() : ?string
    {
        return $this->content;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('type' => $this->type, 'content' => $this->content), static function ($value) : bool {
            return $value !== null;
        });
    }
}

