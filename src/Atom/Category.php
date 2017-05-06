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
    protected $term;

    /**
     * @Type("string")
     */
    protected $scheme;

    /**
     * @Type("string")
     */
    protected $label;

    public function __construct($term = null, $scheme = null, $label = null)
    {
        if ($term !== null) {
            $this->setTerm($term);
        }

        if ($scheme !== null) {
            $this->setScheme($scheme);
        }

        if ($label !== null) {
            $this->setLabel($label);
        }
    }

    public function setTerm($term)
    {
        $this->term = $term;
    }
    
    public function getTerm()
    {
        return $this->term;
    }

    public function setScheme($scheme)
    {
        $this->scheme = $scheme;
    }
    
    public function getScheme()
    {
        return $this->scheme;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }
    
    public function getLabel()
    {
        return $this->label;
    }
}
