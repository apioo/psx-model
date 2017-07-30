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

namespace PSX\Model\OpenAPI;

/**
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 * @Title("Encoding")
 * @Description("A single encoding definition applied to a single schema property.")
 * @PatternProperties(pattern="^x-", property=@Schema(description="Any property starting with x- is valid."))
 * @AdditionalProperties(false)
 */
class Encoding extends \ArrayObject
{
    /**
     * @Key("contentType")
     * @Type("string")
     */
    protected $contentType;
    
    /**
     * @Key("headers")
     * @Ref("PSX\Model\OpenAPI\Headers")
     */
    protected $headers;
    
    /**
     * @Key("style")
     * @Type("string")
     */
    protected $style;
    
    /**
     * @Key("explode")
     * @Type("boolean")
     */
    protected $explode;
    
    /**
     * @Key("allowReserved")
     * @Type("boolean")
     */
    protected $allowReserved;

    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    public function getContentType()
    {
        return $this->contentType;
    }

    public function setHeaders(Headers $headers)
    {
        $this->headers = $headers;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function setStyle($style)
    {
        $this->style = $style;
    }

    public function getStyle()
    {
        return $this->style;
    }

    public function setExplode($explode)
    {
        $this->explode = $explode;
    }

    public function getExplode()
    {
        return $this->explode;
    }

    public function setAllowReserved($allowReserved)
    {
        $this->allowReserved = $allowReserved;
    }

    public function getAllowReserved()
    {
        return $this->allowReserved;
    }
}
