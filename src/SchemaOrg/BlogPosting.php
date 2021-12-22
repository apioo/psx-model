<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A blog post.')]
class BlogPosting extends SocialMediaPosting implements \JsonSerializable
{
}

