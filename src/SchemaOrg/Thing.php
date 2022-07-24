<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The most generic type of item.')]
class Thing implements \JsonSerializable
{
    protected \PSX\Uri\Uri|string|PropertyValue|null $identifier = null;
    protected ?\PSX\Uri\Uri $additionalType = null;
    protected ?string $name = null;
    protected ?string $alternateName = null;
    protected ?string $disambiguatingDescription = null;
    protected ?string $description = null;
    protected \PSX\Uri\Uri|ImageObject|null $logo = null;
    protected \PSX\Uri\Uri|ImageObject|null $image = null;
    protected ?\PSX\Uri\Uri $url = null;
    protected ?Action $potentialAction = null;
    protected ?\PSX\Uri\Uri $sameAs = null;
    protected Thing|\PSX\Uri\Uri|CreativeWork|null $about = null;
    protected \PSX\Uri\Uri|CreativeWork|null $mainEntityOfPage = null;
    protected CreativeWork|Event|null $subjectOf = null;
    public function setIdentifier(\PSX\Uri\Uri|string|PropertyValue|null $identifier) : void
    {
        $this->identifier = $identifier;
    }
    public function getIdentifier() : \PSX\Uri\Uri|string|PropertyValue|null
    {
        return $this->identifier;
    }
    public function setAdditionalType(?\PSX\Uri\Uri $additionalType) : void
    {
        $this->additionalType = $additionalType;
    }
    public function getAdditionalType() : ?\PSX\Uri\Uri
    {
        return $this->additionalType;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setAlternateName(?string $alternateName) : void
    {
        $this->alternateName = $alternateName;
    }
    public function getAlternateName() : ?string
    {
        return $this->alternateName;
    }
    public function setDisambiguatingDescription(?string $disambiguatingDescription) : void
    {
        $this->disambiguatingDescription = $disambiguatingDescription;
    }
    public function getDisambiguatingDescription() : ?string
    {
        return $this->disambiguatingDescription;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setLogo(\PSX\Uri\Uri|ImageObject|null $logo) : void
    {
        $this->logo = $logo;
    }
    public function getLogo() : \PSX\Uri\Uri|ImageObject|null
    {
        return $this->logo;
    }
    public function setImage(\PSX\Uri\Uri|ImageObject|null $image) : void
    {
        $this->image = $image;
    }
    public function getImage() : \PSX\Uri\Uri|ImageObject|null
    {
        return $this->image;
    }
    public function setUrl(?\PSX\Uri\Uri $url) : void
    {
        $this->url = $url;
    }
    public function getUrl() : ?\PSX\Uri\Uri
    {
        return $this->url;
    }
    public function setPotentialAction(?Action $potentialAction) : void
    {
        $this->potentialAction = $potentialAction;
    }
    public function getPotentialAction() : ?Action
    {
        return $this->potentialAction;
    }
    public function setSameAs(?\PSX\Uri\Uri $sameAs) : void
    {
        $this->sameAs = $sameAs;
    }
    public function getSameAs() : ?\PSX\Uri\Uri
    {
        return $this->sameAs;
    }
    public function setAbout(Thing|\PSX\Uri\Uri|CreativeWork|null $about) : void
    {
        $this->about = $about;
    }
    public function getAbout() : Thing|\PSX\Uri\Uri|CreativeWork|null
    {
        return $this->about;
    }
    public function setMainEntityOfPage(\PSX\Uri\Uri|CreativeWork|null $mainEntityOfPage) : void
    {
        $this->mainEntityOfPage = $mainEntityOfPage;
    }
    public function getMainEntityOfPage() : \PSX\Uri\Uri|CreativeWork|null
    {
        return $this->mainEntityOfPage;
    }
    public function setSubjectOf(CreativeWork|Event|null $subjectOf) : void
    {
        $this->subjectOf = $subjectOf;
    }
    public function getSubjectOf() : CreativeWork|Event|null
    {
        return $this->subjectOf;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('identifier' => $this->identifier, 'additionalType' => $this->additionalType, 'name' => $this->name, 'alternateName' => $this->alternateName, 'disambiguatingDescription' => $this->disambiguatingDescription, 'description' => $this->description, 'logo' => $this->logo, 'image' => $this->image, 'url' => $this->url, 'potentialAction' => $this->potentialAction, 'sameAs' => $this->sameAs, 'about' => $this->about, 'mainEntityOfPage' => $this->mainEntityOfPage, 'subjectOf' => $this->subjectOf), static function ($value) : bool {
            return $value !== null;
        });
    }
}

