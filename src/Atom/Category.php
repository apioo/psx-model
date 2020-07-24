<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Category implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $term;
    /**
     * @var string|null
     */
    protected $scheme;
    /**
     * @var string|null
     */
    protected $label;
    /**
     * @param string|null $term
     */
    public function setTerm(?string $term) : void
    {
        $this->term = $term;
    }
    /**
     * @return string|null
     */
    public function getTerm() : ?string
    {
        return $this->term;
    }
    /**
     * @param string|null $scheme
     */
    public function setScheme(?string $scheme) : void
    {
        $this->scheme = $scheme;
    }
    /**
     * @return string|null
     */
    public function getScheme() : ?string
    {
        return $this->scheme;
    }
    /**
     * @param string|null $label
     */
    public function setLabel(?string $label) : void
    {
        $this->label = $label;
    }
    /**
     * @return string|null
     */
    public function getLabel() : ?string
    {
        return $this->label;
    }
    public function jsonSerialize()
    {
        return array_filter(array('term' => $this->term, 'scheme' => $this->scheme, 'label' => $this->label), static function ($value) : bool {
            return $value !== null;
        });
    }
}
