<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A web page. Every web page is implicitly assumed to be declared to be of type WebPage, so the various properties about that webpage, such as <code>breadcrumb</code> may be used. We recommend explicit declaration if these properties are specified, but if they are found outside of an itemscope, they will be assumed to be about the page.')]
class WebPage extends CreativeWork implements \JsonSerializable
{
    protected ?\PSX\Uri\Uri $significantLink = null;
    protected string|BreadcrumbList|null $breadcrumb = null;
    protected ?\PSX\DateTime\Date $lastReviewed = null;
    protected ?Specialty $specialty = null;
    protected ?ImageObject $primaryImageOfPage = null;
    protected \PSX\Uri\Uri|SpeakableSpecification|null $speakable = null;
    protected Person|Organization|null $reviewedBy = null;
    protected ?\PSX\Uri\Uri $relatedLink = null;
    protected ?WebPageElement $mainContentOfPage = null;
    public function setSignificantLink(?\PSX\Uri\Uri $significantLink) : void
    {
        $this->significantLink = $significantLink;
    }
    public function getSignificantLink() : ?\PSX\Uri\Uri
    {
        return $this->significantLink;
    }
    public function setBreadcrumb(string|BreadcrumbList|null $breadcrumb) : void
    {
        $this->breadcrumb = $breadcrumb;
    }
    public function getBreadcrumb() : string|BreadcrumbList|null
    {
        return $this->breadcrumb;
    }
    public function setLastReviewed(?\PSX\DateTime\Date $lastReviewed) : void
    {
        $this->lastReviewed = $lastReviewed;
    }
    public function getLastReviewed() : ?\PSX\DateTime\Date
    {
        return $this->lastReviewed;
    }
    public function setSpecialty(?Specialty $specialty) : void
    {
        $this->specialty = $specialty;
    }
    public function getSpecialty() : ?Specialty
    {
        return $this->specialty;
    }
    public function setPrimaryImageOfPage(?ImageObject $primaryImageOfPage) : void
    {
        $this->primaryImageOfPage = $primaryImageOfPage;
    }
    public function getPrimaryImageOfPage() : ?ImageObject
    {
        return $this->primaryImageOfPage;
    }
    public function setSpeakable(\PSX\Uri\Uri|SpeakableSpecification|null $speakable) : void
    {
        $this->speakable = $speakable;
    }
    public function getSpeakable() : \PSX\Uri\Uri|SpeakableSpecification|null
    {
        return $this->speakable;
    }
    public function setReviewedBy(Person|Organization|null $reviewedBy) : void
    {
        $this->reviewedBy = $reviewedBy;
    }
    public function getReviewedBy() : Person|Organization|null
    {
        return $this->reviewedBy;
    }
    public function setRelatedLink(?\PSX\Uri\Uri $relatedLink) : void
    {
        $this->relatedLink = $relatedLink;
    }
    public function getRelatedLink() : ?\PSX\Uri\Uri
    {
        return $this->relatedLink;
    }
    public function setMainContentOfPage(?WebPageElement $mainContentOfPage) : void
    {
        $this->mainContentOfPage = $mainContentOfPage;
    }
    public function getMainContentOfPage() : ?WebPageElement
    {
        return $this->mainContentOfPage;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('significantLink' => $this->significantLink, 'breadcrumb' => $this->breadcrumb, 'lastReviewed' => $this->lastReviewed, 'specialty' => $this->specialty, 'primaryImageOfPage' => $this->primaryImageOfPage, 'speakable' => $this->speakable, 'reviewedBy' => $this->reviewedBy, 'relatedLink' => $this->relatedLink, 'mainContentOfPage' => $this->mainContentOfPage), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

