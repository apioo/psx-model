<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2016 Christoph Kappestein <k42b3.x@gmail.com>
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

namespace PSX\Model\Tests\Atom;

use PSX\Model\Atom\Atom;
use PSX\Model\Atom\Category;
use PSX\Model\Atom\Entry;
use PSX\Model\Atom\Generator;
use PSX\Model\Atom\Link;
use PSX\Model\Atom\Person;
use PSX\Model\Atom\Text;
use PSX\Schema\Parser;
use PSX\Schema\Parser\Popo\Dumper;

/**
 * AtomTest
 *
 * @author  Christoph Kappestein <k42b3.x@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class AtomTest extends \PHPUnit_Framework_TestCase
{
    public function testModel()
    {
        $entries = [];

        $entry = new Entry();
        $entry->addAuthor(new Person('foo', 'http://foo.com', 'foo@bar.com'));
        $entry->addCategory(new Category('foo'));
        $entry->setContent(new Text('foobar', 'text/plain'));
        $entry->addContributor(new Person('foo', 'http://foo.com', 'foo@bar.com'));
        $entry->setId('urn:entry:id:1000');
        $entry->addLink(new Link('http://foo.com/entry/1'));
        $entry->setPublished(new \DateTime('2016-12-15T21:54:00'));
        $entry->setRights('rights');
        $entry->setSummary(new Text('summary'));
        $entry->setTitle('title');
        $entry->setUpdated(new \DateTime('2016-12-15T21:54:00'));

        $entries[] = $entry;
        
        $atom = new Atom();
        $atom->addAuthor(new Person('foo', 'http://foo.com', 'foo@bar.com'));
        $atom->addCategory(new Category('foo'));
        $atom->addContributor(new Person('foo', 'http://foo.com', 'foo@bar.com'));
        $atom->setGenerator(new Generator('test'));
        $atom->setIcon('icon');
        $atom->setLogo('logo');
        $atom->setId('urn:id:1000');
        $atom->addLink(new Link('http://foo.com'));
        $atom->setRights('rights');
        $atom->setSubTitle(new Text('foobar', 'text/html'));
        $atom->setTitle('bar');
        $atom->setUpdated(new \DateTime('2016-12-15T21:54:00'));
        $atom->setEntry($entries);

        $dumper = new Dumper();
        $actual = json_encode($dumper->dump($atom), JSON_PRETTY_PRINT);
        $expect = <<<'JSON'
{
    "author": [
        {
            "name": "foo",
            "uri": "http:\/\/foo.com",
            "email": "foo@bar.com"
        }
    ],
    "category": [
        {
            "term": "foo"
        }
    ],
    "contributor": [
        {
            "name": "foo",
            "uri": "http:\/\/foo.com",
            "email": "foo@bar.com"
        }
    ],
    "generator": {
        "text": "test"
    },
    "icon": "icon",
    "logo": "logo",
    "id": "urn:id:1000",
    "link": [
        {
            "href": "http:\/\/foo.com"
        }
    ],
    "rights": "rights",
    "subTitle": {
        "type": "text\/html",
        "content": "foobar"
    },
    "title": "bar",
    "updated": "2016-12-15T21:54:00Z",
    "entry": [
        {
            "author": [
                {
                    "name": "foo",
                    "uri": "http:\/\/foo.com",
                    "email": "foo@bar.com"
                }
            ],
            "category": [
                {
                    "term": "foo"
                }
            ],
            "content": {
                "type": "text\/plain",
                "content": "foobar"
            },
            "contributor": [
                {
                    "name": "foo",
                    "uri": "http:\/\/foo.com",
                    "email": "foo@bar.com"
                }
            ],
            "id": "urn:entry:id:1000",
            "link": [
                {
                    "href": "http:\/\/foo.com\/entry\/1"
                }
            ],
            "published": "2016-12-15T21:54:00Z",
            "rights": "rights",
            "summary": {
                "content": "summary"
            },
            "title": "title",
            "updated": "2016-12-15T21:54:00Z"
        }
    ]
}
JSON;

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }
}
