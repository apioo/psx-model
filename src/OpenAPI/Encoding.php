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
 * @Title("Encoding")
 * @Description("A single encoding definition applied to a single schema property.")
 */
class Encoding
{
    /**
     * @Key("contentType")
     * @var string
     */
    protected $contentType;
    
    /**
     * @Key("headers")
     * @var \PSX\Model\OpenAPI\Headers
     */
    protected $headers;
    
    /**
     * @Key("style")
     * @var string
     */
    protected $style;
    
    /**
     * @Key("explode")
     * @var boolean
     */
    protected $explode;
    
    /**
     * @Key("allowReserved")
     * @var boolean
     */
    protected $allowReserved;

    public function setContentType(string $contentType)
    {
        $this->contentType = $contentType;
    }

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function setHeaders(Headers $headers)
    {
        $this->headers = $headers;
    }

    public function getHeaders(): ?Headers
    {
        return $this->headers;
    }

    public function setStyle(string $style)
    {
        $this->style = $style;
    }

    public function getStyle(): ?string
    {
        return $this->style;
    }

    public function setExplode(bool $explode)
    {
        $this->explode = $explode;
    }

    public function getExplode(): ?bool
    {
        return $this->explode;
    }

    public function setAllowReserved(bool $allowReserved)
    {
        $this->allowReserved = $allowReserved;
    }

    public function getAllowReserved(): ?bool
    {
        return $this->allowReserved;
    }
}
