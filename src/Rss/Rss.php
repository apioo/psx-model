<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2017 Christoph Kappestein <christoph.kappestein@gmail.com>
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

namespace PSX\Model\Rss;

/**
 * Rss
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 * @see     http://cyber.law.harvard.edu/rss/rss.html
 * @AdditionalProperties(false)
 */
class Rss
{
    /**
     * @Type("string")
     */
    protected $title;

    /**
     * @Type("string")
     */
    protected $link;

    /**
     * @Type("string")
     */
    protected $description;

    /**
     * @Type("string")
     */
    protected $language;

    /**
     * @Type("string")
     */
    protected $copyright;

    /**
     * @Type("string")
     */
    protected $managingEditor;

    /**
     * @Type("string")
     */
    protected $webMaster;

    /**
     * @Type("string")
     */
    protected $generator;

    /**
     * @Type("string")
     */
    protected $docs;

    /**
     * @Type("integer")
     */
    protected $ttl;

    /**
     * @Type("string")
     */
    protected $image;

    /**
     * @Type("string")
     */
    protected $rating;

    /**
     * @Type("integer")
     */
    protected $skipHours;

    /**
     * @Type("string")
     */
    protected $skipDays;

    /**
     * @Type("array")
     * @Items(@Ref("PSX\Model\Rss\Category"))
     */
    protected $category;

    /**
     * @Type("string")
     * @Format("date-time")
     */
    protected $pubDate;

    /**
     * @Type("string")
     * @Format("date-time")
     */
    protected $lastBuildDate;

    /**
     * @Ref("PSX\Model\Rss\Cloud")
     */
    protected $cloud;

    /**
     * @Type("array")
     * @Items(@Ref("PSX\Model\Rss\Item"))
     */
    protected $item;

    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    public function getTitle()
    {
        return $this->title;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }
    
    public function getLink()
    {
        return $this->link;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function getDescription()
    {
        return $this->description;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }
    
    public function getLanguage()
    {
        return $this->language;
    }

    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
    }
    
    public function getCopyright()
    {
        return $this->copyright;
    }

    public function setManagingEditor($managingEditor)
    {
        $this->managingEditor = $managingEditor;
    }
    
    public function getManagingEditor()
    {
        return $this->managingEditor;
    }

    public function setWebMaster($webMaster)
    {
        $this->webMaster = $webMaster;
    }
    
    public function getWebMaster()
    {
        return $this->webMaster;
    }

    public function setGenerator($generator)
    {
        $this->generator = $generator;
    }
    
    public function getGenerator()
    {
        return $this->generator;
    }

    public function setDocs($docs)
    {
        $this->docs = $docs;
    }
    
    public function getDocs()
    {
        return $this->docs;
    }

    public function setTtl($ttl)
    {
        $this->ttl = $ttl;
    }

    public function getTtl()
    {
        return $this->ttl;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
    
    public function getImage()
    {
        return $this->image;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }
    
    public function getRating()
    {
        return $this->rating;
    }

    public function setSkipHours($skipHours)
    {
        $this->skipHours = $skipHours;
    }

    public function getSkipHours()
    {
        return $this->skipHours;
    }

    public function setSkipDays($skipDays)
    {
        $this->skipDays = $skipDays;
    }
    
    public function getSkipDays()
    {
        return $this->skipDays;
    }

    public function addCategory(Category $category)
    {
        if ($this->category === null) {
            $this->category = array();
        }

        $this->category[] = $category;
    }

    public function setCategory(array $category)
    {
        $this->category = $category;
    }
    
    public function getCategory()
    {
        return $this->category;
    }

    public function setPubDate(\DateTime $pubDate)
    {
        $this->pubDate = $pubDate;
    }
    
    public function getPubDate()
    {
        return $this->pubDate;
    }

    public function setLastBuildDate(\DateTime $lastBuildDate)
    {
        $this->lastBuildDate = $lastBuildDate;
    }
    
    public function getLastBuildDate()
    {
        return $this->lastBuildDate;
    }

    public function setCloud(Cloud $cloud)
    {
        $this->cloud = $cloud;
    }
    
    public function getCloud()
    {
        return $this->cloud;
    }

    public function setItem($item)
    {
        $this->item = $item;
    }
    
    public function getItem()
    {
        return $this->item;
    }

    public function addItem(Item $item)
    {
        if ($this->item === null) {
            $this->item = array();
        }

        $this->item[] = $item;
    }
}
