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
 * @Title("MediaType")
 * @Description("Each Media Type Object provides schema and examples for the media type identified by its key.")
 * @PatternProperties(pattern="^x-", property=@Schema(description="Any property starting with x- is valid."))
 * @AdditionalProperties(false)
 */
class MediaType extends \ArrayObject
{
    /**
     * @Key("schema")
     * @Type("object")
     */
    protected $schema;
    
    /**
     * @Key("example")
     */
    protected $example;
    
    /**
     * @Key("examples")
     * @OneOf(@Ref("PSX\Model\OpenAPI\Example"), @Ref("PSX\Model\OpenAPI\Reference"))
     */
    protected $examples;
    
    /**
     * @Key("encoding")
     * @Ref("PSX\Model\OpenAPI\Encodings")
     */
    protected $encoding;

    public function setSchema($schema)
    {
        $this->schema = $schema;
    }

    public function getSchema()
    {
        return $this->schema;
    }

    public function setExample($example)
    {
        $this->example = $example;
    }

    public function getExample()
    {
        return $this->example;
    }

    public function setExamples($examples)
    {
        $this->examples = $examples;
    }

    public function getExamples()
    {
        return $this->examples;
    }

    public function setEncoding(Encodings $encoding)
    {
        $this->encoding = $encoding;
    }

    public function getEncoding()
    {
        return $this->encoding;
    }
}
