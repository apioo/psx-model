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
 * ObjectType
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class ObjectType
{
    /**
     * @var array<\PSX\Model\ActivityStream\ObjectType>
     */
    protected $attachments;

    /**
     * @var \PSX\Model\ActivityStream\ObjectType
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

    public function getAttachments(): ?iterable
    {
        return $this->attachments;
    }

    public function setAttachments(iterable $attachments)
    {
        $this->attachments = $attachments;
    }

    public function getAuthor(): ?ObjectType
    {
        return $this->author;
    }

    public function setAuthor(ObjectType $author)
    {
        $this->author = $author;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(string $displayName)
    {
        $this->displayName = $displayName;
    }

    public function getDownstreamDuplicates(): ?iterable
    {
        return $this->downstreamDuplicates;
    }

    public function setDownstreamDuplicates(iterable $downstreamDuplicates)
    {
        $this->downstreamDuplicates = $downstreamDuplicates;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function getObjectType(): ?string
    {
        return $this->objectType;
    }

    public function setObjectType(string $objectType)
    {
        $this->objectType = $objectType;
    }

    public function getPublished(): ?DateTime
    {
        return $this->published;
    }

    public function setPublished(DateTime $published)
    {
        $this->published = $published;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(string $summary)
    {
        $this->summary = $summary;
    }

    public function getUpdated(): ?DateTime
    {
        return $this->updated;
    }

    public function setUpdated(DateTime $updated)
    {
        $this->updated = $updated;
    }

    public function getUpstreamDuplicates(): ?iterable
    {
        return $this->upstreamDuplicates;
    }

    public function setUpstreamDuplicates(iterable $upstreamDuplicates)
    {
        $this->upstreamDuplicates = $upstreamDuplicates;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url)
    {
        $this->url = $url;
    }
}
