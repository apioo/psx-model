<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class ObjectType
{
    /**
     * @var array<ObjectType>|null
     */
    protected $attachments;
    /**
     * @var ObjectType|null
     */
    protected $author;
    /**
     * @var string|null
     */
    protected $content;
    /**
     * @var string|null
     */
    protected $displayName;
    /**
     * @var array<string>|null
     */
    protected $downstreamDuplicates;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $image;
    /**
     * @var string|null
     */
    protected $objectType;
    /**
     * @var \DateTime|null
     */
    protected $published;
    /**
     * @var string|null
     */
    protected $summary;
    /**
     * @var \DateTime|null
     */
    protected $updated;
    /**
     * @var array<string>|null
     */
    protected $upstreamDuplicates;
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @param array<ObjectType>|null $attachments
     */
    public function setAttachments(?array $attachments) : void
    {
        $this->attachments = $attachments;
    }
    /**
     * @return array<ObjectType>|null
     */
    public function getAttachments() : ?array
    {
        return $this->attachments;
    }
    /**
     * @param ObjectType|null $author
     */
    public function setAuthor(?ObjectType $author) : void
    {
        $this->author = $author;
    }
    /**
     * @return ObjectType|null
     */
    public function getAuthor() : ?ObjectType
    {
        return $this->author;
    }
    /**
     * @param string|null $content
     */
    public function setContent(?string $content) : void
    {
        $this->content = $content;
    }
    /**
     * @return string|null
     */
    public function getContent() : ?string
    {
        return $this->content;
    }
    /**
     * @param string|null $displayName
     */
    public function setDisplayName(?string $displayName) : void
    {
        $this->displayName = $displayName;
    }
    /**
     * @return string|null
     */
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
    /**
     * @return array<string>|null
     */
    public function getDownstreamDuplicates() : ?array
    {
        return $this->downstreamDuplicates;
    }
    /**
     * @param string|null $id
     */
    public function setId(?string $id) : void
    {
        $this->id = $id;
    }
    /**
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
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
     * @param string|null $objectType
     */
    public function setObjectType(?string $objectType) : void
    {
        $this->objectType = $objectType;
    }
    /**
     * @return string|null
     */
    public function getObjectType() : ?string
    {
        return $this->objectType;
    }
    /**
     * @param \DateTime|null $published
     */
    public function setPublished(?\DateTime $published) : void
    {
        $this->published = $published;
    }
    /**
     * @return \DateTime|null
     */
    public function getPublished() : ?\DateTime
    {
        return $this->published;
    }
    /**
     * @param string|null $summary
     */
    public function setSummary(?string $summary) : void
    {
        $this->summary = $summary;
    }
    /**
     * @return string|null
     */
    public function getSummary() : ?string
    {
        return $this->summary;
    }
    /**
     * @param \DateTime|null $updated
     */
    public function setUpdated(?\DateTime $updated) : void
    {
        $this->updated = $updated;
    }
    /**
     * @return \DateTime|null
     */
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
    /**
     * @return array<string>|null
     */
    public function getUpstreamDuplicates() : ?array
    {
        return $this->upstreamDuplicates;
    }
    /**
     * @param string|null $url
     */
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    /**
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
}
