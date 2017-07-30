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
 * @Title("ServerVariable")
 * @Description("An object representing a Server Variable for server URL template substitution.")
 * @PatternProperties(pattern="^x-", property=@Schema(description="Any property starting with x- is valid."))
 * @AdditionalProperties(false)
 * @Required({"default"})
 */
class ServerVariable extends \ArrayObject
{
    /**
     * @Key("enum")
     * @Type("array")
     * @Items(@Schema(type="string"))
     * @UniqueItems(true)
     */
    protected $enum;
    /**
     * @Key("default")
     * @Type("string")
     */
    protected $default;
    /**
     * @Key("description")
     * @Type("string")
     */
    protected $description;
    public function setEnum($enum)
    {
        $this->enum = $enum;
    }
    public function getEnum()
    {
        return $this->enum;
    }
    public function setDefault($default)
    {
        $this->default = $default;
    }
    public function getDefault()
    {
        return $this->default;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
}
