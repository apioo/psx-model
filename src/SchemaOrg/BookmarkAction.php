<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An agent bookmarks/flags/labels/tags/marks an object.')]
class BookmarkAction extends OrganizeAction implements \JsonSerializable
{
}

