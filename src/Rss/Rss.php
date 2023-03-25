<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Rss implements \JsonSerializable
{
    protected ?string $title = null;
    protected ?string $link = null;
    protected ?string $description = null;
    protected ?string $language = null;
    protected ?string $copyright = null;
    protected ?string $managingEditor = null;
    protected ?string $webMaster = null;
    protected ?string $generator = null;
    protected ?string $docs = null;
    protected ?int $ttl = null;
    protected ?string $image = null;
    protected ?string $rating = null;
    protected ?int $skipHours = null;
    protected ?string $skipDays = null;
    /**
     * @var array<Category>|null
     */
    protected ?array $category = null;
    protected ?\PSX\DateTime\LocalDateTime $pubDate = null;
    protected ?\PSX\DateTime\LocalDateTime $lastBuildDate = null;
    protected ?Cloud $cloud = null;
    /**
     * @var array<Item>|null
     */
    protected ?array $item = null;
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
    public function setLanguage(?string $language) : void
    {
        $this->language = $language;
    }
    public function getLanguage() : ?string
    {
        return $this->language;
    }
    public function setCopyright(?string $copyright) : void
    {
        $this->copyright = $copyright;
    }
    public function getCopyright() : ?string
    {
        return $this->copyright;
    }
    public function setManagingEditor(?string $managingEditor) : void
    {
        $this->managingEditor = $managingEditor;
    }
    public function getManagingEditor() : ?string
    {
        return $this->managingEditor;
    }
    public function setWebMaster(?string $webMaster) : void
    {
        $this->webMaster = $webMaster;
    }
    public function getWebMaster() : ?string
    {
        return $this->webMaster;
    }
    public function setGenerator(?string $generator) : void
    {
        $this->generator = $generator;
    }
    public function getGenerator() : ?string
    {
        return $this->generator;
    }
    public function setDocs(?string $docs) : void
    {
        $this->docs = $docs;
    }
    public function getDocs() : ?string
    {
        return $this->docs;
    }
    public function setTtl(?int $ttl) : void
    {
        $this->ttl = $ttl;
    }
    public function getTtl() : ?int
    {
        return $this->ttl;
    }
    public function setImage(?string $image) : void
    {
        $this->image = $image;
    }
    public function getImage() : ?string
    {
        return $this->image;
    }
    public function setRating(?string $rating) : void
    {
        $this->rating = $rating;
    }
    public function getRating() : ?string
    {
        return $this->rating;
    }
    public function setSkipHours(?int $skipHours) : void
    {
        $this->skipHours = $skipHours;
    }
    public function getSkipHours() : ?int
    {
        return $this->skipHours;
    }
    public function setSkipDays(?string $skipDays) : void
    {
        $this->skipDays = $skipDays;
    }
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
    public function getCategory() : ?array
    {
        return $this->category;
    }
    public function setPubDate(?\PSX\DateTime\LocalDateTime $pubDate) : void
    {
        $this->pubDate = $pubDate;
    }
    public function getPubDate() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->pubDate;
    }
    public function setLastBuildDate(?\PSX\DateTime\LocalDateTime $lastBuildDate) : void
    {
        $this->lastBuildDate = $lastBuildDate;
    }
    public function getLastBuildDate() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->lastBuildDate;
    }
    public function setCloud(?Cloud $cloud) : void
    {
        $this->cloud = $cloud;
    }
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
    public function getItem() : ?array
    {
        return $this->item;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('title' => $this->title, 'link' => $this->link, 'description' => $this->description, 'language' => $this->language, 'copyright' => $this->copyright, 'managingEditor' => $this->managingEditor, 'webMaster' => $this->webMaster, 'generator' => $this->generator, 'docs' => $this->docs, 'ttl' => $this->ttl, 'image' => $this->image, 'rating' => $this->rating, 'skipHours' => $this->skipHours, 'skipDays' => $this->skipDays, 'category' => $this->category, 'pubDate' => $this->pubDate, 'lastBuildDate' => $this->lastBuildDate, 'cloud' => $this->cloud, 'item' => $this->item), static function ($value) : bool {
            return $value !== null;
        });
    }
}

