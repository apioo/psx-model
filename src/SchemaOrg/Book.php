<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A book.")
 */
class Book extends CreativeWork implements \JsonSerializable
{
    /**
     * @var Person|null
     */
    protected $illustrator;
    /**
     * @var BookFormatType|null
     */
    protected $bookFormat;
    /**
     * @var string|null
     */
    protected $isbn;
    /**
     * @var string|null
     */
    protected $bookEdition;
    /**
     * @var int|null
     */
    protected $numberOfPages;
    /**
     * @param Person|null $illustrator
     */
    public function setIllustrator(?Person $illustrator) : void
    {
        $this->illustrator = $illustrator;
    }
    /**
     * @return Person|null
     */
    public function getIllustrator() : ?Person
    {
        return $this->illustrator;
    }
    /**
     * @param BookFormatType|null $bookFormat
     */
    public function setBookFormat(?BookFormatType $bookFormat) : void
    {
        $this->bookFormat = $bookFormat;
    }
    /**
     * @return BookFormatType|null
     */
    public function getBookFormat() : ?BookFormatType
    {
        return $this->bookFormat;
    }
    /**
     * @param string|null $isbn
     */
    public function setIsbn(?string $isbn) : void
    {
        $this->isbn = $isbn;
    }
    /**
     * @return string|null
     */
    public function getIsbn() : ?string
    {
        return $this->isbn;
    }
    /**
     * @param string|null $bookEdition
     */
    public function setBookEdition(?string $bookEdition) : void
    {
        $this->bookEdition = $bookEdition;
    }
    /**
     * @return string|null
     */
    public function getBookEdition() : ?string
    {
        return $this->bookEdition;
    }
    /**
     * @param int|null $numberOfPages
     */
    public function setNumberOfPages(?int $numberOfPages) : void
    {
        $this->numberOfPages = $numberOfPages;
    }
    /**
     * @return int|null
     */
    public function getNumberOfPages() : ?int
    {
        return $this->numberOfPages;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('illustrator' => $this->illustrator, 'bookFormat' => $this->bookFormat, 'isbn' => $this->isbn, 'bookEdition' => $this->bookEdition, 'numberOfPages' => $this->numberOfPages), static function ($value) : bool {
            return $value !== null;
        });
    }
}
