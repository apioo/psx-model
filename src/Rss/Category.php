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
 * Category
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 * @AdditionalProperties(false)
 */
class Category
{
    /**
     * @Type("string")
     */
    protected $text;

    /**
     * @Type("string")
     */
    protected $domain;

    public function __construct($text = null, $domain = null)
    {
        if ($text !== null) {
            $this->setText($text);
        }

        if ($domain !== null) {
            $this->setDomain($domain);
        }
    }

    public function setText($text)
    {
        $this->text = $text;
    }
    
    public function getText()
    {
        return $this->text;
    }

    public function setDomain($domain)
    {
        $this->domain = $domain;
    }
    
    public function getDomain()
    {
        return $this->domain;
    }

    public function __toString()
    {
        return $this->text;
    }
}
