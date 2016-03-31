<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2016 Christoph Kappestein <k42b3.x@gmail.com>
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

namespace PSX\Model\ActivityStream\ObjectType;

use PSX\Model\ActivityStream\ObjectType;

/**
 * Place
 *
 * @author  Christoph Kappestein <k42b3.x@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class Place extends ObjectType
{
    /**
     * @Type("\PSX\Model\ActivityStream\Position")
     */
    protected $position;

    /**
     * @Type("\PSX\Model\ActivityStream\Address")
     */
    protected $address;

    public function __construct()
    {
        $this->objectType = 'place';
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }
    
    public function getPosition()
    {
        return $this->position;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
    
    public function getAddress()
    {
        return $this->address;
    }
}
