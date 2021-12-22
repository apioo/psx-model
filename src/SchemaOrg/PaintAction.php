<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of producing a painting, typically with paint and canvas as instruments.')]
class PaintAction extends CreateAction implements \JsonSerializable
{
}

