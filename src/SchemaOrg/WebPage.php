<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A web page. Every web page is implicitly assumed to be declared to be of type WebPage, so the various properties about that webpage, such as <code>breadcrumb</code> may be used. We recommend explicit declaration if these properties are specified, but if they are found outside of an itemscope, they will be assumed to be about the page.")
 */
class WebPage extends CreativeWork implements \JsonSerializable
{
    /**
     * @var \PSX\Uri\Uri|null
     */
    protected $significantLink;
    /**
     * @var string|BreadcrumbList|null
     */
    protected $breadcrumb;
    /**
     * @var \PSX\DateTime\Date|null
     */
    protected $lastReviewed;
    /**
     * @var Specialty|null
     */
    protected $specialty;
    /**
     * @var ImageObject|null
     */
    protected $primaryImageOfPage;
    /**
     * @var \PSX\Uri\Uri|SpeakableSpecification|null
     */
    protected $speakable;
    /**
     * @var Person|Organization|null
     */
    protected $reviewedBy;
    /**
     * @var \PSX\Uri\Uri|null
     */
    protected $relatedLink;
    /**
     * @var WebPageElement|null
     */
    protected $mainContentOfPage;
    /**
     * @param \PSX\Uri\Uri|null $significantLink
     */
    public function setSignificantLink(?\PSX\Uri\Uri $significantLink) : void
    {
        $this->significantLink = $significantLink;
    }
    /**
     * @return \PSX\Uri\Uri|null
     */
    public function getSignificantLink() : ?\PSX\Uri\Uri
    {
        return $this->significantLink;
    }
    /**
     * @param string|BreadcrumbList|null $breadcrumb
     */
    public function setBreadcrumb($breadcrumb) : void
    {
        $this->breadcrumb = $breadcrumb;
    }
    /**
     * @return string|BreadcrumbList|null
     */
    public function getBreadcrumb()
    {
        return $this->breadcrumb;
    }
    /**
     * @param \PSX\DateTime\Date|null $lastReviewed
     */
    public function setLastReviewed(?\PSX\DateTime\Date $lastReviewed) : void
    {
        $this->lastReviewed = $lastReviewed;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getLastReviewed() : ?\PSX\DateTime\Date
    {
        return $this->lastReviewed;
    }
    /**
     * @param Specialty|null $specialty
     */
    public function setSpecialty(?Specialty $specialty) : void
    {
        $this->specialty = $specialty;
    }
    /**
     * @return Specialty|null
     */
    public function getSpecialty() : ?Specialty
    {
        return $this->specialty;
    }
    /**
     * @param ImageObject|null $primaryImageOfPage
     */
    public function setPrimaryImageOfPage(?ImageObject $primaryImageOfPage) : void
    {
        $this->primaryImageOfPage = $primaryImageOfPage;
    }
    /**
     * @return ImageObject|null
     */
    public function getPrimaryImageOfPage() : ?ImageObject
    {
        return $this->primaryImageOfPage;
    }
    /**
     * @param \PSX\Uri\Uri|SpeakableSpecification|null $speakable
     */
    public function setSpeakable($speakable) : void
    {
        $this->speakable = $speakable;
    }
    /**
     * @return \PSX\Uri\Uri|SpeakableSpecification|null
     */
    public function getSpeakable()
    {
        return $this->speakable;
    }
    /**
     * @param Person|Organization|null $reviewedBy
     */
    public function setReviewedBy($reviewedBy) : void
    {
        $this->reviewedBy = $reviewedBy;
    }
    /**
     * @return Person|Organization|null
     */
    public function getReviewedBy()
    {
        return $this->reviewedBy;
    }
    /**
     * @param \PSX\Uri\Uri|null $relatedLink
     */
    public function setRelatedLink(?\PSX\Uri\Uri $relatedLink) : void
    {
        $this->relatedLink = $relatedLink;
    }
    /**
     * @return \PSX\Uri\Uri|null
     */
    public function getRelatedLink() : ?\PSX\Uri\Uri
    {
        return $this->relatedLink;
    }
    /**
     * @param WebPageElement|null $mainContentOfPage
     */
    public function setMainContentOfPage(?WebPageElement $mainContentOfPage) : void
    {
        $this->mainContentOfPage = $mainContentOfPage;
    }
    /**
     * @return WebPageElement|null
     */
    public function getMainContentOfPage() : ?WebPageElement
    {
        return $this->mainContentOfPage;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('significantLink' => $this->significantLink, 'breadcrumb' => $this->breadcrumb, 'lastReviewed' => $this->lastReviewed, 'specialty' => $this->specialty, 'primaryImageOfPage' => $this->primaryImageOfPage, 'speakable' => $this->speakable, 'reviewedBy' => $this->reviewedBy, 'relatedLink' => $this->relatedLink, 'mainContentOfPage' => $this->mainContentOfPage), static function ($value) : bool {
            return $value !== null;
        });
    }
}
