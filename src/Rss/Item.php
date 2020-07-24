<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Item implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var string|null
     */
    protected $link;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $author;
    /**
     * @var array<Category>|null
     */
    protected $category;
    /**
     * @var string|null
     */
    protected $comments;
    /**
     * @var Enclosure|null
     */
    protected $enclosure;
    /**
     * @var string|null
     */
    protected $guid;
    /**
     * @var \DateTime|null
     */
    protected $pubDate;
    /**
     * @var Source|null
     */
    protected $source;
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
     * @param string|null $link
     */
    public function setLink(?string $link) : void
    {
        $this->link = $link;
    }
    /**
     * @return string|null
     */
    public function getLink() : ?string
    {
        return $this->link;
    }
    /**
     * @param string|null $description
     */
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param string|null $author
     */
    public function setAuthor(?string $author) : void
    {
        $this->author = $author;
    }
    /**
     * @return string|null
     */
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
    /**
     * @return array<Category>|null
     */
    public function getCategory() : ?array
    {
        return $this->category;
    }
    /**
     * @param string|null $comments
     */
    public function setComments(?string $comments) : void
    {
        $this->comments = $comments;
    }
    /**
     * @return string|null
     */
    public function getComments() : ?string
    {
        return $this->comments;
    }
    /**
     * @param Enclosure|null $enclosure
     */
    public function setEnclosure(?Enclosure $enclosure) : void
    {
        $this->enclosure = $enclosure;
    }
    /**
     * @return Enclosure|null
     */
    public function getEnclosure() : ?Enclosure
    {
        return $this->enclosure;
    }
    /**
     * @param string|null $guid
     */
    public function setGuid(?string $guid) : void
    {
        $this->guid = $guid;
    }
    /**
     * @return string|null
     */
    public function getGuid() : ?string
    {
        return $this->guid;
    }
    /**
     * @param \DateTime|null $pubDate
     */
    public function setPubDate(?\DateTime $pubDate) : void
    {
        $this->pubDate = $pubDate;
    }
    /**
     * @return \DateTime|null
     */
    public function getPubDate() : ?\DateTime
    {
        return $this->pubDate;
    }
    /**
     * @param Source|null $source
     */
    public function setSource(?Source $source) : void
    {
        $this->source = $source;
    }
    /**
     * @return Source|null
     */
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
