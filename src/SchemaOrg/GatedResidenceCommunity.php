<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Residence type: Gated community.')]
class GatedResidenceCommunity extends Residence implements \JsonSerializable
{
}

