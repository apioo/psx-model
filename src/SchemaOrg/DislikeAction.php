<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of expressing a negative sentiment about the object. An agent dislikes an object (a proposition, topic or theme) with participants.')]
class DislikeAction extends ReactAction implements \JsonSerializable
{
}

