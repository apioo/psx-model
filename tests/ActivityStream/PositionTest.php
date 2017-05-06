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

use PSX\Model\ActivityStream\Position;
use PSX\Schema\Parser\Popo\Dumper;

/**
 * PositionTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class PositionTest extends \PHPUnit_Framework_TestCase
{
    public function testPosition()
    {
        $position = new Position();
        $position->setLatitude(34.34);
        $position->setLongitude(-127.23);
        $position->setAltitude(100.05);

        $dumper = new Dumper();
        $actual = json_encode($dumper->dump($position), JSON_PRETTY_PRINT);
        $expect = <<<JSON
{
  "latitude": 34.34,
  "longitude": -127.23,
  "altitude": 100.05
}
JSON;

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }
}
