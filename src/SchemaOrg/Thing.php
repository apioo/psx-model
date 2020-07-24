<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The most generic type of item.")
 */
class Thing implements \JsonSerializable
{
    /**
     * @var \PSX\Uri\Uri|string|PropertyValue|null
     */
    protected $identifier;
    /**
     * @var \PSX\Uri\Uri|null
     */
    protected $additionalType;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $alternateName;
    /**
     * @var string|null
     */
    protected $disambiguatingDescription;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var \PSX\Uri\Uri|ImageObject|null
     */
    protected $logo;
    /**
     * @var \PSX\Uri\Uri|ImageObject|null
     */
    protected $image;
    /**
     * @var \PSX\Uri\Uri|null
     */
    protected $url;
    /**
     * @var Action|null
     */
    protected $potentialAction;
    /**
     * @var \PSX\Uri\Uri|null
     */
    protected $sameAs;
    /**
     * @var Thing|\PSX\Uri\Uri|CreativeWork|null
     */
    protected $about;
    /**
     * @var \PSX\Uri\Uri|CreativeWork|null
     */
    protected $mainEntityOfPage;
    /**
     * @var CreativeWork|Event|null
     */
    protected $subjectOf;
    /**
     * @param \PSX\Uri\Uri|string|PropertyValue|null $identifier
     */
    public function setIdentifier($identifier) : void
    {
        $this->identifier = $identifier;
    }
    /**
     * @return \PSX\Uri\Uri|string|PropertyValue|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }
    /**
     * @param \PSX\Uri\Uri|null $additionalType
     */
    public function setAdditionalType(?\PSX\Uri\Uri $additionalType) : void
    {
        $this->additionalType = $additionalType;
    }
    /**
     * @return \PSX\Uri\Uri|null
     */
    public function getAdditionalType() : ?\PSX\Uri\Uri
    {
        return $this->additionalType;
    }
    /**
     * @param string|null $name
     */
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    /**
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string|null $alternateName
     */
    public function setAlternateName(?string $alternateName) : void
    {
        $this->alternateName = $alternateName;
    }
    /**
     * @return string|null
     */
    public function getAlternateName() : ?string
    {
        return $this->alternateName;
    }
    /**
     * @param string|null $disambiguatingDescription
     */
    public function setDisambiguatingDescription(?string $disambiguatingDescription) : void
    {
        $this->disambiguatingDescription = $disambiguatingDescription;
    }
    /**
     * @return string|null
     */
    public function getDisambiguatingDescription() : ?string
    {
        return $this->disambiguatingDescription;
    }
    /**
     * @param string|null $description
     */
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param \PSX\Uri\Uri|ImageObject|null $logo
     */
    public function setLogo($logo) : void
    {
        $this->logo = $logo;
    }
    /**
     * @return \PSX\Uri\Uri|ImageObject|null
     */
    public function getLogo()
    {
        return $this->logo;
    }
    /**
     * @param \PSX\Uri\Uri|ImageObject|null $image
     */
    public function setImage($image) : void
    {
        $this->image = $image;
    }
    /**
     * @return \PSX\Uri\Uri|ImageObject|null
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * @param \PSX\Uri\Uri|null $url
     */
    public function setUrl(?\PSX\Uri\Uri $url) : void
    {
        $this->url = $url;
    }
    /**
     * @return \PSX\Uri\Uri|null
     */
    public function getUrl() : ?\PSX\Uri\Uri
    {
        return $this->url;
    }
    /**
     * @param Action|null $potentialAction
     */
    public function setPotentialAction(?Action $potentialAction) : void
    {
        $this->potentialAction = $potentialAction;
    }
    /**
     * @return Action|null
     */
    public function getPotentialAction() : ?Action
    {
        return $this->potentialAction;
    }
    /**
     * @param \PSX\Uri\Uri|null $sameAs
     */
    public function setSameAs(?\PSX\Uri\Uri $sameAs) : void
    {
        $this->sameAs = $sameAs;
    }
    /**
     * @return \PSX\Uri\Uri|null
     */
    public function getSameAs() : ?\PSX\Uri\Uri
    {
        return $this->sameAs;
    }
    /**
     * @param Thing|\PSX\Uri\Uri|CreativeWork|null $about
     */
    public function setAbout($about) : void
    {
        $this->about = $about;
    }
    /**
     * @return Thing|\PSX\Uri\Uri|CreativeWork|null
     */
    public function getAbout()
    {
        return $this->about;
    }
    /**
     * @param \PSX\Uri\Uri|CreativeWork|null $mainEntityOfPage
     */
    public function setMainEntityOfPage($mainEntityOfPage) : void
    {
        $this->mainEntityOfPage = $mainEntityOfPage;
    }
    /**
     * @return \PSX\Uri\Uri|CreativeWork|null
     */
    public function getMainEntityOfPage()
    {
        return $this->mainEntityOfPage;
    }
    /**
     * @param CreativeWork|Event|null $subjectOf
     */
    public function setSubjectOf($subjectOf) : void
    {
        $this->subjectOf = $subjectOf;
    }
    /**
     * @return CreativeWork|Event|null
     */
    public function getSubjectOf()
    {
        return $this->subjectOf;
    }
    public function jsonSerialize()
    {
        return array_filter(array('identifier' => $this->identifier, 'additionalType' => $this->additionalType, 'name' => $this->name, 'alternateName' => $this->alternateName, 'disambiguatingDescription' => $this->disambiguatingDescription, 'description' => $this->description, 'logo' => $this->logo, 'image' => $this->image, 'url' => $this->url, 'potentialAction' => $this->potentialAction, 'sameAs' => $this->sameAs, 'about' => $this->about, 'mainEntityOfPage' => $this->mainEntityOfPage, 'subjectOf' => $this->subjectOf), static function ($value) : bool {
            return $value !== null;
        });
    }
}
