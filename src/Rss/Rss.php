<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Rss implements \JsonSerializable
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
    protected $language;
    /**
     * @var string|null
     */
    protected $copyright;
    /**
     * @var string|null
     */
    protected $managingEditor;
    /**
     * @var string|null
     */
    protected $webMaster;
    /**
     * @var string|null
     */
    protected $generator;
    /**
     * @var string|null
     */
    protected $docs;
    /**
     * @var int|null
     */
    protected $ttl;
    /**
     * @var string|null
     */
    protected $image;
    /**
     * @var string|null
     */
    protected $rating;
    /**
     * @var int|null
     */
    protected $skipHours;
    /**
     * @var string|null
     */
    protected $skipDays;
    /**
     * @var array<Category>|null
     */
    protected $category;
    /**
     * @var \DateTime|null
     */
    protected $pubDate;
    /**
     * @var \DateTime|null
     */
    protected $lastBuildDate;
    /**
     * @var Cloud|null
     */
    protected $cloud;
    /**
     * @var array<Item>|null
     */
    protected $item;
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
     * @param string|null $language
     */
    public function setLanguage(?string $language) : void
    {
        $this->language = $language;
    }
    /**
     * @return string|null
     */
    public function getLanguage() : ?string
    {
        return $this->language;
    }
    /**
     * @param string|null $copyright
     */
    public function setCopyright(?string $copyright) : void
    {
        $this->copyright = $copyright;
    }
    /**
     * @return string|null
     */
    public function getCopyright() : ?string
    {
        return $this->copyright;
    }
    /**
     * @param string|null $managingEditor
     */
    public function setManagingEditor(?string $managingEditor) : void
    {
        $this->managingEditor = $managingEditor;
    }
    /**
     * @return string|null
     */
    public function getManagingEditor() : ?string
    {
        return $this->managingEditor;
    }
    /**
     * @param string|null $webMaster
     */
    public function setWebMaster(?string $webMaster) : void
    {
        $this->webMaster = $webMaster;
    }
    /**
     * @return string|null
     */
    public function getWebMaster() : ?string
    {
        return $this->webMaster;
    }
    /**
     * @param string|null $generator
     */
    public function setGenerator(?string $generator) : void
    {
        $this->generator = $generator;
    }
    /**
     * @return string|null
     */
    public function getGenerator() : ?string
    {
        return $this->generator;
    }
    /**
     * @param string|null $docs
     */
    public function setDocs(?string $docs) : void
    {
        $this->docs = $docs;
    }
    /**
     * @return string|null
     */
    public function getDocs() : ?string
    {
        return $this->docs;
    }
    /**
     * @param int|null $ttl
     */
    public function setTtl(?int $ttl) : void
    {
        $this->ttl = $ttl;
    }
    /**
     * @return int|null
     */
    public function getTtl() : ?int
    {
        return $this->ttl;
    }
    /**
     * @param string|null $image
     */
    public function setImage(?string $image) : void
    {
        $this->image = $image;
    }
    /**
     * @return string|null
     */
    public function getImage() : ?string
    {
        return $this->image;
    }
    /**
     * @param string|null $rating
     */
    public function setRating(?string $rating) : void
    {
        $this->rating = $rating;
    }
    /**
     * @return string|null
     */
    public function getRating() : ?string
    {
        return $this->rating;
    }
    /**
     * @param int|null $skipHours
     */
    public function setSkipHours(?int $skipHours) : void
    {
        $this->skipHours = $skipHours;
    }
    /**
     * @return int|null
     */
    public function getSkipHours() : ?int
    {
        return $this->skipHours;
    }
    /**
     * @param string|null $skipDays
     */
    public function setSkipDays(?string $skipDays) : void
    {
        $this->skipDays = $skipDays;
    }
    /**
     * @return string|null
     */
    public function getSkipDays() : ?string
    {
        return $this->skipDays;
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
     * @param \DateTime|null $lastBuildDate
     */
    public function setLastBuildDate(?\DateTime $lastBuildDate) : void
    {
        $this->lastBuildDate = $lastBuildDate;
    }
    /**
     * @return \DateTime|null
     */
    public function getLastBuildDate() : ?\DateTime
    {
        return $this->lastBuildDate;
    }
    /**
     * @param Cloud|null $cloud
     */
    public function setCloud(?Cloud $cloud) : void
    {
        $this->cloud = $cloud;
    }
    /**
     * @return Cloud|null
     */
    public function getCloud() : ?Cloud
    {
        return $this->cloud;
    }
    /**
     * @param array<Item>|null $item
     */
    public function setItem(?array $item) : void
    {
        $this->item = $item;
    }
    /**
     * @return array<Item>|null
     */
    public function getItem() : ?array
    {
        return $this->item;
    }
    public function jsonSerialize()
    {
        return array_filter(array('title' => $this->title, 'link' => $this->link, 'description' => $this->description, 'language' => $this->language, 'copyright' => $this->copyright, 'managingEditor' => $this->managingEditor, 'webMaster' => $this->webMaster, 'generator' => $this->generator, 'docs' => $this->docs, 'ttl' => $this->ttl, 'image' => $this->image, 'rating' => $this->rating, 'skipHours' => $this->skipHours, 'skipDays' => $this->skipDays, 'category' => $this->category, 'pubDate' => $this->pubDate, 'lastBuildDate' => $this->lastBuildDate, 'cloud' => $this->cloud, 'item' => $this->item), static function ($value) : bool {
            return $value !== null;
        });
    }
}
