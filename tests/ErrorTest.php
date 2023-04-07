<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2023 Christoph Kappestein <christoph.kappestein@gmail.com>
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

namespace PSX\Model\Tests;

use PHPUnit\Framework\TestCase;
use PSX\AsyncAPI\AsyncAPI;
use PSX\AsyncAPI\Channel;
use PSX\AsyncAPI\Channels;
use PSX\AsyncAPI\Components;
use PSX\AsyncAPI\HttpOperationBinding;
use PSX\AsyncAPI\Message;
use PSX\AsyncAPI\Operation;
use PSX\AsyncAPI\OperationBindings;
use PSX\AsyncAPI\Schemas;
use PSX\Model\Error;
use PSX\OpenAPI\Info;
use PSX\Record\Record;

/**
 * ErrorTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class ErrorTest extends TestCase
{
    public function testModel()
    {
        $error = new Error();
        $error->setSuccess(true);
        $error->setMessage('A random error');

        $actual = json_encode($error, JSON_PRETTY_PRINT);
        $expect = file_get_contents(__DIR__ . '/resources/error.json');

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }
}
