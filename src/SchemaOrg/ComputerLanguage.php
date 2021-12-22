<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('This type covers computer programming languages such as Scheme and Lisp, as well as other language-like computer representations. Natural languages are best represented with the <a class="localLink" href="http://schema.org/Language">Language</a> type.')]
class ComputerLanguage extends Intangible implements \JsonSerializable
{
}

