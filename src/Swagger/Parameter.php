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

namespace PSX\Model\Swagger;

use InvalidArgumentException;

/**
 * Parameter
 *
 * @author  Christoph Kappestein <k42b3.x@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class Parameter
{
    const TYPE_PATH   = 'path';
    const TYPE_QUERY  = 'query';
    const TYPE_BODY   = 'body';
    const TYPE_HEADER = 'header';
    const TYPE_FORM   = 'form';

    /**
     * @Type("string")
     * @Enum({"path", "query", "body", "header", "form"})
     * @Required
     */
    protected $paramType;

    /**
     * @Type("string")
     * @Required
     */
    protected $name;

    /**
     * @Type("string")
     */
    protected $description;

    /**
     * @Type("boolean")
     */
    protected $required;

    /**
     * @Type("boolean")
     */
    protected $allowMultiple;

    use DataTypeTrait;

    public function __construct($paramType = null, $name = null, $description = null, $required = null)
    {
        if ($paramType !== null) {
            $this->setParamType($paramType);
        }

        $this->name        = $name;
        $this->description = $description;
        $this->required    = $required;
    }

    public function setParamType($paramType)
    {
        if (!in_array($paramType, array(self::TYPE_PATH, self::TYPE_QUERY, self::TYPE_BODY, self::TYPE_HEADER, self::TYPE_FORM))) {
            throw new InvalidArgumentException('Invalid param type must be one of path, query, body, header, form');
        }

        $this->paramType = $paramType;
    }

    public function getParamType()
    {
        return $this->paramType;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setRequired($required)
    {
        $this->required = $required;
    }

    public function getRequired()
    {
        return $this->required;
    }

    public function setAllowMultiple($allowMultiple)
    {
        $this->allowMultiple = $allowMultiple;
    }

    public function getAllowMultiple()
    {
        return $this->allowMultiple;
    }
}
