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

namespace PSX\Model\Tests\ActivityStream;

use PSX\Model\ActivityStream\ObjectType;
use PSX\Schema\Parser\Popo\Dumper;

/**
 * ObjectTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class ObjectTest extends \PHPUnit_Framework_TestCase
{
    public function testObject()
    {
        $laura = new ObjectType();
        $laura->setObjectType('person');
        $laura->setDisplayName('Laura');

        $object = new ObjectType();
        $object->setId('1');
        $object->setObjectType('person');
        $object->setDisplayName('foo');
        $object->setUrl('http://localhost.com');
        $object->setAuthor($laura);
        $object->setContent('foobar');
        $object->setImage('http://localhost.com/image.png');
        $object->setPublished(new \DateTime('2012-12-12T12:00:00Z'));
        $object->setSummary('foobar');
        $object->setUpdated(new \DateTime('2012-12-12T12:00:00Z'));

        $dumper = new Dumper();
        $actual = json_encode($dumper->dump($object), JSON_PRETTY_PRINT);
        $expect = <<<JSON
{
  "id": "1",
  "objectType": "person",
  "displayName": "foo",
  "url": "http://localhost.com",
  "author": {
    "objectType": "person",
    "displayName": "Laura"
  },
  "content": "foobar",
  "image": "http://localhost.com/image.png",
  "published": "2012-12-12T12:00:00Z",
  "summary": "foobar",
  "updated": "2012-12-12T12:00:00Z"
}
JSON;

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }
}
