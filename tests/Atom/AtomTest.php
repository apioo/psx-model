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
use PSX\Model\Atom\Atom;
use PSX\Model\Atom\Category;
use PSX\Model\Atom\Entry;
use PSX\Model\Atom\Generator;
use PSX\Model\Atom\Link;
use PSX\Model\Atom\Person;
use PSX\Model\Atom\Text;

/**
 * AtomTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class AtomTest extends TestCase
{
    public function testModel()
    {
        $person = new Person();
        $person->setName('foobar');
        $person->setUri('http://foo.com');
        $person->setEmail('foo@bar.com');

        $category = new Category();
        $category->setTerm('foobar');
        $category->setScheme('http://foo.com');
        $category->setLabel('Foobar');
        
        $text = new Text();
        $text->setContent('foobar');

        $link = new Link();
        $link->setHref('http://localhost.com');
        $link->setRel('me');
        $link->setType('application/xml');
        $link->setHreflang('en');
        $link->setTitle('Foobar');
        $link->setLength(1337);

        $entry = new Entry();
        $entry->setAuthor([$person]);
        $entry->setCategory([$category]);
        $entry->setContent($text);
        $entry->setContributor([$person]);
        $entry->setId('http://localhost.com#1');
        $entry->setRights('foo');
        $entry->setTitle('Star City');
        $entry->setPublished(DateTime::fromDateTime(new \DateTime('Tue, 10 Jun 2003 04:00:00 GMT')));
        $entry->setUpdated(DateTime::fromDateTime(new \DateTime('Tue, 10 Jun 2003 04:00:00 GMT')));
        $entry->setLink([$link]);
        $entry->setSummary($text);

        $generator = new Generator();
        $generator->setText('foobar');
        $generator->setUri('http://foo.com');
        $generator->setVersion('1.0');

        $atom = new Atom();
        $atom->setAuthor([$person]);
        $atom->setCategory([$category]);
        $atom->setContributor([$person]);
        $atom->setGenerator($generator);
        $atom->setIcon('http://localhost.com/icon.png');
        $atom->setLogo('http://localhost.com/logo.png');
        $atom->setId('http://localhost.com#1');
        $atom->setRights('foo');
        $atom->setTitle('Foo has bar');
        $atom->setUpdated(DateTime::fromDateTime(new \DateTime('Tue, 10 Jun 2003 04:00:00 GMT')));
        $atom->setLink([$link]);
        $atom->setSubTitle($text);
        $atom->setEntry([$entry]);

        $actual = json_encode($atom, JSON_PRETTY_PRINT);
        $expect = file_get_contents(__DIR__ . '/resource/atom.json');

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }
}
