<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class Activity extends ObjectType
{
    /**
     * @var string|null
     */
    protected $objectType = 'activity';
    /**
     * @var ObjectType|null
     */
    protected $actor;
    /**
     * @var string|null
     */
    protected $content;
    /**
     * @var ObjectType|null
     */
    protected $generator;
    /**
     * @var MediaLink|null
     */
    protected $icon;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var ObjectType|null
     */
    protected $object;
    /**
     * @var \DateTime|null
     */
    protected $published;
    /**
     * @var ObjectType|null
     */
    protected $provider;
    /**
     * @var ObjectType|null
     */
    protected $target;
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var \DateTime|null
     */
    protected $updated;
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var string|null
     */
    protected $verb;
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
     * @param ObjectType|null $actor
     */
    public function setActor(?ObjectType $actor) : void
    {
        $this->actor = $actor;
    }
    /**
     * @return ObjectType|null
     */
    public function getActor() : ?ObjectType
    {
        return $this->actor;
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
     * @param ObjectType|null $generator
     */
    public function setGenerator(?ObjectType $generator) : void
    {
        $this->generator = $generator;
    }
    /**
     * @return ObjectType|null
     */
    public function getGenerator() : ?ObjectType
    {
        return $this->generator;
    }
    /**
     * @param MediaLink|null $icon
     */
    public function setIcon(?MediaLink $icon) : void
    {
        $this->icon = $icon;
    }
    /**
     * @return MediaLink|null
     */
    public function getIcon() : ?MediaLink
    {
        return $this->icon;
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
     * @param ObjectType|null $object
     */
    public function setObject(?ObjectType $object) : void
    {
        $this->object = $object;
    }
    /**
     * @return ObjectType|null
     */
    public function getObject() : ?ObjectType
    {
        return $this->object;
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
     * @param ObjectType|null $provider
     */
    public function setProvider(?ObjectType $provider) : void
    {
        $this->provider = $provider;
    }
    /**
     * @return ObjectType|null
     */
    public function getProvider() : ?ObjectType
    {
        return $this->provider;
    }
    /**
     * @param ObjectType|null $target
     */
    public function setTarget(?ObjectType $target) : void
    {
        $this->target = $target;
    }
    /**
     * @return ObjectType|null
     */
    public function getTarget() : ?ObjectType
    {
        return $this->target;
    }
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
    /**
     * @param string|null $verb
     */
    public function setVerb(?string $verb) : void
    {
        $this->verb = $verb;
    }
    /**
     * @return string|null
     */
    public function getVerb() : ?string
    {
        return $this->verb;
    }
}
