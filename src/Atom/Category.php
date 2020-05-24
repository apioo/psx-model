<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Category
{
    /**
     * @var string
     */
    protected $term;
    /**
     * @var string
     */
    protected $scheme;
    /**
     * @var string
     */
    protected $label;
    /**
     * @param string $term
     */
    public function setTerm(?string $term)
    {
        $this->term = $term;
    }
    /**
     * @return string
     */
    public function getTerm() : ?string
    {
        return $this->term;
    }
    /**
     * @param string $scheme
     */
    public function setScheme(?string $scheme)
    {
        $this->scheme = $scheme;
    }
    /**
     * @return string
     */
    public function getScheme() : ?string
    {
        return $this->scheme;
    }
    /**
     * @param string $label
     */
    public function setLabel(?string $label)
    {
        $this->label = $label;
    }
    /**
     * @return string
     */
    public function getLabel() : ?string
    {
        return $this->label;
    }
}
