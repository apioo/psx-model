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

namespace PSX\Model\Tests\OpenRPC;

use PHPUnit\Framework\TestCase;
use PSX\Model\OpenAPI\Info;
use PSX\Model\OpenAPI\License;
use PSX\Model\OpenAPI\Server;
use PSX\Model\OpenAPI\Tag;
use PSX\Model\OpenRPC\Components;
use PSX\Model\OpenRPC\ContentDescriptor;
use PSX\Model\OpenRPC\Error;
use PSX\Model\OpenRPC\ExampleObject;
use PSX\Model\OpenRPC\ExamplePairingObject;
use PSX\Model\OpenRPC\Method;
use PSX\Model\OpenRPC\OpenRPC;

/**
 * OpenRPCTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class OpenRPCTest extends TestCase
{
    public function testModel()
    {
        $license = new License();
        $license->setName('MIT');

        $info = new Info();
        $info->setVersion('1.0.0');
        $info->setTitle('Petstore');
        $info->setLicense($license);

        $server = new Server();
        $server->setUrl('http://localhost:8080');

        $tag = new Tag();
        $tag->setName('pets');

        $params = [];
        $content = new ContentDescriptor();
        $content->setName('limit');
        $content->setDescription('How many items to return at one time (max 100)');
        $content->setRequired(false);
        $content->setSchema((object) ['type' => 'integer', 'minimum' => 1]);
        $params[] = $content;

        $result = new ContentDescriptor();
        $result->setName('pets');
        $result->setDescription('A paged array of pets');
        $result->setSchema((object) ['$ref' => '#/components/schemas/Pets']);

        $errors = [];
        $error = new Error();
        $error->setCode(100);
        $error->setMessage('pets busy');
        $errors[] = $error;

        $examples = [];

        $paramExample = new ExampleObject();
        $paramExample->setName('limit');
        $paramExample->setValue(1);

        $resultExample = new ExampleObject();
        $resultExample->setName('listPetResultExample');
        $resultExample->setValue([
            (object) [
                'id' => 7,
                'name' => 'fluffy',
                'tag' => 'poodle',
            ]
        ]);

        $example = new ExamplePairingObject();
        $example->setName('listPetExample');
        $example->setDescription('List pet example');
        $example->setParams([$paramExample]);
        $example->setResult($resultExample);
        $examples[] = $example;

        $methods = [];
        $method = new Method();
        $method->setName('list_pets');
        $method->setSummary('List all pets');
        $method->setTags([$tag]);
        $method->setParams($params);
        $method->setResult($result);
        $method->setErrors($errors);
        $method->setExamples($examples);
        $methods[] = $method;

        $components = new Components();

        $openRPC = new OpenRPC();
        $openRPC->setInfo($info);
        $openRPC->setServers([$server]);
        $openRPC->setMethods($methods);
        $openRPC->setComponents($components);

        $actual = json_encode($openRPC, JSON_PRETTY_PRINT);
        $expect = file_get_contents(__DIR__ . '/resources/openrpc.json');

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }
}
