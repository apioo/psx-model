<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An organization such as a school, NGO, corporation, club, etc.")
 */
class Organization extends Thing implements \JsonSerializable
{
    /**
     * @var OwnershipInfo|Product|null
     */
    protected $owns;
    /**
     * @var string|null
     */
    protected $telephone;
    /**
     * @var \PSX\DateTime\Date|null
     */
    protected $foundingDate;
    /**
     * @var string|null
     */
    protected $naics;
    /**
     * @var Person|Organization|null
     */
    protected $member;
    /**
     * @var \PSX\Uri\Uri|CreativeWork|null
     */
    protected $publishingPrinciples;
    /**
     * @var Place|null
     */
    protected $hasPOS;
    /**
     * @var Person|Organization|null
     */
    protected $sponsor;
    /**
     * @var string|PostalAddress|Place|null
     */
    protected $location;
    /**
     * @var Person|null
     */
    protected $founder;
    /**
     * @var string|null
     */
    protected $legalName;
    /**
     * @var Event|null
     */
    protected $event;
    /**
     * @var string|Place|GeoShape|null
     */
    protected $areaServed;
    /**
     * @var Place|null
     */
    protected $foundingLocation;
    /**
     * @var string|null
     */
    protected $leiCode;
    /**
     * @var QuantitativeValue|null
     */
    protected $numberOfEmployees;
    /**
     * @var Demand|null
     */
    protected $seeks;
    /**
     * @var string|null
     */
    protected $duns;
    /**
     * @var AggregateRating|null
     */
    protected $aggregateRating;
    /**
     * @var Organization|null
     */
    protected $department;
    /**
     * @var string|null
     */
    protected $taxID;
    /**
     * @var string|null
     */
    protected $award;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @var string|null
     */
    protected $faxNumber;
    /**
     * @var Review|null
     */
    protected $review;
    /**
     * @var string|null
     */
    protected $isicV4;
    /**
     * @var string|null
     */
    protected $globalLocationNumber;
    /**
     * @var string|null
     */
    protected $vatID;
    /**
     * @var \PSX\DateTime\Date|null
     */
    protected $dissolutionDate;
    /**
     * @var ContactPoint|null
     */
    protected $contactPoint;
    /**
     * @var ProgramMembership|Organization|null
     */
    protected $memberOf;
    /**
     * @var \PSX\Uri\Uri|ImageObject|null
     */
    protected $logo;
    /**
     * @var Organization|Brand|null
     */
    protected $brand;
    /**
     * @var OfferCatalog|null
     */
    protected $hasOfferCatalog;
    /**
     * @var string|PostalAddress|null
     */
    protected $address;
    /**
     * @var Person|null
     */
    protected $employee;
    /**
     * @var InteractionCounter|null
     */
    protected $interactionStatistic;
    /**
     * @var string|null
     */
    protected $slogan;
    /**
     * @var Organization|null
     */
    protected $parentOrganization;
    /**
     * @var Organization|Person|Offer|null
     */
    protected $makesOffer;
    /**
     * @var Organization|Person|null
     */
    protected $alumniOf;
    /**
     * @var Person|null
     */
    protected $alumni;
    /**
     * @var Organization|null
     */
    protected $subOrganization;
    /**
     * @param OwnershipInfo|Product|null $owns
     */
    public function setOwns($owns) : void
    {
        $this->owns = $owns;
    }
    /**
     * @return OwnershipInfo|Product|null
     */
    public function getOwns()
    {
        return $this->owns;
    }
    /**
     * @param string|null $telephone
     */
    public function setTelephone(?string $telephone) : void
    {
        $this->telephone = $telephone;
    }
    /**
     * @return string|null
     */
    public function getTelephone() : ?string
    {
        return $this->telephone;
    }
    /**
     * @param \PSX\DateTime\Date|null $foundingDate
     */
    public function setFoundingDate(?\PSX\DateTime\Date $foundingDate) : void
    {
        $this->foundingDate = $foundingDate;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getFoundingDate() : ?\PSX\DateTime\Date
    {
        return $this->foundingDate;
    }
    /**
     * @param string|null $naics
     */
    public function setNaics(?string $naics) : void
    {
        $this->naics = $naics;
    }
    /**
     * @return string|null
     */
    public function getNaics() : ?string
    {
        return $this->naics;
    }
    /**
     * @param Person|Organization|null $member
     */
    public function setMember($member) : void
    {
        $this->member = $member;
    }
    /**
     * @return Person|Organization|null
     */
    public function getMember()
    {
        return $this->member;
    }
    /**
     * @param \PSX\Uri\Uri|CreativeWork|null $publishingPrinciples
     */
    public function setPublishingPrinciples($publishingPrinciples) : void
    {
        $this->publishingPrinciples = $publishingPrinciples;
    }
    /**
     * @return \PSX\Uri\Uri|CreativeWork|null
     */
    public function getPublishingPrinciples()
    {
        return $this->publishingPrinciples;
    }
    /**
     * @param Place|null $hasPOS
     */
    public function setHasPOS(?Place $hasPOS) : void
    {
        $this->hasPOS = $hasPOS;
    }
    /**
     * @return Place|null
     */
    public function getHasPOS() : ?Place
    {
        return $this->hasPOS;
    }
    /**
     * @param Person|Organization|null $sponsor
     */
    public function setSponsor($sponsor) : void
    {
        $this->sponsor = $sponsor;
    }
    /**
     * @return Person|Organization|null
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }
    /**
     * @param string|PostalAddress|Place|null $location
     */
    public function setLocation($location) : void
    {
        $this->location = $location;
    }
    /**
     * @return string|PostalAddress|Place|null
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * @param Person|null $founder
     */
    public function setFounder(?Person $founder) : void
    {
        $this->founder = $founder;
    }
    /**
     * @return Person|null
     */
    public function getFounder() : ?Person
    {
        return $this->founder;
    }
    /**
     * @param string|null $legalName
     */
    public function setLegalName(?string $legalName) : void
    {
        $this->legalName = $legalName;
    }
    /**
     * @return string|null
     */
    public function getLegalName() : ?string
    {
        return $this->legalName;
    }
    /**
     * @param Event|null $event
     */
    public function setEvent(?Event $event) : void
    {
        $this->event = $event;
    }
    /**
     * @return Event|null
     */
    public function getEvent() : ?Event
    {
        return $this->event;
    }
    /**
     * @param string|Place|GeoShape|null $areaServed
     */
    public function setAreaServed($areaServed) : void
    {
        $this->areaServed = $areaServed;
    }
    /**
     * @return string|Place|GeoShape|null
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }
    /**
     * @param Place|null $foundingLocation
     */
    public function setFoundingLocation(?Place $foundingLocation) : void
    {
        $this->foundingLocation = $foundingLocation;
    }
    /**
     * @return Place|null
     */
    public function getFoundingLocation() : ?Place
    {
        return $this->foundingLocation;
    }
    /**
     * @param string|null $leiCode
     */
    public function setLeiCode(?string $leiCode) : void
    {
        $this->leiCode = $leiCode;
    }
    /**
     * @return string|null
     */
    public function getLeiCode() : ?string
    {
        return $this->leiCode;
    }
    /**
     * @param QuantitativeValue|null $numberOfEmployees
     */
    public function setNumberOfEmployees(?QuantitativeValue $numberOfEmployees) : void
    {
        $this->numberOfEmployees = $numberOfEmployees;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getNumberOfEmployees() : ?QuantitativeValue
    {
        return $this->numberOfEmployees;
    }
    /**
     * @param Demand|null $seeks
     */
    public function setSeeks(?Demand $seeks) : void
    {
        $this->seeks = $seeks;
    }
    /**
     * @return Demand|null
     */
    public function getSeeks() : ?Demand
    {
        return $this->seeks;
    }
    /**
     * @param string|null $duns
     */
    public function setDuns(?string $duns) : void
    {
        $this->duns = $duns;
    }
    /**
     * @return string|null
     */
    public function getDuns() : ?string
    {
        return $this->duns;
    }
    /**
     * @param AggregateRating|null $aggregateRating
     */
    public function setAggregateRating(?AggregateRating $aggregateRating) : void
    {
        $this->aggregateRating = $aggregateRating;
    }
    /**
     * @return AggregateRating|null
     */
    public function getAggregateRating() : ?AggregateRating
    {
        return $this->aggregateRating;
    }
    /**
     * @param Organization|null $department
     */
    public function setDepartment(?Organization $department) : void
    {
        $this->department = $department;
    }
    /**
     * @return Organization|null
     */
    public function getDepartment() : ?Organization
    {
        return $this->department;
    }
    /**
     * @param string|null $taxID
     */
    public function setTaxID(?string $taxID) : void
    {
        $this->taxID = $taxID;
    }
    /**
     * @return string|null
     */
    public function getTaxID() : ?string
    {
        return $this->taxID;
    }
    /**
     * @param string|null $award
     */
    public function setAward(?string $award) : void
    {
        $this->award = $award;
    }
    /**
     * @return string|null
     */
    public function getAward() : ?string
    {
        return $this->award;
    }
    /**
     * @param string|null $email
     */
    public function setEmail(?string $email) : void
    {
        $this->email = $email;
    }
    /**
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * @param string|null $faxNumber
     */
    public function setFaxNumber(?string $faxNumber) : void
    {
        $this->faxNumber = $faxNumber;
    }
    /**
     * @return string|null
     */
    public function getFaxNumber() : ?string
    {
        return $this->faxNumber;
    }
    /**
     * @param Review|null $review
     */
    public function setReview(?Review $review) : void
    {
        $this->review = $review;
    }
    /**
     * @return Review|null
     */
    public function getReview() : ?Review
    {
        return $this->review;
    }
    /**
     * @param string|null $isicV4
     */
    public function setIsicV4(?string $isicV4) : void
    {
        $this->isicV4 = $isicV4;
    }
    /**
     * @return string|null
     */
    public function getIsicV4() : ?string
    {
        return $this->isicV4;
    }
    /**
     * @param string|null $globalLocationNumber
     */
    public function setGlobalLocationNumber(?string $globalLocationNumber) : void
    {
        $this->globalLocationNumber = $globalLocationNumber;
    }
    /**
     * @return string|null
     */
    public function getGlobalLocationNumber() : ?string
    {
        return $this->globalLocationNumber;
    }
    /**
     * @param string|null $vatID
     */
    public function setVatID(?string $vatID) : void
    {
        $this->vatID = $vatID;
    }
    /**
     * @return string|null
     */
    public function getVatID() : ?string
    {
        return $this->vatID;
    }
    /**
     * @param \PSX\DateTime\Date|null $dissolutionDate
     */
    public function setDissolutionDate(?\PSX\DateTime\Date $dissolutionDate) : void
    {
        $this->dissolutionDate = $dissolutionDate;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getDissolutionDate() : ?\PSX\DateTime\Date
    {
        return $this->dissolutionDate;
    }
    /**
     * @param ContactPoint|null $contactPoint
     */
    public function setContactPoint(?ContactPoint $contactPoint) : void
    {
        $this->contactPoint = $contactPoint;
    }
    /**
     * @return ContactPoint|null
     */
    public function getContactPoint() : ?ContactPoint
    {
        return $this->contactPoint;
    }
    /**
     * @param ProgramMembership|Organization|null $memberOf
     */
    public function setMemberOf($memberOf) : void
    {
        $this->memberOf = $memberOf;
    }
    /**
     * @return ProgramMembership|Organization|null
     */
    public function getMemberOf()
    {
        return $this->memberOf;
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
     * @param Organization|Brand|null $brand
     */
    public function setBrand($brand) : void
    {
        $this->brand = $brand;
    }
    /**
     * @return Organization|Brand|null
     */
    public function getBrand()
    {
        return $this->brand;
    }
    /**
     * @param OfferCatalog|null $hasOfferCatalog
     */
    public function setHasOfferCatalog(?OfferCatalog $hasOfferCatalog) : void
    {
        $this->hasOfferCatalog = $hasOfferCatalog;
    }
    /**
     * @return OfferCatalog|null
     */
    public function getHasOfferCatalog() : ?OfferCatalog
    {
        return $this->hasOfferCatalog;
    }
    /**
     * @param string|PostalAddress|null $address
     */
    public function setAddress($address) : void
    {
        $this->address = $address;
    }
    /**
     * @return string|PostalAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * @param Person|null $employee
     */
    public function setEmployee(?Person $employee) : void
    {
        $this->employee = $employee;
    }
    /**
     * @return Person|null
     */
    public function getEmployee() : ?Person
    {
        return $this->employee;
    }
    /**
     * @param InteractionCounter|null $interactionStatistic
     */
    public function setInteractionStatistic(?InteractionCounter $interactionStatistic) : void
    {
        $this->interactionStatistic = $interactionStatistic;
    }
    /**
     * @return InteractionCounter|null
     */
    public function getInteractionStatistic() : ?InteractionCounter
    {
        return $this->interactionStatistic;
    }
    /**
     * @param string|null $slogan
     */
    public function setSlogan(?string $slogan) : void
    {
        $this->slogan = $slogan;
    }
    /**
     * @return string|null
     */
    public function getSlogan() : ?string
    {
        return $this->slogan;
    }
    /**
     * @param Organization|null $parentOrganization
     */
    public function setParentOrganization(?Organization $parentOrganization) : void
    {
        $this->parentOrganization = $parentOrganization;
    }
    /**
     * @return Organization|null
     */
    public function getParentOrganization() : ?Organization
    {
        return $this->parentOrganization;
    }
    /**
     * @param Organization|Person|Offer|null $makesOffer
     */
    public function setMakesOffer($makesOffer) : void
    {
        $this->makesOffer = $makesOffer;
    }
    /**
     * @return Organization|Person|Offer|null
     */
    public function getMakesOffer()
    {
        return $this->makesOffer;
    }
    /**
     * @param Organization|Person|null $alumniOf
     */
    public function setAlumniOf($alumniOf) : void
    {
        $this->alumniOf = $alumniOf;
    }
    /**
     * @return Organization|Person|null
     */
    public function getAlumniOf()
    {
        return $this->alumniOf;
    }
    /**
     * @param Person|null $alumni
     */
    public function setAlumni(?Person $alumni) : void
    {
        $this->alumni = $alumni;
    }
    /**
     * @return Person|null
     */
    public function getAlumni() : ?Person
    {
        return $this->alumni;
    }
    /**
     * @param Organization|null $subOrganization
     */
    public function setSubOrganization(?Organization $subOrganization) : void
    {
        $this->subOrganization = $subOrganization;
    }
    /**
     * @return Organization|null
     */
    public function getSubOrganization() : ?Organization
    {
        return $this->subOrganization;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('owns' => $this->owns, 'telephone' => $this->telephone, 'foundingDate' => $this->foundingDate, 'naics' => $this->naics, 'member' => $this->member, 'publishingPrinciples' => $this->publishingPrinciples, 'hasPOS' => $this->hasPOS, 'sponsor' => $this->sponsor, 'location' => $this->location, 'founder' => $this->founder, 'legalName' => $this->legalName, 'event' => $this->event, 'areaServed' => $this->areaServed, 'foundingLocation' => $this->foundingLocation, 'leiCode' => $this->leiCode, 'numberOfEmployees' => $this->numberOfEmployees, 'seeks' => $this->seeks, 'duns' => $this->duns, 'aggregateRating' => $this->aggregateRating, 'department' => $this->department, 'taxID' => $this->taxID, 'award' => $this->award, 'email' => $this->email, 'faxNumber' => $this->faxNumber, 'review' => $this->review, 'isicV4' => $this->isicV4, 'globalLocationNumber' => $this->globalLocationNumber, 'vatID' => $this->vatID, 'dissolutionDate' => $this->dissolutionDate, 'contactPoint' => $this->contactPoint, 'memberOf' => $this->memberOf, 'logo' => $this->logo, 'brand' => $this->brand, 'hasOfferCatalog' => $this->hasOfferCatalog, 'address' => $this->address, 'employee' => $this->employee, 'interactionStatistic' => $this->interactionStatistic, 'slogan' => $this->slogan, 'parentOrganization' => $this->parentOrganization, 'makesOffer' => $this->makesOffer, 'alumniOf' => $this->alumniOf, 'alumni' => $this->alumni, 'subOrganization' => $this->subOrganization), static function ($value) : bool {
            return $value !== null;
        });
    }
}
