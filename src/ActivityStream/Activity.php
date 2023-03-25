<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class Activity extends ObjectType implements \JsonSerializable
{
    protected ?string $objectType = 'activity';
    protected ?ObjectType $actor = null;
    protected ?string $content = null;
    protected ?ObjectType $generator = null;
    protected ?MediaLink $icon = null;
    protected ?string $id = null;
    protected ?ObjectType $object = null;
    protected ?\PSX\DateTime\LocalDateTime $published = null;
    protected ?ObjectType $provider = null;
    protected ?ObjectType $target = null;
    protected ?string $title = null;
    protected ?\PSX\DateTime\LocalDateTime $updated = null;
    protected ?string $url = null;
    protected ?string $verb = null;
    public function setObjectType(?string $objectType) : void
    {
        $this->objectType = $objectType;
    }
    public function getObjectType() : ?string
    {
        return $this->objectType;
    }
    public function setActor(?ObjectType $actor) : void
    {
        $this->actor = $actor;
    }
    public function getActor() : ?ObjectType
    {
        return $this->actor;
    }
    public function setContent(?string $content) : void
    {
        $this->content = $content;
    }
    public function getContent() : ?string
    {
        return $this->content;
    }
    public function setGenerator(?ObjectType $generator) : void
    {
        $this->generator = $generator;
    }
    public function getGenerator() : ?ObjectType
    {
        return $this->generator;
    }
    public function setIcon(?MediaLink $icon) : void
    {
        $this->icon = $icon;
    }
    public function getIcon() : ?MediaLink
    {
        return $this->icon;
    }
    public function setId(?string $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?string
    {
        return $this->id;
    }
    public function setObject(?ObjectType $object) : void
    {
        $this->object = $object;
    }
    public function getObject() : ?ObjectType
    {
        return $this->object;
    }
    public function setPublished(?\PSX\DateTime\LocalDateTime $published) : void
    {
        $this->published = $published;
    }
    public function getPublished() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->published;
    }
    public function setProvider(?ObjectType $provider) : void
    {
        $this->provider = $provider;
    }
    public function getProvider() : ?ObjectType
    {
        return $this->provider;
    }
    public function setTarget(?ObjectType $target) : void
    {
        $this->target = $target;
    }
    public function getTarget() : ?ObjectType
    {
        return $this->target;
    }
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    public function setUpdated(?\PSX\DateTime\LocalDateTime $updated) : void
    {
        $this->updated = $updated;
    }
    public function getUpdated() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->updated;
    }
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    public function getUrl() : ?string
    {
        return $this->url;
    }
    public function setVerb(?string $verb) : void
    {
        $this->verb = $verb;
    }
    public function getVerb() : ?string
    {
        return $this->verb;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('objectType' => $this->objectType, 'actor' => $this->actor, 'content' => $this->content, 'generator' => $this->generator, 'icon' => $this->icon, 'id' => $this->id, 'object' => $this->object, 'published' => $this->published, 'provider' => $this->provider, 'target' => $this->target, 'title' => $this->title, 'updated' => $this->updated, 'url' => $this->url, 'verb' => $this->verb), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

