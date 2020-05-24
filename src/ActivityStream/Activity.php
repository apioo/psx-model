<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class Activity extends ObjectType
{
    /**
     * @var string
     */
    protected $objectType = 'activity';
    /**
     * @var ObjectType
     */
    protected $actor;
    /**
     * @var string
     */
    protected $content;
    /**
     * @var ObjectType
     */
    protected $generator;
    /**
     * @var MediaLink
     */
    protected $icon;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var ObjectType
     */
    protected $object;
    /**
     * @var \DateTime
     */
    protected $published;
    /**
     * @var ObjectType
     */
    protected $provider;
    /**
     * @var ObjectType
     */
    protected $target;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var \DateTime
     */
    protected $updated;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $verb;
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
     * @param ObjectType $actor
     */
    public function setActor(?ObjectType $actor)
    {
        $this->actor = $actor;
    }
    /**
     * @return ObjectType
     */
    public function getActor() : ?ObjectType
    {
        return $this->actor;
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
     * @param ObjectType $generator
     */
    public function setGenerator(?ObjectType $generator)
    {
        $this->generator = $generator;
    }
    /**
     * @return ObjectType
     */
    public function getGenerator() : ?ObjectType
    {
        return $this->generator;
    }
    /**
     * @param MediaLink $icon
     */
    public function setIcon(?MediaLink $icon)
    {
        $this->icon = $icon;
    }
    /**
     * @return MediaLink
     */
    public function getIcon() : ?MediaLink
    {
        return $this->icon;
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
     * @param ObjectType $object
     */
    public function setObject(?ObjectType $object)
    {
        $this->object = $object;
    }
    /**
     * @return ObjectType
     */
    public function getObject() : ?ObjectType
    {
        return $this->object;
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
     * @param ObjectType $provider
     */
    public function setProvider(?ObjectType $provider)
    {
        $this->provider = $provider;
    }
    /**
     * @return ObjectType
     */
    public function getProvider() : ?ObjectType
    {
        return $this->provider;
    }
    /**
     * @param ObjectType $target
     */
    public function setTarget(?ObjectType $target)
    {
        $this->target = $target;
    }
    /**
     * @return ObjectType
     */
    public function getTarget() : ?ObjectType
    {
        return $this->target;
    }
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
    /**
     * @param string $verb
     */
    public function setVerb(?string $verb)
    {
        $this->verb = $verb;
    }
    /**
     * @return string
     */
    public function getVerb() : ?string
    {
        return $this->verb;
    }
}
