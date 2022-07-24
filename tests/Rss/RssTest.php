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

namespace PSX\Model\Tests\Atom;

use PHPUnit\Framework\TestCase;
use PSX\DateTime\DateTime;
use PSX\Model\Rss\Category;
use PSX\Model\Rss\Cloud;
use PSX\Model\Rss\Enclosure;
use PSX\Model\Rss\Item;
use PSX\Model\Rss\Rss;
use PSX\Model\Rss\Source;

/**
 * RssTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class RssTest extends TestCase
{
    public function testModel()
    {
        $category = new Category();
        $category->setText('Newspapers');
        
        $enclosure = new Enclosure();
        $enclosure->setUrl('http://www.scripting.com/mp3s/weatherReportSuite.mp3');
        $enclosure->setLength(12216320);
        $enclosure->setType('audio/mpeg');

        $source = new Source();
        $source->setText('Tomalak\'s Realm');
        $source->setUrl('http://www.tomalak.org/links2.xml');

        $item = new Item();
        $item->setTitle('Star City');
        $item->setLink('http://liftoff.msfc.nasa.gov/news/2003/news-starcity.asp');
        $item->setDescription('How do Americans get ready to work with Russians aboard the International Space Station? They take a crash course in culture, language and protocol at Russia\'s <a href="http://howe.iki.rssi.ru/GCTC/gctc_e.htm">Star City</a>.');
        $item->setAuthor('foobar');
        $item->setCategory([$category]);
        $item->setComments('http://localhost.com#comments');
        $item->setEnclosure($enclosure);
        $item->setGuid('http://liftoff.msfc.nasa.gov/2003/06/03.html#item573');
        $item->setPubDate(DateTime::fromDateTime(new \DateTime('Tue, 03 Jun 2003 09:39:21 GMT')));
        $item->setSource($source);

        $cloud = new Cloud();
        $cloud->setDomain('rpc.sys.com');
        $cloud->setPort(80);
        $cloud->setPath('/RPC2');
        $cloud->setRegisterProcedure('pingMe');
        $cloud->setProtocol('soap');

        $rss = new Rss();
        $rss->setTitle('Liftoff News');
        $rss->setLink('http://liftoff.msfc.nasa.gov/');
        $rss->setDescription('Liftoff to Space Exploration.');
        $rss->setLanguage('en-us');
        $rss->setCopyright('2014 foobar');
        $rss->setManagingEditor('editor@example.com');
        $rss->setWebMaster('webmaster@example.com');
        $rss->setGenerator('Weblog Editor 2.0');
        $rss->setDocs('http://blogs.law.harvard.edu/tech/rss');
        $rss->setTtl(60);
        $rss->setImage('http://localhost.com/image.png');
        $rss->setRating('en');
        $rss->setSkipHours(20);
        $rss->setSkipDays('Tuesday');
        $rss->setCategory([$category]);
        $rss->setPubDate(DateTime::fromDateTime(new \DateTime('Tue, 10 Jun 2003 04:00:00 GMT')));
        $rss->setLastBuildDate(DateTime::fromDateTime(new \DateTime('Tue, 10 Jun 2003 09:41:01 GMT')));
        $rss->setCloud($cloud);
        $rss->setItem([$item]);

        $actual = json_encode($rss, JSON_PRETTY_PRINT);
        $expect = file_get_contents(__DIR__ . '/resource/rss.json');

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }
}
