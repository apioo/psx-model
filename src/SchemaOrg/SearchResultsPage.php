<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Web page type: Search results page.')]
class SearchResultsPage extends WebPage implements \JsonSerializable
{
}

