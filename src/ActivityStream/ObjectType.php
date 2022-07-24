<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class ObjectType implements \JsonSerializable
{
    /**
     * @var array<ObjectType>|null
     */
    protected ?array $attachments = null;
    protected ?ObjectType $author = null;
    protected ?string $content = null;
    protected ?string $displayName = null;
    /**
     * @var array<string>|null
     */
    protected ?array $downstreamDuplicates = null;
    protected ?string $id = null;
    protected ?string $image = null;
    protected ?string $objectType = null;
    protected ?\DateTime $published = null;
    protected ?string $summary = null;
    protected ?\DateTime $updated = null;
    /**
     * @var array<string>|null
     */
    protected ?array $upstreamDuplicates = null;
    protected ?string $url = null;
    /**
     * @param array<ObjectType>|null $attachments
     */
    public function setAttachments(?array $attachments) : void
    {
        $this->attachments = $attachments;
    }
    public function getAttachments() : ?array
    {
        return $this->attachments;
    }
    public function setAuthor(?ObjectType $author) : void
    {
        $this->author = $author;
    }
    public function getAuthor() : ?ObjectType
    {
        return $this->author;
    }
    public function setContent(?string $content) : void
    {
        $this->content = $content;
    }
    public function getContent() : ?string
    {
        return $this->content;
    }
    public function setDisplayName(?string $displayName) : void
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName() : ?string
    {
        return $this->displayName;
    }
    /**
     * @param array<string>|null $downstreamDuplicates
     */
    public function setDownstreamDuplicates(?array $downstreamDuplicates) : void
    {
        $this->downstreamDuplicates = $downstreamDuplicates;
    }
    public function getDownstreamDuplicates() : ?array
    {
        return $this->downstreamDuplicates;
    }
    public function setId(?string $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?string
    {
        return $this->id;
    }
    public function setImage(?string $image) : void
    {
        $this->image = $image;
    }
    public function getImage() : ?string
    {
        return $this->image;
    }
    public function setObjectType(?string $objectType) : void
    {
        $this->objectType = $objectType;
    }
    public function getObjectType() : ?string
    {
        return $this->objectType;
    }
    public function setPublished(?\DateTime $published) : void
    {
        $this->published = $published;
    }
    public function getPublished() : ?\DateTime
    {
        return $this->published;
    }
    public function setSummary(?string $summary) : void
    {
        $this->summary = $summary;
    }
    public function getSummary() : ?string
    {
        return $this->summary;
    }
    public function setUpdated(?\DateTime $updated) : void
    {
        $this->updated = $updated;
    }
    public function getUpdated() : ?\DateTime
    {
        return $this->updated;
    }
    /**
     * @param array<string>|null $upstreamDuplicates
     */
    public function setUpstreamDuplicates(?array $upstreamDuplicates) : void
    {
        $this->upstreamDuplicates = $upstreamDuplicates;
    }
    public function getUpstreamDuplicates() : ?array
    {
        return $this->upstreamDuplicates;
    }
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    public function getUrl() : ?string
    {
        return $this->url;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('attachments' => $this->attachments, 'author' => $this->author, 'content' => $this->content, 'displayName' => $this->displayName, 'downstreamDuplicates' => $this->downstreamDuplicates, 'id' => $this->id, 'image' => $this->image, 'objectType' => $this->objectType, 'published' => $this->published, 'summary' => $this->summary, 'updated' => $this->updated, 'upstreamDuplicates' => $this->upstreamDuplicates, 'url' => $this->url), static function ($value) : bool {
            return $value !== null;
        });
    }
}

