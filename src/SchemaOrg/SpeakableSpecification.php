<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A SpeakableSpecification indicates (typically via <a class="localLink" href="http://schema.org/xpath">xpath</a> or <a class="localLink" href="http://schema.org/cssSelector">cssSelector</a>) sections of a document that are highlighted as particularly <a class="localLink" href="http://schema.org/speakable">speakable</a>. Instances of this type are expected to be used primarily as values of the <a class="localLink" href="http://schema.org/speakable">speakable</a> property.')]
class SpeakableSpecification extends Intangible implements \JsonSerializable
{
    protected ?string $cssSelector = null;
    protected ?string $xpath = null;
    public function setCssSelector(?string $cssSelector) : void
    {
        $this->cssSelector = $cssSelector;
    }
    public function getCssSelector() : ?string
    {
        return $this->cssSelector;
    }
    public function setXpath(?string $xpath) : void
    {
        $this->xpath = $xpath;
    }
    public function getXpath() : ?string
    {
        return $this->xpath;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('cssSelector' => $this->cssSelector, 'xpath' => $this->xpath), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

