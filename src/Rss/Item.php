<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Item implements \JsonSerializable
{
    protected ?string $title = null;
    protected ?string $link = null;
    protected ?string $description = null;
    protected ?string $author = null;
    /**
     * @var array<Category>|null
     */
    protected ?array $category = null;
    protected ?string $comments = null;
    protected ?Enclosure $enclosure = null;
    protected ?string $guid = null;
    protected ?\DateTime $pubDate = null;
    protected ?Source $source = null;
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    public function setLink(?string $link) : void
    {
        $this->link = $link;
    }
    public function getLink() : ?string
    {
        return $this->link;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setAuthor(?string $author) : void
    {
        $this->author = $author;
    }
    public function getAuthor() : ?string
    {
        return $this->author;
    }
    /**
     * @param array<Category>|null $category
     */
    public function setCategory(?array $category) : void
    {
        $this->category = $category;
    }
    public function getCategory() : ?array
    {
        return $this->category;
    }
    public function setComments(?string $comments) : void
    {
        $this->comments = $comments;
    }
    public function getComments() : ?string
    {
        return $this->comments;
    }
    public function setEnclosure(?Enclosure $enclosure) : void
    {
        $this->enclosure = $enclosure;
    }
    public function getEnclosure() : ?Enclosure
    {
        return $this->enclosure;
    }
    public function setGuid(?string $guid) : void
    {
        $this->guid = $guid;
    }
    public function getGuid() : ?string
    {
        return $this->guid;
    }
    public function setPubDate(?\DateTime $pubDate) : void
    {
        $this->pubDate = $pubDate;
    }
    public function getPubDate() : ?\DateTime
    {
        return $this->pubDate;
    }
    public function setSource(?Source $source) : void
    {
        $this->source = $source;
    }
    public function getSource() : ?Source
    {
        return $this->source;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('title' => $this->title, 'link' => $this->link, 'description' => $this->description, 'author' => $this->author, 'category' => $this->category, 'comments' => $this->comments, 'enclosure' => $this->enclosure, 'guid' => $this->guid, 'pubDate' => $this->pubDate, 'source' => $this->source), static function ($value) : bool {
            return $value !== null;
        });
    }
}

