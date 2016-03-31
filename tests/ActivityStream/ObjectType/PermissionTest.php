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
 * PermissionTest
 *
 * @author  Christoph Kappestein <k42b3.x@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class PermissionTest extends SerializeTestAbstract
{
    public function testPermission()
    {
        $file = new ObjectType();
        $file->setObjectType('file');
        $file->setDisplayName('2Q2014 Sales Forecast.xls');

        $html = new ObjectType();
        $html->setObjectType('inline-html');
        $html->setContent('<video ... />');

        $share = new ObjectType();
        $share->setObjectType('service');
        $share->setDisplayName('My Sharing Service');
        $share->setUrl('http://example.net/share');

        $permission = new ObjectType\Permission();
        $permission->setDisplayName('Permission to Edit File: 2Q2014 Sales Forecast.xls');
        $permission->setScope($file);

        $content = <<<JSON
  {
    "objectType": "permission",
    "displayName": "Permission to Edit File: 2Q2014 Sales Forecast.xls",
    "scope": {
      "objectType": "file",
      "displayName": "2Q2014 Sales Forecast.xls"
    }
  }
JSON;

        $this->assertRecordEqualsContent($permission, $content);

        $this->assertEquals($file, $permission->getScope());
    }
}
