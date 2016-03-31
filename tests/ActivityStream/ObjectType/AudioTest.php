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

namespace PSX\Model\Tests\ActivityStream\ObjectType;

use PSX\Data\Tests\SerializeTestAbstract;
use PSX\Model\ActivityStream\ObjectType;

/**
 * AudioTest
 *
 * @author  Christoph Kappestein <k42b3.x@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class AudioTest extends SerializeTestAbstract
{
    public function testAudio()
    {
        $stream = new ObjectType();
        $stream->setUrl('http://example.org/my_audio.mp3');

        $audio = new ObjectType\Audio();
        $audio->setDisplayName('Cute little kittens');
        $audio->setEmbedCode('<audio controls=\'controls\'>...</audio>');
        $audio->setStream($stream);

        $content = <<<JSON
  {
    "objectType": "audio",
    "displayName": "Cute little kittens",
    "embedCode": "<audio controls='controls'>...</audio>",
    "stream": {
      "url": "http://example.org/my_audio.mp3"
    }
  }
JSON;

        $this->assertRecordEqualsContent($audio, $content);

        $this->assertEquals('<audio controls=\'controls\'>...</audio>', $audio->getEmbedCode());
        $this->assertEquals($stream, $audio->getStream());
    }
}
