<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A Series in schema.org is a group of related items, typically but not necessarily of the same kind. See also <a class="localLink" href="http://schema.org/CreativeWorkSeries">CreativeWorkSeries</a>, <a class="localLink" href="http://schema.org/EventSeries">EventSeries</a>.')]
class Series extends Intangible implements \JsonSerializable
{
}

