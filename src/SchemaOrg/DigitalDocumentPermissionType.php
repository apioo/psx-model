<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A type of permission which can be granted for accessing a digital document.')]
class DigitalDocumentPermissionType extends Enumeration implements \JsonSerializable
{
}

