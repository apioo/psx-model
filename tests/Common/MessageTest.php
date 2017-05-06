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

namespace PSX\Model\Tests\Common;

use PSX\Model\Common\Message;

/**
 * MessageTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class MessageTest extends \PHPUnit_Framework_TestCase
{
    public function testSetGet()
    {
        $message = new Message('success', true);

        $this->assertEquals('success', $message->getMessage());
        $this->assertEquals(true, $message->hasSuccess());

        $message = new Message('failure', false);

        $this->assertEquals('failure', $message->getMessage());
        $this->assertEquals(false, $message->hasSuccess());

        $message->setMessage('success');
        $message->setSuccess(true);

        $this->assertEquals('success', $message->getMessage());
        $this->assertEquals(true, $message->hasSuccess());

        $this->assertEquals(array('message' => 'success', 'success' => true), $message->getProperties());
    }
}
