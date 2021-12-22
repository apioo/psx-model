<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Professional service: Attorney. <br/><br/>

This type is deprecated - <a class="localLink" href="http://schema.org/LegalService">LegalService</a> is more inclusive and less ambiguous.')]
class Attorney extends LegalService implements \JsonSerializable
{
}

