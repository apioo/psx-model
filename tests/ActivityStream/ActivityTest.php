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
use PSX\Model\ActivityStream\Collection;
use PSX\Model\ActivityStream\ObjectType;
use PSX\Schema\Parser\Popo\Dumper;

/**
 * ActivityTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class ActivityTest extends \PHPUnit_Framework_TestCase
{
    public function testActivity()
    {
        $actor = new ObjectType();
        $actor->setObjectType('person');
        $actor->setId('urn:example:person:martin');
        $actor->setDisplayName('Martin Smith');
        $actor->setUrl('http://example.org/martin');
        $actor->setImage('http://example.org/martin/image.jpg');

        $object = new ObjectType();
        $object->setObjectType('article');
        $object->setId('urn:example:blog:abc123/xyz');
        $object->setUrl('http://example.org/blog/2011/02/entry');
        $object->setDisplayName('Why I love Activity Streams');

        $target = new ObjectType();
        $target->setObjectType('blog');
        $target->setId('urn:example:blog:abc123');
        $target->setDisplayName('Martin\'s Blog');
        $target->setUrl('http://example.org/blog/');

        $activity = new Activity();
        $activity->setVerb('post');
        $activity->setPublished(new \DateTime('2011-02-10T15:04:55Z'));
        $activity->setActor($actor);
        $activity->setObject($object);
        $activity->setTarget($target);

        $dumper = new Dumper();
        $actual = json_encode($dumper->dump($activity), JSON_PRETTY_PRINT);
        $expect = <<<JSON
{
  "objectType": "activity",
  "verb": "post",
  "actor": {
    "id": "urn:example:person:martin",
    "objectType": "person",
    "displayName": "Martin Smith",
    "url": "http://example.org/martin",
    "image": "http://example.org/martin/image.jpg"
  },
  "object": {
    "id": "urn:example:blog:abc123/xyz",
    "objectType": "article",
    "displayName": "Why I love Activity Streams",
    "url": "http://example.org/blog/2011/02/entry"
  },
  "target": {
    "id": "urn:example:blog:abc123",
    "objectType": "blog",
    "displayName": "Martin's Blog",
    "url": "http://example.org/blog/"
  },
  "published": "2011-02-10T15:04:55Z"
}
JSON;

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }

    public function testComplexActivity()
    {
        $generator = new ObjectType();
        $generator->setUrl('http://example.org/activities-app');

        $provider = new ObjectType();
        $provider->setUrl('http://example.org/activity-stream');

        $actor = new ObjectType();
        $actor->setUrl('http://example.org/martin');
        $actor->setObjectType('person');
        $actor->setId('urn:example:person:martin');
        $actor->setImage('http://example.org/martin/image');
        $actor->setDisplayName('Martin Smith');

        $object = new ObjectType();
        $object->setUrl('http://example.org/album/my_fluffy_cat.jpg');
        $object->setObjectType('photo');
        $object->setId('urn:example:album:abc123/my_fluffy_cat');
        $object->setImage('http://example.org/album/my_fluffy_cat_thumb.jpg');

        $target = new ObjectType();
        $target->setUrl('http://example.org/album/');
        $target->setObjectType('photo-album');
        $target->setId('urn:example.org:album:abc123');
        $target->setDisplayName('Grianghraif Mairtin');
        $target->setImage('http://example.org/album/thumbnail.jpg');

        $activity = new Activity();
        $activity->setVerb('post');
        $activity->setDisplayName('Martin posted a new video to his album.');
        $activity->setPublished(new \DateTime('2011-02-10T15:04:55Z'));
        $activity->setGenerator($generator);
        $activity->setProvider($provider);
        $activity->setActor($actor);
        $activity->setObject($object);
        $activity->setTarget($target);

        $collection = new Collection();
        $collection->setTotalItems(1);
        $collection->setItems([$activity]);

        $dumper = new Dumper();
        $actual = json_encode($dumper->dump($collection), JSON_PRETTY_PRINT);
        $expect = <<<JSON
{
  "totalItems": 1,
  "items": [{
      "objectType": "activity",
      "verb": "post",
      "published": "2011-02-10T15:04:55Z",
      "displayName": "Martin posted a new video to his album.",
      "generator": {
        "url": "http://example.org/activities-app"
      },
      "provider": {
        "url": "http://example.org/activity-stream"
      },
      "actor": {
        "objectType": "person",
        "id": "urn:example:person:martin",
        "displayName": "Martin Smith",
        "url": "http://example.org/martin",
        "image": "http://example.org/martin/image"
      },
      "object": {
        "objectType": "photo",
        "id": "urn:example:album:abc123/my_fluffy_cat",
        "url": "http://example.org/album/my_fluffy_cat.jpg",
        "image": "http://example.org/album/my_fluffy_cat_thumb.jpg"
      },
      "target": {
        "objectType": "photo-album",
        "id": "urn:example.org:album:abc123",
        "url": "http://example.org/album/",
        "displayName": "Grianghraif Mairtin",
        "image": "http://example.org/album/thumbnail.jpg"
      }
    }]
}
JSON;

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }
}
