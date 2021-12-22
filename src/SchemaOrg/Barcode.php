<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An image of a visual machine-readable code such as a barcode or QR code.')]
class Barcode extends ImageObject implements \JsonSerializable
{
}

