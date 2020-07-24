<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A web page element, like a table or an image.")
 */
class WebPageElement extends CreativeWork implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $cssSelector;
    /**
     * @var string|null
     */
    protected $xpath;
    /**
     * @param string|null $cssSelector
     */
    public function setCssSelector(?string $cssSelector) : void
    {
        $this->cssSelector = $cssSelector;
    }
    /**
     * @return string|null
     */
    public function getCssSelector() : ?string
    {
        return $this->cssSelector;
    }
    /**
     * @param string|null $xpath
     */
    public function setXpath(?string $xpath) : void
    {
        $this->xpath = $xpath;
    }
    /**
     * @return string|null
     */
    public function getXpath() : ?string
    {
        return $this->xpath;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('cssSelector' => $this->cssSelector, 'xpath' => $this->xpath), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
