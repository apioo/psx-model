<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A person (alive, dead, undead, or fictional).')]
class Person extends Thing implements \JsonSerializable
{
    protected OwnershipInfo|Product|null $owns = null;
    protected ?Person $parent = null;
    protected ?string $telephone = null;
    protected ?string $givenName = null;
    protected ?string $naics = null;
    protected \PSX\Uri\Uri|CreativeWork|null $publishingPrinciples = null;
    protected ?Place $hasPOS = null;
    protected Person|Organization|null $sponsor = null;
    protected ?Person $follows = null;
    protected ?string $honorificPrefix = null;
    protected ContactPoint|Place|null $workLocation = null;
    protected ?Demand $seeks = null;
    protected ?string $duns = null;
    protected ?Person $children = null;
    protected ?Person $knows = null;
    protected ?\PSX\DateTime\Date $birthDate = null;
    protected ?string $taxID = null;
    protected Distance|QuantitativeValue|null $height = null;
    protected ?Place $deathPlace = null;
    protected ?string $award = null;
    protected ?string $email = null;
    protected ?string $faxNumber = null;
    protected ?string $isicV4 = null;
    protected PriceSpecification|MonetaryAmount|null $netWorth = null;
    protected \PSX\Uri\Uri|Person|null $colleague = null;
    protected ?string $globalLocationNumber = null;
    protected ?Person $relatedTo = null;
    protected ?Organization $worksFor = null;
    protected ?string $vatID = null;
    protected ?Occupation $hasOccupation = null;
    protected ?ContactPoint $contactPoint = null;
    protected ProgramMembership|Organization|null $memberOf = null;
    protected ?string $additionalName = null;
    protected ?Person $sibling = null;
    protected Organization|Brand|null $brand = null;
    protected ?OfferCatalog $hasOfferCatalog = null;
    protected string|PostalAddress|null $address = null;
    protected ?string $familyName = null;
    protected ?\PSX\DateTime\Date $deathDate = null;
    protected ?InteractionCounter $interactionStatistic = null;
    protected ?QuantitativeValue $weight = null;
    protected ContactPoint|Place|null $homeLocation = null;
    protected ?Country $nationality = null;
    protected ?Place $birthPlace = null;
    protected ?string $honorificSuffix = null;
    protected ?Person $spouse = null;
    protected ?Event $performerIn = null;
    protected Organization|Person|Offer|null $makesOffer = null;
    protected Organization|Person|null $alumniOf = null;
    public function setOwns(OwnershipInfo|Product|null $owns) : void
    {
        $this->owns = $owns;
    }
    public function getOwns() : OwnershipInfo|Product|null
    {
        return $this->owns;
    }
    public function setParent(?Person $parent) : void
    {
        $this->parent = $parent;
    }
    public function getParent() : ?Person
    {
        return $this->parent;
    }
    public function setTelephone(?string $telephone) : void
    {
        $this->telephone = $telephone;
    }
    public function getTelephone() : ?string
    {
        return $this->telephone;
    }
    public function setGivenName(?string $givenName) : void
    {
        $this->givenName = $givenName;
    }
    public function getGivenName() : ?string
    {
        return $this->givenName;
    }
    public function setNaics(?string $naics) : void
    {
        $this->naics = $naics;
    }
    public function getNaics() : ?string
    {
        return $this->naics;
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
    public function setFollows(?Person $follows) : void
    {
        $this->follows = $follows;
    }
    public function getFollows() : ?Person
    {
        return $this->follows;
    }
    public function setHonorificPrefix(?string $honorificPrefix) : void
    {
        $this->honorificPrefix = $honorificPrefix;
    }
    public function getHonorificPrefix() : ?string
    {
        return $this->honorificPrefix;
    }
    public function setWorkLocation(ContactPoint|Place|null $workLocation) : void
    {
        $this->workLocation = $workLocation;
    }
    public function getWorkLocation() : ContactPoint|Place|null
    {
        return $this->workLocation;
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
    public function setChildren(?Person $children) : void
    {
        $this->children = $children;
    }
    public function getChildren() : ?Person
    {
        return $this->children;
    }
    public function setKnows(?Person $knows) : void
    {
        $this->knows = $knows;
    }
    public function getKnows() : ?Person
    {
        return $this->knows;
    }
    public function setBirthDate(?\PSX\DateTime\Date $birthDate) : void
    {
        $this->birthDate = $birthDate;
    }
    public function getBirthDate() : ?\PSX\DateTime\Date
    {
        return $this->birthDate;
    }
    public function setTaxID(?string $taxID) : void
    {
        $this->taxID = $taxID;
    }
    public function getTaxID() : ?string
    {
        return $this->taxID;
    }
    public function setHeight(Distance|QuantitativeValue|null $height) : void
    {
        $this->height = $height;
    }
    public function getHeight() : Distance|QuantitativeValue|null
    {
        return $this->height;
    }
    public function setDeathPlace(?Place $deathPlace) : void
    {
        $this->deathPlace = $deathPlace;
    }
    public function getDeathPlace() : ?Place
    {
        return $this->deathPlace;
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
    public function setIsicV4(?string $isicV4) : void
    {
        $this->isicV4 = $isicV4;
    }
    public function getIsicV4() : ?string
    {
        return $this->isicV4;
    }
    public function setNetWorth(PriceSpecification|MonetaryAmount|null $netWorth) : void
    {
        $this->netWorth = $netWorth;
    }
    public function getNetWorth() : PriceSpecification|MonetaryAmount|null
    {
        return $this->netWorth;
    }
    public function setColleague(\PSX\Uri\Uri|Person|null $colleague) : void
    {
        $this->colleague = $colleague;
    }
    public function getColleague() : \PSX\Uri\Uri|Person|null
    {
        return $this->colleague;
    }
    public function setGlobalLocationNumber(?string $globalLocationNumber) : void
    {
        $this->globalLocationNumber = $globalLocationNumber;
    }
    public function getGlobalLocationNumber() : ?string
    {
        return $this->globalLocationNumber;
    }
    public function setRelatedTo(?Person $relatedTo) : void
    {
        $this->relatedTo = $relatedTo;
    }
    public function getRelatedTo() : ?Person
    {
        return $this->relatedTo;
    }
    public function setWorksFor(?Organization $worksFor) : void
    {
        $this->worksFor = $worksFor;
    }
    public function getWorksFor() : ?Organization
    {
        return $this->worksFor;
    }
    public function setVatID(?string $vatID) : void
    {
        $this->vatID = $vatID;
    }
    public function getVatID() : ?string
    {
        return $this->vatID;
    }
    public function setHasOccupation(?Occupation $hasOccupation) : void
    {
        $this->hasOccupation = $hasOccupation;
    }
    public function getHasOccupation() : ?Occupation
    {
        return $this->hasOccupation;
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
    public function setAdditionalName(?string $additionalName) : void
    {
        $this->additionalName = $additionalName;
    }
    public function getAdditionalName() : ?string
    {
        return $this->additionalName;
    }
    public function setSibling(?Person $sibling) : void
    {
        $this->sibling = $sibling;
    }
    public function getSibling() : ?Person
    {
        return $this->sibling;
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
    public function setFamilyName(?string $familyName) : void
    {
        $this->familyName = $familyName;
    }
    public function getFamilyName() : ?string
    {
        return $this->familyName;
    }
    public function setDeathDate(?\PSX\DateTime\Date $deathDate) : void
    {
        $this->deathDate = $deathDate;
    }
    public function getDeathDate() : ?\PSX\DateTime\Date
    {
        return $this->deathDate;
    }
    public function setInteractionStatistic(?InteractionCounter $interactionStatistic) : void
    {
        $this->interactionStatistic = $interactionStatistic;
    }
    public function getInteractionStatistic() : ?InteractionCounter
    {
        return $this->interactionStatistic;
    }
    public function setWeight(?QuantitativeValue $weight) : void
    {
        $this->weight = $weight;
    }
    public function getWeight() : ?QuantitativeValue
    {
        return $this->weight;
    }
    public function setHomeLocation(ContactPoint|Place|null $homeLocation) : void
    {
        $this->homeLocation = $homeLocation;
    }
    public function getHomeLocation() : ContactPoint|Place|null
    {
        return $this->homeLocation;
    }
    public function setNationality(?Country $nationality) : void
    {
        $this->nationality = $nationality;
    }
    public function getNationality() : ?Country
    {
        return $this->nationality;
    }
    public function setBirthPlace(?Place $birthPlace) : void
    {
        $this->birthPlace = $birthPlace;
    }
    public function getBirthPlace() : ?Place
    {
        return $this->birthPlace;
    }
    public function setHonorificSuffix(?string $honorificSuffix) : void
    {
        $this->honorificSuffix = $honorificSuffix;
    }
    public function getHonorificSuffix() : ?string
    {
        return $this->honorificSuffix;
    }
    public function setSpouse(?Person $spouse) : void
    {
        $this->spouse = $spouse;
    }
    public function getSpouse() : ?Person
    {
        return $this->spouse;
    }
    public function setPerformerIn(?Event $performerIn) : void
    {
        $this->performerIn = $performerIn;
    }
    public function getPerformerIn() : ?Event
    {
        return $this->performerIn;
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
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('owns' => $this->owns, 'parent' => $this->parent, 'telephone' => $this->telephone, 'givenName' => $this->givenName, 'naics' => $this->naics, 'publishingPrinciples' => $this->publishingPrinciples, 'hasPOS' => $this->hasPOS, 'sponsor' => $this->sponsor, 'follows' => $this->follows, 'honorificPrefix' => $this->honorificPrefix, 'workLocation' => $this->workLocation, 'seeks' => $this->seeks, 'duns' => $this->duns, 'children' => $this->children, 'knows' => $this->knows, 'birthDate' => $this->birthDate, 'taxID' => $this->taxID, 'height' => $this->height, 'deathPlace' => $this->deathPlace, 'award' => $this->award, 'email' => $this->email, 'faxNumber' => $this->faxNumber, 'isicV4' => $this->isicV4, 'netWorth' => $this->netWorth, 'colleague' => $this->colleague, 'globalLocationNumber' => $this->globalLocationNumber, 'relatedTo' => $this->relatedTo, 'worksFor' => $this->worksFor, 'vatID' => $this->vatID, 'hasOccupation' => $this->hasOccupation, 'contactPoint' => $this->contactPoint, 'memberOf' => $this->memberOf, 'additionalName' => $this->additionalName, 'sibling' => $this->sibling, 'brand' => $this->brand, 'hasOfferCatalog' => $this->hasOfferCatalog, 'address' => $this->address, 'familyName' => $this->familyName, 'deathDate' => $this->deathDate, 'interactionStatistic' => $this->interactionStatistic, 'weight' => $this->weight, 'homeLocation' => $this->homeLocation, 'nationality' => $this->nationality, 'birthPlace' => $this->birthPlace, 'honorificSuffix' => $this->honorificSuffix, 'spouse' => $this->spouse, 'performerIn' => $this->performerIn, 'makesOffer' => $this->makesOffer, 'alumniOf' => $this->alumniOf), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

