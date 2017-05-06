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

use PSX\Model\ActivityStream\Collection;
use PSX\Model\ActivityStream\ObjectType;
use PSX\Schema\Parser\Popo\Dumper;

/**
 * CollectionTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class CollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testCollection()
    {
        $items = array();

        $item = new ObjectType();
        $item->setContent('This was my first comment');
        $item->setUpdated(new \DateTime('2011-11-21T15:13:59+00:00'));
        $item->setId('f8f0e93f-e462-4ede-92cc-f6e8a1b7eb36');

        $items[] = $item;

        $item = new ObjectType();
        $item->setContent('This was another comment');
        $item->setUpdated(new \DateTime('2011-11-21T15:14:06+00:00'));
        $item->setId('5369ea82-d791-46cb-a87a-3696ff90d8f3');

        $items[] = $item;

        $collection = new Collection();
        $collection->setItems($items);
        $collection->setTotalItems(4);

        $dumper = new Dumper();
        $actual = json_encode($dumper->dump($collection), JSON_PRETTY_PRINT);
        $expect = <<<JSON
  {
    "totalItems": 4,
    "items": [{
    	"id": "f8f0e93f-e462-4ede-92cc-f6e8a1b7eb36",
    	"content": "This was my first comment",
    	"updated": "2011-11-21T15:13:59Z"
    },{
    	"id": "5369ea82-d791-46cb-a87a-3696ff90d8f3",
    	"content": "This was another comment",
    	"updated": "2011-11-21T15:14:06Z"
    }]
  }
JSON;

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }
}
