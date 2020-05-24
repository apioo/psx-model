<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2018 Christoph Kappestein <christoph.kappestein@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace PSX\Model\ActivityStream;

use DateTime;

/**
 * Activity
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class Activity extends ObjectType
{
    /**
     * @var \PSX\Model\ActivityStream\ObjectType
     */
    protected $actor;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var \PSX\Model\ActivityStream\ObjectType
     */
    protected $generator;

    /**
     * @var \PSX\Model\ActivityStream\MediaLink
     */
    protected $icon;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var \PSX\Model\ActivityStream\ObjectType
     */
    protected $object;

    /**
     * @var \DateTime
     */
    protected $published;

    /**
     * @var \PSX\Model\ActivityStream\ObjectType
     */
    protected $provider;

    /**
     * @var \PSX\Model\ActivityStream\ObjectType
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

    public function __construct()
    {
        $this->objectType = 'activity';
    }

    public function getActor(): ?ObjectType
    {
        return $this->actor;
    }

    public function setActor(ObjectType $actor)
    {
        $this->actor = $actor;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function getGenerator(): ?ObjectType
    {
        return $this->generator;
    }

    public function setGenerator(ObjectType $generator)
    {
        $this->generator = $generator;
    }

    public function getIcon(): ?MediaLink
    {
        return $this->icon;
    }

    public function setIcon(MediaLink $icon)
    {
        $this->icon = $icon;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function getObject(): ?ObjectType
    {
        return $this->object;
    }

    public function setObject(ObjectType $object)
    {
        $this->object = $object;
    }

    public function getPublished(): ?DateTime
    {
        return $this->published;
    }

    public function setPublished(DateTime $published)
    {
        $this->published = $published;
    }

    public function getProvider(): ?ObjectType
    {
        return $this->provider;
    }

    public function setProvider(ObjectType $provider)
    {
        $this->provider = $provider;
    }

    public function getTarget(): ?ObjectType
    {
        return $this->target;
    }

    public function setTarget(ObjectType $target)
    {
        $this->target = $target;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getUpdated(): ?DateTime
    {
        return $this->updated;
    }

    public function setUpdated(DateTime $updated)
    {
        $this->updated = $updated;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    public function getVerb(): ?string
    {
        return $this->verb;
    }

    public function setVerb(string $verb)
    {
        $this->verb = $verb;
    }
}
