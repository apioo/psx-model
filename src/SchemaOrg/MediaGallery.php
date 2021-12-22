<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Web page type: Media gallery page. A mixed-media page that can contains media such as images, videos, and other multimedia.')]
class MediaGallery extends CollectionPage implements \JsonSerializable
{
}

