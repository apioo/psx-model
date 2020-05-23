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
 * @Title("Response")
 * @Description("Describes a single response from an API Operation, including design-time, static  `links` to operations based on the response.")
 * @Required({"description"})
 */
class Response
{
    /**
     * @Key("description")
     * @var string
     */
    protected $description;
    
    /**
     * @Key("headers")
     * @var \PSX\Model\OpenAPI\Header|\PSX\Model\OpenAPI\Reference
     */
    protected $headers;
    
    /**
     * @Key("content")
     * @var \PSX\Model\OpenAPI\MediaTypes
     */
    protected $content;
    
    /**
     * @Key("links")
     * @var \PSX\Model\OpenAPI\Link|\PSX\Model\OpenAPI\Reference
     */
    protected $links;

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }

    /**
     * @return Header|Reference
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    public function setContent(MediaTypes $content)
    {
        $this->content = $content;
    }

    public function getContent(): ?MediaTypes
    {
        return $this->content;
    }

    public function setLinks($links)
    {
        $this->links = $links;
    }

    /**
     * @return Link|Reference
     */
    public function getLinks()
    {
        return $this->links;
    }
}
