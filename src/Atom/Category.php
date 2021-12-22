<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Category implements \JsonSerializable
{
    protected ?string $term = null;
    protected ?string $scheme = null;
    protected ?string $label = null;
    public function setTerm(?string $term) : void
    {
        $this->term = $term;
    }
    public function getTerm() : ?string
    {
        return $this->term;
    }
    public function setScheme(?string $scheme) : void
    {
        $this->scheme = $scheme;
    }
    public function getScheme() : ?string
    {
        return $this->scheme;
    }
    public function setLabel(?string $label) : void
    {
        $this->label = $label;
    }
    public function getLabel() : ?string
    {
        return $this->label;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('term' => $this->term, 'scheme' => $this->scheme, 'label' => $this->label), static function ($value) : bool {
            return $value !== null;
        });
    }
}

