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
 * Person
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 * @AdditionalProperties(false)
 */
class Person
{
    /**
     * @Type("string")
     */
    protected $name;

    /**
     * @Type("string")
     */
    protected $uri;

    /**
     * @Type("string")
     */
    protected $email;

    public function __construct($name = null, $uri = null, $email = null)
    {
        if ($name !== null) {
            $this->setName($name);
        }

        if ($uri !== null) {
            $this->setUri($uri);
        }

        if ($email !== null) {
            $this->setEmail($email);
        }
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setUri($uri)
    {
        $this->uri = $uri;
    }
    
    public function getUri()
    {
        return $this->uri;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
}
