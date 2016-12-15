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

use PSX\Model\Rss\Category;
use PSX\Model\Rss\Enclosure;
use PSX\Model\Rss\Item;
use PSX\Model\Rss\Rss;
use PSX\Schema\Parser;
use PSX\Schema\Parser\Popo\Dumper;

/**
 * RssTest
 *
 * @author  Christoph Kappestein <k42b3.x@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class RssTest extends \PHPUnit_Framework_TestCase
{
    public function testModel()
    {
        $items = [];

        $item = new Item();
        $item->setTitle('title');
        $item->setLink('http://foo.bar');
        $item->setDescription('foobar');
        $item->setAuthor('author');
        $item->addCategory(new Category('foo'));
        $item->setComments('comments');
        $item->setEnclosure(new Enclosure('http://foo.com'));
        $item->setGuid('guid');
        $item->setPubDate(new \DateTime('2016-12-15T21:54:00'));

        $items[] = $item;

        $rss = new Rss();
        $rss->setTitle('foobar');
        $rss->setLink('http://foo.bar');
        $rss->setDescription('foobar');
        $rss->setLanguage('en');
        $rss->setCopyright('copyright');
        $rss->setManagingEditor('managingEditor');
        $rss->setWebMaster('webMaster');
        $rss->setGenerator('generator');
        $rss->setDocs('docs');
        $rss->setTtl(8600);
        $rss->setImage('image');
        $rss->setRating('rating');
        $rss->addCategory(new Category('foo'));
        $rss->setPubDate(new \DateTime('2016-12-15T21:54:00'));
        $rss->setLastBuildDate(new \DateTime('2016-12-15T21:54:00'));
        $rss->setItem($items);

        $dumper = new Dumper();
        $actual = json_encode($dumper->dump($rss), JSON_PRETTY_PRINT);
        $expect = <<<'JSON'
{
    "title": "foobar",
    "link": "http:\/\/foo.bar",
    "description": "foobar",
    "language": "en",
    "copyright": "copyright",
    "managingEditor": "managingEditor",
    "webMaster": "webMaster",
    "generator": "generator",
    "docs": "docs",
    "ttl": 8600,
    "image": "image",
    "rating": "rating",
    "category": [
        {
            "text": "foo"
        }
    ],
    "pubDate": "2016-12-15T21:54:00+00:00",
    "lastBuildDate": "2016-12-15T21:54:00+00:00",
    "item": [
        {
            "title": "title",
            "link": "http:\/\/foo.bar",
            "description": "foobar",
            "author": "author",
            "category": [
                {
                    "text": "foo"
                }
            ],
            "comments": "comments",
            "enclosure": {
                "url": "http:\/\/foo.com"
            },
            "guid": "guid",
            "pubDate": "2016-12-15T21:54:00+00:00"
        }
    ]
}
JSON;

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }
}
