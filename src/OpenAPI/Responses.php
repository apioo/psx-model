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
 * @Title("Responses")
 * @Description("A container for the expected responses of an operation. The container maps a HTTP response code to the expected response.  The documentation is not necessarily expected to cover all possible HTTP response codes because they may not be known in advance. However, documentation is expected to cover a successful operation response and any known errors.  The `default` MAY be used as a default response object for all HTTP codes  that are not covered individually by the specification.  The `Responses Object` MUST contain at least one response code, and it  SHOULD be the response for a successful operation call.")
 * @PatternProperties(pattern="^([0-9X]{3})$", property=@Schema(oneOf={@Ref("PSX\Model\OpenAPI\Response"), @Ref("PSX\Model\OpenAPI\Reference")}))
 * @PatternProperties(pattern="^x-", property=@Schema(description="Any property starting with x- is valid."))
 * @AdditionalProperties(false)
 */
class Responses extends \ArrayObject
{
    /**
     * @Key("default")
     * @OneOf(@Ref("PSX\Model\OpenAPI\Response"), @Ref("PSX\Model\OpenAPI\Reference"))
     */
    protected $default;

    public function setDefault($default)
    {
        $this->default = $default;
    }

    public function getDefault()
    {
        return $this->default;
    }

    public function set($code, $response)
    {
        $this->offsetSet($code, $response);
    }
}
