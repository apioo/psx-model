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

namespace PSX\Model\Tests\ActivityStream;

use PHPUnit\Framework\TestCase;
use PSX\Model\ActivityStream\Address;

/**
 * AddressTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class AddressTest extends TestCase
{
    public function testAddress()
    {
        $address = new Address();
        $address->setFormatted('111 North First Street, New York, NY 11111');
        $address->setStreetAddress('111 North First Street');
        $address->setLocality('New York');
        $address->setRegion('NY');
        $address->setPostalCode('11111');
        $address->setCountry('US');

        $actual = json_encode($address, JSON_PRETTY_PRINT);
        $expect = file_get_contents(__DIR__ . '/resource/address.json');

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }
}
