<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A LegalService is a business that provides legally-oriented services, advice and representation, e.g. law firms.<br/><br/>

As a <a class="localLink" href="http://schema.org/LocalBusiness">LocalBusiness</a> it can be described as a <a class="localLink" href="http://schema.org/provider">provider</a> of one or more <a class="localLink" href="http://schema.org/Service">Service</a>(s).')]
class LegalService extends LocalBusiness implements \JsonSerializable
{
}

