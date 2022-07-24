<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A web page element, like a table or an image.')]
class WebPageElement extends CreativeWork implements \JsonSerializable
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

