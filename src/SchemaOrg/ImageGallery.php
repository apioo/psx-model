<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Web page type: Image gallery page.')]
class ImageGallery extends MediaGallery implements \JsonSerializable
{
}

