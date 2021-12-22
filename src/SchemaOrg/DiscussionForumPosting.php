<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A posting to a discussion forum.')]
class DiscussionForumPosting extends SocialMediaPosting implements \JsonSerializable
{
}

