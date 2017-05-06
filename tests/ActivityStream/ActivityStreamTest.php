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

use PSX\Model\ActivityStream\Activity;
use PSX\Model\ActivityStream\ObjectType;
use PSX\Schema\Parser\Popo\Dumper;

/**
 * ActivityStreamTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class ActivityStreamTest extends \PHPUnit_Framework_TestCase
{
    public function testModel()
    {
        $actor = new ObjectType();
        $actor->setUrl('http://example.org/martin');
        $actor->setObjectType('person');
        $actor->setId('tag:example.org,2011:martin');
        $actor->setImage('http://example.org/martin/image');
        $actor->setDisplayName('Martin Smith');

        $object = new ObjectType();
        $object->setUrl('http://example.org/blog/2011/02/entry');
        $object->setId('tag:example.org,2011:abc123/xyz');

        $target = new ObjectType();
        $target->setUrl('http://example.org/blog/');
        $target->setObjectType('blog');
        $target->setId('tag:example.org,2011:abc123');
        $target->setDisplayName('Martin\'s Blog');

        $activity = new Activity();
        $activity->setPublished(new \DateTime('2016-12-15T21:54:00'));
        $activity->setActor($actor);
        $activity->setVerb('post');
        $activity->setObject($object);
        $activity->setTarget($target);

        $dumper = new Dumper();
        $actual = json_encode($dumper->dump($activity), JSON_PRETTY_PRINT);
        $expect = <<<'JSON'
{
    "actor": {
        "displayName": "Martin Smith",
        "id": "tag:example.org,2011:martin",
        "image": "http:\/\/example.org\/martin\/image",
        "objectType": "person",
        "url": "http:\/\/example.org\/martin"
    },
    "object": {
        "id": "tag:example.org,2011:abc123\/xyz",
        "url": "http:\/\/example.org\/blog\/2011\/02\/entry"
    },
    "published": "2016-12-15T21:54:00Z",
    "target": {
        "displayName": "Martin's Blog",
        "id": "tag:example.org,2011:abc123",
        "objectType": "blog",
        "url": "http:\/\/example.org\/blog\/"
    },
    "verb": "post",
    "objectType": "activity"
}
JSON;

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }
}
