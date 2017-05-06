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

namespace PSX\Model\Atom;

/**
 * Link
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 * @AdditionalProperties(false)
 */
class Link
{
    /**
     * @Type("string")
     */
    protected $href;

    /**
     * @Type("string")
     */
    protected $rel;

    /**
     * @Type("string")
     */
    protected $type;

    /**
     * @Type("string")
     */
    protected $hreflang;

    /**
     * @Type("string")
     */
    protected $title;

    /**
     * @Type("integer")
     */
    protected $length;

    public function __construct($href = null, $rel = null, $type = null, $hreflang = null, $title = null, $length = null)
    {
        if ($href !== null) {
            $this->setHref($href);
        }

        if ($rel !== null) {
            $this->setRel($rel);
        }

        if ($type !== null) {
            $this->setType($type);
        }

        if ($hreflang !== null) {
            $this->setHrefLang($hreflang);
        }

        if ($title !== null) {
            $this->setTitle($title);
        }

        if ($length !== null) {
            $this->setLength($length);
        }
    }

    public function setHref($href)
    {
        $this->href = $href;
    }
    
    public function getHref()
    {
        return $this->href;
    }

    public function setRel($rel)
    {
        $this->rel = $rel;
    }
    
    public function getRel()
    {
        return $this->rel;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
    
    public function getType()
    {
        return $this->type;
    }

    public function setHreflang($hreflang)
    {
        $this->hreflang = $hreflang;
    }
    
    public function getHreflang()
    {
        return $this->hreflang;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    public function getTitle()
    {
        return $this->title;
    }

    public function setLength($length)
    {
        $this->length = $length;
    }
    
    public function getLength()
    {
        return $this->length;
    }
}
