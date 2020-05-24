<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Item
{
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $link;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $author;
    /**
     * @var array<Category>
     */
    protected $category;
    /**
     * @var string
     */
    protected $comments;
    /**
     * @var Enclosure
     */
    protected $enclosure;
    /**
     * @var string
     */
    protected $guid;
    /**
     * @var \DateTime
     */
    protected $pubDate;
    /**
     * @var Source
     */
    protected $source;
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
     * @param string $link
     */
    public function setLink(?string $link)
    {
        $this->link = $link;
    }
    /**
     * @return string
     */
    public function getLink() : ?string
    {
        return $this->link;
    }
    /**
     * @param string $description
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param string $author
     */
    public function setAuthor(?string $author)
    {
        $this->author = $author;
    }
    /**
     * @return string
     */
    public function getAuthor() : ?string
    {
        return $this->author;
    }
    /**
     * @param array<Category> $category
     */
    public function setCategory(?array $category)
    {
        $this->category = $category;
    }
    /**
     * @return array<Category>
     */
    public function getCategory() : ?array
    {
        return $this->category;
    }
    /**
     * @param string $comments
     */
    public function setComments(?string $comments)
    {
        $this->comments = $comments;
    }
    /**
     * @return string
     */
    public function getComments() : ?string
    {
        return $this->comments;
    }
    /**
     * @param Enclosure $enclosure
     */
    public function setEnclosure(?Enclosure $enclosure)
    {
        $this->enclosure = $enclosure;
    }
    /**
     * @return Enclosure
     */
    public function getEnclosure() : ?Enclosure
    {
        return $this->enclosure;
    }
    /**
     * @param string $guid
     */
    public function setGuid(?string $guid)
    {
        $this->guid = $guid;
    }
    /**
     * @return string
     */
    public function getGuid() : ?string
    {
        return $this->guid;
    }
    /**
     * @param \DateTime $pubDate
     */
    public function setPubDate(?\DateTime $pubDate)
    {
        $this->pubDate = $pubDate;
    }
    /**
     * @return \DateTime
     */
    public function getPubDate() : ?\DateTime
    {
        return $this->pubDate;
    }
    /**
     * @param Source $source
     */
    public function setSource(?Source $source)
    {
        $this->source = $source;
    }
    /**
     * @return Source
     */
    public function getSource() : ?Source
    {
        return $this->source;
    }
}
