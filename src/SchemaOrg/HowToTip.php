<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An explanation in the instructions for how to achieve a result. It provides supplementary information about a technique, supply, author\'s preference, etc. It can explain what could be done, or what should not be done, but doesn\'t specify what should be done (see HowToDirection).')]
class HowToTip extends CreativeWork implements \JsonSerializable
{
}

