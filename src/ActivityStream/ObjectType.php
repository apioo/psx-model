<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class ObjectType
{
    /**
     * @var array<ObjectType>
     */
    protected $attachments;
    /**
     * @var ObjectType
     */
    protected $author;
    /**
     * @var string
     */
    protected $content;
    /**
     * @var string
     */
    protected $displayName;
    /**
     * @var array<string>
     */
    protected $downstreamDuplicates;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $image;
    /**
     * @var string
     */
    protected $objectType;
    /**
     * @var \DateTime
     */
    protected $published;
    /**
     * @var string
     */
    protected $summary;
    /**
     * @var \DateTime
     */
    protected $updated;
    /**
     * @var array<string>
     */
    protected $upstreamDuplicates;
    /**
     * @var string
     */
    protected $url;
    /**
     * @param array<ObjectType> $attachments
     */
    public function setAttachments(?array $attachments)
    {
        $this->attachments = $attachments;
    }
    /**
     * @return array<ObjectType>
     */
    public function getAttachments() : ?array
    {
        return $this->attachments;
    }
    /**
     * @param ObjectType $author
     */
    public function setAuthor(?ObjectType $author)
    {
        $this->author = $author;
    }
    /**
     * @return ObjectType
     */
    public function getAuthor() : ?ObjectType
    {
        return $this->author;
    }
    /**
     * @param string $content
     */
    public function setContent(?string $content)
    {
        $this->content = $content;
    }
    /**
     * @return string
     */
    public function getContent() : ?string
    {
        return $this->content;
    }
    /**
     * @param string $displayName
     */
    public function setDisplayName(?string $displayName)
    {
        $this->displayName = $displayName;
    }
    /**
     * @return string
     */
    public function getDisplayName() : ?string
    {
        return $this->displayName;
    }
    /**
     * @param array<string> $downstreamDuplicates
     */
    public function setDownstreamDuplicates(?array $downstreamDuplicates)
    {
        $this->downstreamDuplicates = $downstreamDuplicates;
    }
    /**
     * @return array<string>
     */
    public function getDownstreamDuplicates() : ?array
    {
        return $this->downstreamDuplicates;
    }
    /**
     * @param string $id
     */
    public function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function getId() : ?string
    {
        return $this->id;
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
     * @param string $objectType
     */
    public function setObjectType(?string $objectType)
    {
        $this->objectType = $objectType;
    }
    /**
     * @return string
     */
    public function getObjectType() : ?string
    {
        return $this->objectType;
    }
    /**
     * @param \DateTime $published
     */
    public function setPublished(?\DateTime $published)
    {
        $this->published = $published;
    }
    /**
     * @return \DateTime
     */
    public function getPublished() : ?\DateTime
    {
        return $this->published;
    }
    /**
     * @param string $summary
     */
    public function setSummary(?string $summary)
    {
        $this->summary = $summary;
    }
    /**
     * @return string
     */
    public function getSummary() : ?string
    {
        return $this->summary;
    }
    /**
     * @param \DateTime $updated
     */
    public function setUpdated(?\DateTime $updated)
    {
        $this->updated = $updated;
    }
    /**
     * @return \DateTime
     */
    public function getUpdated() : ?\DateTime
    {
        return $this->updated;
    }
    /**
     * @param array<string> $upstreamDuplicates
     */
    public function setUpstreamDuplicates(?array $upstreamDuplicates)
    {
        $this->upstreamDuplicates = $upstreamDuplicates;
    }
    /**
     * @return array<string>
     */
    public function getUpstreamDuplicates() : ?array
    {
        return $this->upstreamDuplicates;
    }
    /**
     * @param string $url
     */
    public function setUrl(?string $url)
    {
        $this->url = $url;
    }
    /**
     * @return string
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
}
