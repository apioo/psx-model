<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A book.')]
class Book extends CreativeWork implements \JsonSerializable
{
    protected ?Person $illustrator = null;
    protected ?BookFormatType $bookFormat = null;
    protected ?string $isbn = null;
    protected ?string $bookEdition = null;
    protected ?int $numberOfPages = null;
    public function setIllustrator(?Person $illustrator) : void
    {
        $this->illustrator = $illustrator;
    }
    public function getIllustrator() : ?Person
    {
        return $this->illustrator;
    }
    public function setBookFormat(?BookFormatType $bookFormat) : void
    {
        $this->bookFormat = $bookFormat;
    }
    public function getBookFormat() : ?BookFormatType
    {
        return $this->bookFormat;
    }
    public function setIsbn(?string $isbn) : void
    {
        $this->isbn = $isbn;
    }
    public function getIsbn() : ?string
    {
        return $this->isbn;
    }
    public function setBookEdition(?string $bookEdition) : void
    {
        $this->bookEdition = $bookEdition;
    }
    public function getBookEdition() : ?string
    {
        return $this->bookEdition;
    }
    public function setNumberOfPages(?int $numberOfPages) : void
    {
        $this->numberOfPages = $numberOfPages;
    }
    public function getNumberOfPages() : ?int
    {
        return $this->numberOfPages;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('illustrator' => $this->illustrator, 'bookFormat' => $this->bookFormat, 'isbn' => $this->isbn, 'bookEdition' => $this->bookEdition, 'numberOfPages' => $this->numberOfPages), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

