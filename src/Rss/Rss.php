<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Rss
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
    protected $language;
    /**
     * @var string
     */
    protected $copyright;
    /**
     * @var string
     */
    protected $managingEditor;
    /**
     * @var string
     */
    protected $webMaster;
    /**
     * @var string
     */
    protected $generator;
    /**
     * @var string
     */
    protected $docs;
    /**
     * @var int
     */
    protected $ttl;
    /**
     * @var string
     */
    protected $image;
    /**
     * @var string
     */
    protected $rating;
    /**
     * @var int
     */
    protected $skipHours;
    /**
     * @var string
     */
    protected $skipDays;
    /**
     * @var array<Category>
     */
    protected $category;
    /**
     * @var \DateTime
     */
    protected $pubDate;
    /**
     * @var \DateTime
     */
    protected $lastBuildDate;
    /**
     * @var Cloud
     */
    protected $cloud;
    /**
     * @var array<Item>
     */
    protected $item;
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
     * @param string $language
     */
    public function setLanguage(?string $language)
    {
        $this->language = $language;
    }
    /**
     * @return string
     */
    public function getLanguage() : ?string
    {
        return $this->language;
    }
    /**
     * @param string $copyright
     */
    public function setCopyright(?string $copyright)
    {
        $this->copyright = $copyright;
    }
    /**
     * @return string
     */
    public function getCopyright() : ?string
    {
        return $this->copyright;
    }
    /**
     * @param string $managingEditor
     */
    public function setManagingEditor(?string $managingEditor)
    {
        $this->managingEditor = $managingEditor;
    }
    /**
     * @return string
     */
    public function getManagingEditor() : ?string
    {
        return $this->managingEditor;
    }
    /**
     * @param string $webMaster
     */
    public function setWebMaster(?string $webMaster)
    {
        $this->webMaster = $webMaster;
    }
    /**
     * @return string
     */
    public function getWebMaster() : ?string
    {
        return $this->webMaster;
    }
    /**
     * @param string $generator
     */
    public function setGenerator(?string $generator)
    {
        $this->generator = $generator;
    }
    /**
     * @return string
     */
    public function getGenerator() : ?string
    {
        return $this->generator;
    }
    /**
     * @param string $docs
     */
    public function setDocs(?string $docs)
    {
        $this->docs = $docs;
    }
    /**
     * @return string
     */
    public function getDocs() : ?string
    {
        return $this->docs;
    }
    /**
     * @param int $ttl
     */
    public function setTtl(?int $ttl)
    {
        $this->ttl = $ttl;
    }
    /**
     * @return int
     */
    public function getTtl() : ?int
    {
        return $this->ttl;
    }
    /**
     * @param string $image
     */
    public function setImage(?string $image)
    {
        $this->image = $image;
    }
    /**
     * @return string
     */
    public function getImage() : ?string
    {
        return $this->image;
    }
    /**
     * @param string $rating
     */
    public function setRating(?string $rating)
    {
        $this->rating = $rating;
    }
    /**
     * @return string
     */
    public function getRating() : ?string
    {
        return $this->rating;
    }
    /**
     * @param int $skipHours
     */
    public function setSkipHours(?int $skipHours)
    {
        $this->skipHours = $skipHours;
    }
    /**
     * @return int
     */
    public function getSkipHours() : ?int
    {
        return $this->skipHours;
    }
    /**
     * @param string $skipDays
     */
    public function setSkipDays(?string $skipDays)
    {
        $this->skipDays = $skipDays;
    }
    /**
     * @return string
     */
    public function getSkipDays() : ?string
    {
        return $this->skipDays;
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
     * @param \DateTime $lastBuildDate
     */
    public function setLastBuildDate(?\DateTime $lastBuildDate)
    {
        $this->lastBuildDate = $lastBuildDate;
    }
    /**
     * @return \DateTime
     */
    public function getLastBuildDate() : ?\DateTime
    {
        return $this->lastBuildDate;
    }
    /**
     * @param Cloud $cloud
     */
    public function setCloud(?Cloud $cloud)
    {
        $this->cloud = $cloud;
    }
    /**
     * @return Cloud
     */
    public function getCloud() : ?Cloud
    {
        return $this->cloud;
    }
    /**
     * @param array<Item> $item
     */
    public function setItem(?array $item)
    {
        $this->item = $item;
    }
    /**
     * @return array<Item>
     */
    public function getItem() : ?array
    {
        return $this->item;
    }
}
