<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A SpeakableSpecification indicates (typically via <a class=""localLink"" href=""http://schema.org/xpath"">xpath</a> or <a class=""localLink"" href=""http://schema.org/cssSelector"">cssSelector</a>) sections of a document that are highlighted as particularly <a class=""localLink"" href=""http://schema.org/speakable"">speakable</a>. Instances of this type are expected to be used primarily as values of the <a class=""localLink"" href=""http://schema.org/speakable"">speakable</a> property.")
 */
class SpeakableSpecification extends Intangible
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
}
