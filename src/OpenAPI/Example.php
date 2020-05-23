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

namespace PSX\Model\OpenAPI;

/**
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 * @Title("Example")
 */
class Example extends \ArrayObject
{
    /**
     * @Key("summary")
     * @var string
     */
    protected $summary;
    
    /**
     * @Key("description")
     * @var string
     */
    protected $description;
    
    /**
     * @Key("value")
     */
    protected $value;
    
    /**
     * @Key("externalValue")
     * @var string
     */
    protected $externalValue;

    public function setSummary(string $summary)
    {
        $this->summary = $summary;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setExternalValue(string $externalValue)
    {
        $this->externalValue = $externalValue;
    }

    public function getExternalValue(): ?string
    {
        return $this->externalValue;
    }
}
