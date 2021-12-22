<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of capturing still images of objects using a camera.')]
class PhotographAction extends CreateAction implements \JsonSerializable
{
}

