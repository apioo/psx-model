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

namespace PSX\Model\Tests\AsyncAPI;

use PHPUnit\Framework\TestCase;
use PSX\Model\AsyncAPI\AsyncAPI;
use PSX\Model\AsyncAPI\Channel;
use PSX\Model\AsyncAPI\Channels;
use PSX\Model\AsyncAPI\Components;
use PSX\Model\AsyncAPI\HttpOperationBinding;
use PSX\Model\AsyncAPI\Message;
use PSX\Model\AsyncAPI\Operation;
use PSX\Model\AsyncAPI\OperationBindings;
use PSX\Model\AsyncAPI\Schemas;
use PSX\Model\OpenAPI\Info;
use PSX\Record\Record;
use PSX\Schema\Parser\Popo\Dumper;

/**
 * AsyncAPITest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class AsyncAPITest extends TestCase
{
    public function testModel()
    {
        $asyncAPI = new AsyncAPI();

        $info = new Info();
        $info->setTitle('Account Service');
        $info->setVersion('1.0.0');
        $info->setDescription('This service is in charge of processing user signups :rocket:');
        $asyncAPI->setInfo($info);

        $message = new Message();
        $message->setPayload(Record::fromArray(['$ref' => '#/components/schemas/Pet']));

        $http = new HttpOperationBinding();
        $http->setType('request');
        $http->setMethod('POST');

        $bindings = new OperationBindings();
        $bindings->setHttp($http);
        
        $operation = new Operation();
        $operation->setMessage($message);
        $operation->setBindings($bindings);

        $channel = new Channel();
        $channel->setPublish($operation);

        $channels = new Channels();
        $channels['user/signedup'] = $channel;
        $asyncAPI->setChannels($channels);

        // schema
        $schemas = new Schemas();

        $schemas['Pet'] = [
            'required' => ['id', 'name'],
            'properties' => [
                'id' => ['type' => 'integer', 'format' => 'int64'],
                'name' => ['type' => 'string'],
                'tag' => ['type' => 'string'],
            ]
        ];

        $components = new Components();
        $components->setSchemas($schemas);

        $asyncAPI->setComponents($components);
        
        $dumper = new Dumper();
        $actual = json_encode($dumper->dump($asyncAPI), JSON_PRETTY_PRINT);
        $expect = file_get_contents(__DIR__ . '/resources/asyncapi.json');

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }
}
