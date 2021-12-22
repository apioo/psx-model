<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An organization such as a school, NGO, corporation, club, etc.')]
class Organization extends Thing implements \JsonSerializable
{
    protected OwnershipInfo|Product|null $owns = null;
    protected ?string $telephone = null;
    protected ?\PSX\DateTime\Date $foundingDate = null;
    protected ?string $naics = null;
    protected Person|Organization|null $member = null;
    protected \PSX\Uri\Uri|CreativeWork|null $publishingPrinciples = null;
    protected ?Place $hasPOS = null;
    protected Person|Organization|null $sponsor = null;
    protected string|PostalAddress|Place|null $location = null;
    protected ?Person $founder = null;
    protected ?string $legalName = null;
    protected ?Event $event = null;
    protected string|Place|GeoShape|null $areaServed = null;
    protected ?Place $foundingLocation = null;
    protected ?string $leiCode = null;
    protected ?QuantitativeValue $numberOfEmployees = null;
    protected ?Demand $seeks = null;
    protected ?string $duns = null;
    protected ?AggregateRating $aggregateRating = null;
    protected ?Organization $department = null;
    protected ?string $taxID = null;
    protected ?string $award = null;
    protected ?string $email = null;
    protected ?string $faxNumber = null;
    protected ?Review $review = null;
    protected ?string $isicV4 = null;
    protected ?string $globalLocationNumber = null;
    protected ?string $vatID = null;
    protected ?\PSX\DateTime\Date $dissolutionDate = null;
    protected ?ContactPoint $contactPoint = null;
    protected ProgramMembership|Organization|null $memberOf = null;
    protected \PSX\Uri\Uri|ImageObject|null $logo = null;
    protected Organization|Brand|null $brand = null;
    protected ?OfferCatalog $hasOfferCatalog = null;
    protected string|PostalAddress|null $address = null;
    protected ?Person $employee = null;
    protected ?InteractionCounter $interactionStatistic = null;
    protected ?string $slogan = null;
    protected ?Organization $parentOrganization = null;
    protected Organization|Person|Offer|null $makesOffer = null;
    protected Organization|Person|null $alumniOf = null;
    protected ?Person $alumni = null;
    protected ?Organization $subOrganization = null;
    public function setOwns(OwnershipInfo|Product|null $owns) : void
    {
        $this->owns = $owns;
    }
    public function getOwns() : OwnershipInfo|Product|null
    {
        return $this->owns;
    }
    public function setTelephone(?string $telephone) : void
    {
        $this->telephone = $telephone;
    }
    public function getTelephone() : ?string
    {
        return $this->telephone;
    }
    public function setFoundingDate(?\PSX\DateTime\Date $foundingDate) : void
    {
        $this->foundingDate = $foundingDate;
    }
    public function getFoundingDate() : ?\PSX\DateTime\Date
    {
        return $this->foundingDate;
    }
    public function setNaics(?string $naics) : void
    {
        $this->naics = $naics;
    }
    public function getNaics() : ?string
    {
        return $this->naics;
    }
    public function setMember(Person|Organization|null $member) : void
    {
        $this->member = $member;
    }
    public function getMember() : Person|Organization|null
    {
        return $this->member;
    }
    public function setPublishingPrinciples(\PSX\Uri\Uri|CreativeWork|null $publishingPrinciples) : void
    {
        $this->publishingPrinciples = $publishingPrinciples;
    }
    public function getPublishingPrinciples() : \PSX\Uri\Uri|CreativeWork|null
    {
        return $this->publishingPrinciples;
    }
    public function setHasPOS(?Place $hasPOS) : void
    {
        $this->hasPOS = $hasPOS;
    }
    public function getHasPOS() : ?Place
    {
        return $this->hasPOS;
    }
    public function setSponsor(Person|Organization|null $sponsor) : void
    {
        $this->sponsor = $sponsor;
    }
    public function getSponsor() : Person|Organization|null
    {
        return $this->sponsor;
    }
    public function setLocation(string|PostalAddress|Place|null $location) : void
    {
        $this->location = $location;
    }
    public function getLocation() : string|PostalAddress|Place|null
    {
        return $this->location;
    }
    public function setFounder(?Person $founder) : void
    {
        $this->founder = $founder;
    }
    public function getFounder() : ?Person
    {
        return $this->founder;
    }
    public function setLegalName(?string $legalName) : void
    {
        $this->legalName = $legalName;
    }
    public function getLegalName() : ?string
    {
        return $this->legalName;
    }
    public function setEvent(?Event $event) : void
    {
        $this->event = $event;
    }
    public function getEvent() : ?Event
    {
        return $this->event;
    }
    public function setAreaServed(string|Place|GeoShape|null $areaServed) : void
    {
        $this->areaServed = $areaServed;
    }
    public function getAreaServed() : string|Place|GeoShape|null
    {
        return $this->areaServed;
    }
    public function setFoundingLocation(?Place $foundingLocation) : void
    {
        $this->foundingLocation = $foundingLocation;
    }
    public function getFoundingLocation() : ?Place
    {
        return $this->foundingLocation;
    }
    public function setLeiCode(?string $leiCode) : void
    {
        $this->leiCode = $leiCode;
    }
    public function getLeiCode() : ?string
    {
        return $this->leiCode;
    }
    public function setNumberOfEmployees(?QuantitativeValue $numberOfEmployees) : void
    {
        $this->numberOfEmployees = $numberOfEmployees;
    }
    public function getNumberOfEmployees() : ?QuantitativeValue
    {
        return $this->numberOfEmployees;
    }
    public function setSeeks(?Demand $seeks) : void
    {
        $this->seeks = $seeks;
    }
    public function getSeeks() : ?Demand
    {
        return $this->seeks;
    }
    public function setDuns(?string $duns) : void
    {
        $this->duns = $duns;
    }
    public function getDuns() : ?string
    {
        return $this->duns;
    }
    public function setAggregateRating(?AggregateRating $aggregateRating) : void
    {
        $this->aggregateRating = $aggregateRating;
    }
    public function getAggregateRating() : ?AggregateRating
    {
        return $this->aggregateRating;
    }
    public function setDepartment(?Organization $department) : void
    {
        $this->department = $department;
    }
    public function getDepartment() : ?Organization
    {
        return $this->department;
    }
    public function setTaxID(?string $taxID) : void
    {
        $this->taxID = $taxID;
    }
    public function getTaxID() : ?string
    {
        return $this->taxID;
    }
    public function setAward(?string $award) : void
    {
        $this->award = $award;
    }
    public function getAward() : ?string
    {
        return $this->award;
    }
    public function setEmail(?string $email) : void
    {
        $this->email = $email;
    }
    public function getEmail() : ?string
    {
        return $this->email;
    }
    public function setFaxNumber(?string $faxNumber) : void
    {
        $this->faxNumber = $faxNumber;
    }
    public function getFaxNumber() : ?string
    {
        return $this->faxNumber;
    }
    public function setReview(?Review $review) : void
    {
        $this->review = $review;
    }
    public function getReview() : ?Review
    {
        return $this->review;
    }
    public function setIsicV4(?string $isicV4) : void
    {
        $this->isicV4 = $isicV4;
    }
    public function getIsicV4() : ?string
    {
        return $this->isicV4;
    }
    public function setGlobalLocationNumber(?string $globalLocationNumber) : void
    {
        $this->globalLocationNumber = $globalLocationNumber;
    }
    public function getGlobalLocationNumber() : ?string
    {
        return $this->globalLocationNumber;
    }
    public function setVatID(?string $vatID) : void
    {
        $this->vatID = $vatID;
    }
    public function getVatID() : ?string
    {
        return $this->vatID;
    }
    public function setDissolutionDate(?\PSX\DateTime\Date $dissolutionDate) : void
    {
        $this->dissolutionDate = $dissolutionDate;
    }
    public function getDissolutionDate() : ?\PSX\DateTime\Date
    {
        return $this->dissolutionDate;
    }
    public function setContactPoint(?ContactPoint $contactPoint) : void
    {
        $this->contactPoint = $contactPoint;
    }
    public function getContactPoint() : ?ContactPoint
    {
        return $this->contactPoint;
    }
    public function setMemberOf(ProgramMembership|Organization|null $memberOf) : void
    {
        $this->memberOf = $memberOf;
    }
    public function getMemberOf() : ProgramMembership|Organization|null
    {
        return $this->memberOf;
    }
    public function setLogo(\PSX\Uri\Uri|ImageObject|null $logo) : void
    {
        $this->logo = $logo;
    }
    public function getLogo() : \PSX\Uri\Uri|ImageObject|null
    {
        return $this->logo;
    }
    public function setBrand(Organization|Brand|null $brand) : void
    {
        $this->brand = $brand;
    }
    public function getBrand() : Organization|Brand|null
    {
        return $this->brand;
    }
    public function setHasOfferCatalog(?OfferCatalog $hasOfferCatalog) : void
    {
        $this->hasOfferCatalog = $hasOfferCatalog;
    }
    public function getHasOfferCatalog() : ?OfferCatalog
    {
        return $this->hasOfferCatalog;
    }
    public function setAddress(string|PostalAddress|null $address) : void
    {
        $this->address = $address;
    }
    public function getAddress() : string|PostalAddress|null
    {
        return $this->address;
    }
    public function setEmployee(?Person $employee) : void
    {
        $this->employee = $employee;
    }
    public function getEmployee() : ?Person
    {
        return $this->employee;
    }
    public function setInteractionStatistic(?InteractionCounter $interactionStatistic) : void
    {
        $this->interactionStatistic = $interactionStatistic;
    }
    public function getInteractionStatistic() : ?InteractionCounter
    {
        return $this->interactionStatistic;
    }
    public function setSlogan(?string $slogan) : void
    {
        $this->slogan = $slogan;
    }
    public function getSlogan() : ?string
    {
        return $this->slogan;
    }
    public function setParentOrganization(?Organization $parentOrganization) : void
    {
        $this->parentOrganization = $parentOrganization;
    }
    public function getParentOrganization() : ?Organization
    {
        return $this->parentOrganization;
    }
    public function setMakesOffer(Organization|Person|Offer|null $makesOffer) : void
    {
        $this->makesOffer = $makesOffer;
    }
    public function getMakesOffer() : Organization|Person|Offer|null
    {
        return $this->makesOffer;
    }
    public function setAlumniOf(Organization|Person|null $alumniOf) : void
    {
        $this->alumniOf = $alumniOf;
    }
    public function getAlumniOf() : Organization|Person|null
    {
        return $this->alumniOf;
    }
    public function setAlumni(?Person $alumni) : void
    {
        $this->alumni = $alumni;
    }
    public function getAlumni() : ?Person
    {
        return $this->alumni;
    }
    public function setSubOrganization(?Organization $subOrganization) : void
    {
        $this->subOrganization = $subOrganization;
    }
    public function getSubOrganization() : ?Organization
    {
        return $this->subOrganization;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('owns' => $this->owns, 'telephone' => $this->telephone, 'foundingDate' => $this->foundingDate, 'naics' => $this->naics, 'member' => $this->member, 'publishingPrinciples' => $this->publishingPrinciples, 'hasPOS' => $this->hasPOS, 'sponsor' => $this->sponsor, 'location' => $this->location, 'founder' => $this->founder, 'legalName' => $this->legalName, 'event' => $this->event, 'areaServed' => $this->areaServed, 'foundingLocation' => $this->foundingLocation, 'leiCode' => $this->leiCode, 'numberOfEmployees' => $this->numberOfEmployees, 'seeks' => $this->seeks, 'duns' => $this->duns, 'aggregateRating' => $this->aggregateRating, 'department' => $this->department, 'taxID' => $this->taxID, 'award' => $this->award, 'email' => $this->email, 'faxNumber' => $this->faxNumber, 'review' => $this->review, 'isicV4' => $this->isicV4, 'globalLocationNumber' => $this->globalLocationNumber, 'vatID' => $this->vatID, 'dissolutionDate' => $this->dissolutionDate, 'contactPoint' => $this->contactPoint, 'memberOf' => $this->memberOf, 'logo' => $this->logo, 'brand' => $this->brand, 'hasOfferCatalog' => $this->hasOfferCatalog, 'address' => $this->address, 'employee' => $this->employee, 'interactionStatistic' => $this->interactionStatistic, 'slogan' => $this->slogan, 'parentOrganization' => $this->parentOrganization, 'makesOffer' => $this->makesOffer, 'alumniOf' => $this->alumniOf, 'alumni' => $this->alumni, 'subOrganization' => $this->subOrganization), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

