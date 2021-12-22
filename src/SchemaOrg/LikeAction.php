<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of expressing a positive sentiment about the object. An agent likes an object (a proposition, topic or theme) with participants.')]
class LikeAction extends ReactAction implements \JsonSerializable
{
}

