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

namespace PSX\Model\Tests\ActivityStream\Examples;

use PHPUnit\Framework\TestCase;
use PSX\DateTime\DateTime;
use PSX\Model\ActivityStream\Activity;
use PSX\Model\ActivityStream\Collection;
use PSX\Model\ActivityStream\ObjectType;

/**
 * IBMConnectionTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 * @see     http://www.w3.org/wiki/Activity_Streams
 */
class IBMBusinessProcessManagerTest extends TestCase
{
    public function testStream()
    {
        $author = new ObjectType();
        $author->setDisplayName('Internal TW Admin user');
        $author->setId('tw_admin');
        $author->setImage('http://foo.com/avatar.jpg');
        $author->setObjectType('PERSON');

        $item = new ObjectType();
        $item->setAuthor($author);
        $item->setContent('tagging Internal TW Admin user user');
        $item->setObjectType('COMMENT');
        $item->setPublished(new DateTime('2012-01-09T16:18:44+00:00'));

        $replies = new Collection();
        $replies->setItems([$item]);

        $actor = new ObjectType();
        $actor->setId('tw_admin');
        $actor->setDisplayName('Internal TW Admin user');
        $actor->setObjectType('PERSON');

        $object = new ObjectType();
        $object->setDisplayName('Task: Submit requisition');
        $object->setId('2078.3');
        $object->setObjectType('ibm.bpm.task');

        $activity = new Activity();
        $activity->setActor($actor);
        $activity->setContent('Internal TW Admin user completed the task titled Task: Submit requisition and associated with the Submit job requisition activity.');
        $activity->setObject($object);
        $activity->setPublished(new DateTime('2012-01-09T09:58:00+00:00'));
        $activity->setVerb('POST');

        $collection = new Collection();
        $collection->setTotalItems(1);
        $collection->setItems([$activity]);

        $actual = json_encode($collection, JSON_PRETTY_PRINT);
        $expect = file_get_contents(__DIR__ . '/../resource/ibm_process.json');

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }
}
