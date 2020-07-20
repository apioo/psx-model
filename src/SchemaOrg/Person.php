<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A person (alive, dead, undead, or fictional).")
 */
class Person extends Thing implements \JsonSerializable
{
    /**
     * @var OwnershipInfo|Product|null
     */
    protected $owns;
    /**
     * @var Person|null
     */
    protected $parent;
    /**
     * @var string|null
     */
    protected $telephone;
    /**
     * @var string|null
     */
    protected $givenName;
    /**
     * @var string|null
     */
    protected $naics;
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
     * @var Person|null
     */
    protected $follows;
    /**
     * @var string|null
     */
    protected $honorificPrefix;
    /**
     * @var ContactPoint|Place|null
     */
    protected $workLocation;
    /**
     * @var Demand|null
     */
    protected $seeks;
    /**
     * @var string|null
     */
    protected $duns;
    /**
     * @var Person|null
     */
    protected $children;
    /**
     * @var Person|null
     */
    protected $knows;
    /**
     * @var \PSX\DateTime\Date|null
     */
    protected $birthDate;
    /**
     * @var string|null
     */
    protected $taxID;
    /**
     * @var Distance|QuantitativeValue|null
     */
    protected $height;
    /**
     * @var Place|null
     */
    protected $deathPlace;
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
     * @var string|null
     */
    protected $isicV4;
    /**
     * @var PriceSpecification|MonetaryAmount|null
     */
    protected $netWorth;
    /**
     * @var \PSX\Uri\Uri|Person|null
     */
    protected $colleague;
    /**
     * @var string|null
     */
    protected $globalLocationNumber;
    /**
     * @var Person|null
     */
    protected $relatedTo;
    /**
     * @var Organization|null
     */
    protected $worksFor;
    /**
     * @var string|null
     */
    protected $vatID;
    /**
     * @var Occupation|null
     */
    protected $hasOccupation;
    /**
     * @var ContactPoint|null
     */
    protected $contactPoint;
    /**
     * @var ProgramMembership|Organization|null
     */
    protected $memberOf;
    /**
     * @var string|null
     */
    protected $additionalName;
    /**
     * @var Person|null
     */
    protected $sibling;
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
     * @var string|null
     */
    protected $familyName;
    /**
     * @var \PSX\DateTime\Date|null
     */
    protected $deathDate;
    /**
     * @var InteractionCounter|null
     */
    protected $interactionStatistic;
    /**
     * @var QuantitativeValue|null
     */
    protected $weight;
    /**
     * @var ContactPoint|Place|null
     */
    protected $homeLocation;
    /**
     * @var Country|null
     */
    protected $nationality;
    /**
     * @var Place|null
     */
    protected $birthPlace;
    /**
     * @var string|null
     */
    protected $honorificSuffix;
    /**
     * @var Person|null
     */
    protected $spouse;
    /**
     * @var Event|null
     */
    protected $performerIn;
    /**
     * @var Organization|Person|Offer|null
     */
    protected $makesOffer;
    /**
     * @var Organization|Person|null
     */
    protected $alumniOf;
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
     * @param Person|null $parent
     */
    public function setParent(?Person $parent) : void
    {
        $this->parent = $parent;
    }
    /**
     * @return Person|null
     */
    public function getParent() : ?Person
    {
        return $this->parent;
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
     * @param string|null $givenName
     */
    public function setGivenName(?string $givenName) : void
    {
        $this->givenName = $givenName;
    }
    /**
     * @return string|null
     */
    public function getGivenName() : ?string
    {
        return $this->givenName;
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
     * @param Person|null $follows
     */
    public function setFollows(?Person $follows) : void
    {
        $this->follows = $follows;
    }
    /**
     * @return Person|null
     */
    public function getFollows() : ?Person
    {
        return $this->follows;
    }
    /**
     * @param string|null $honorificPrefix
     */
    public function setHonorificPrefix(?string $honorificPrefix) : void
    {
        $this->honorificPrefix = $honorificPrefix;
    }
    /**
     * @return string|null
     */
    public function getHonorificPrefix() : ?string
    {
        return $this->honorificPrefix;
    }
    /**
     * @param ContactPoint|Place|null $workLocation
     */
    public function setWorkLocation($workLocation) : void
    {
        $this->workLocation = $workLocation;
    }
    /**
     * @return ContactPoint|Place|null
     */
    public function getWorkLocation()
    {
        return $this->workLocation;
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
     * @param Person|null $children
     */
    public function setChildren(?Person $children) : void
    {
        $this->children = $children;
    }
    /**
     * @return Person|null
     */
    public function getChildren() : ?Person
    {
        return $this->children;
    }
    /**
     * @param Person|null $knows
     */
    public function setKnows(?Person $knows) : void
    {
        $this->knows = $knows;
    }
    /**
     * @return Person|null
     */
    public function getKnows() : ?Person
    {
        return $this->knows;
    }
    /**
     * @param \PSX\DateTime\Date|null $birthDate
     */
    public function setBirthDate(?\PSX\DateTime\Date $birthDate) : void
    {
        $this->birthDate = $birthDate;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getBirthDate() : ?\PSX\DateTime\Date
    {
        return $this->birthDate;
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
     * @param Distance|QuantitativeValue|null $height
     */
    public function setHeight($height) : void
    {
        $this->height = $height;
    }
    /**
     * @return Distance|QuantitativeValue|null
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * @param Place|null $deathPlace
     */
    public function setDeathPlace(?Place $deathPlace) : void
    {
        $this->deathPlace = $deathPlace;
    }
    /**
     * @return Place|null
     */
    public function getDeathPlace() : ?Place
    {
        return $this->deathPlace;
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
     * @param PriceSpecification|MonetaryAmount|null $netWorth
     */
    public function setNetWorth($netWorth) : void
    {
        $this->netWorth = $netWorth;
    }
    /**
     * @return PriceSpecification|MonetaryAmount|null
     */
    public function getNetWorth()
    {
        return $this->netWorth;
    }
    /**
     * @param \PSX\Uri\Uri|Person|null $colleague
     */
    public function setColleague($colleague) : void
    {
        $this->colleague = $colleague;
    }
    /**
     * @return \PSX\Uri\Uri|Person|null
     */
    public function getColleague()
    {
        return $this->colleague;
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
     * @param Person|null $relatedTo
     */
    public function setRelatedTo(?Person $relatedTo) : void
    {
        $this->relatedTo = $relatedTo;
    }
    /**
     * @return Person|null
     */
    public function getRelatedTo() : ?Person
    {
        return $this->relatedTo;
    }
    /**
     * @param Organization|null $worksFor
     */
    public function setWorksFor(?Organization $worksFor) : void
    {
        $this->worksFor = $worksFor;
    }
    /**
     * @return Organization|null
     */
    public function getWorksFor() : ?Organization
    {
        return $this->worksFor;
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
     * @param Occupation|null $hasOccupation
     */
    public function setHasOccupation(?Occupation $hasOccupation) : void
    {
        $this->hasOccupation = $hasOccupation;
    }
    /**
     * @return Occupation|null
     */
    public function getHasOccupation() : ?Occupation
    {
        return $this->hasOccupation;
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
     * @param string|null $additionalName
     */
    public function setAdditionalName(?string $additionalName) : void
    {
        $this->additionalName = $additionalName;
    }
    /**
     * @return string|null
     */
    public function getAdditionalName() : ?string
    {
        return $this->additionalName;
    }
    /**
     * @param Person|null $sibling
     */
    public function setSibling(?Person $sibling) : void
    {
        $this->sibling = $sibling;
    }
    /**
     * @return Person|null
     */
    public function getSibling() : ?Person
    {
        return $this->sibling;
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
     * @param string|null $familyName
     */
    public function setFamilyName(?string $familyName) : void
    {
        $this->familyName = $familyName;
    }
    /**
     * @return string|null
     */
    public function getFamilyName() : ?string
    {
        return $this->familyName;
    }
    /**
     * @param \PSX\DateTime\Date|null $deathDate
     */
    public function setDeathDate(?\PSX\DateTime\Date $deathDate) : void
    {
        $this->deathDate = $deathDate;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getDeathDate() : ?\PSX\DateTime\Date
    {
        return $this->deathDate;
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
     * @param QuantitativeValue|null $weight
     */
    public function setWeight(?QuantitativeValue $weight) : void
    {
        $this->weight = $weight;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getWeight() : ?QuantitativeValue
    {
        return $this->weight;
    }
    /**
     * @param ContactPoint|Place|null $homeLocation
     */
    public function setHomeLocation($homeLocation) : void
    {
        $this->homeLocation = $homeLocation;
    }
    /**
     * @return ContactPoint|Place|null
     */
    public function getHomeLocation()
    {
        return $this->homeLocation;
    }
    /**
     * @param Country|null $nationality
     */
    public function setNationality(?Country $nationality) : void
    {
        $this->nationality = $nationality;
    }
    /**
     * @return Country|null
     */
    public function getNationality() : ?Country
    {
        return $this->nationality;
    }
    /**
     * @param Place|null $birthPlace
     */
    public function setBirthPlace(?Place $birthPlace) : void
    {
        $this->birthPlace = $birthPlace;
    }
    /**
     * @return Place|null
     */
    public function getBirthPlace() : ?Place
    {
        return $this->birthPlace;
    }
    /**
     * @param string|null $honorificSuffix
     */
    public function setHonorificSuffix(?string $honorificSuffix) : void
    {
        $this->honorificSuffix = $honorificSuffix;
    }
    /**
     * @return string|null
     */
    public function getHonorificSuffix() : ?string
    {
        return $this->honorificSuffix;
    }
    /**
     * @param Person|null $spouse
     */
    public function setSpouse(?Person $spouse) : void
    {
        $this->spouse = $spouse;
    }
    /**
     * @return Person|null
     */
    public function getSpouse() : ?Person
    {
        return $this->spouse;
    }
    /**
     * @param Event|null $performerIn
     */
    public function setPerformerIn(?Event $performerIn) : void
    {
        $this->performerIn = $performerIn;
    }
    /**
     * @return Event|null
     */
    public function getPerformerIn() : ?Event
    {
        return $this->performerIn;
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
    public function jsonSerialize()
    {
        return (object) array_filter(array('owns' => $this->owns, 'parent' => $this->parent, 'telephone' => $this->telephone, 'givenName' => $this->givenName, 'naics' => $this->naics, 'publishingPrinciples' => $this->publishingPrinciples, 'hasPOS' => $this->hasPOS, 'sponsor' => $this->sponsor, 'follows' => $this->follows, 'honorificPrefix' => $this->honorificPrefix, 'workLocation' => $this->workLocation, 'seeks' => $this->seeks, 'duns' => $this->duns, 'children' => $this->children, 'knows' => $this->knows, 'birthDate' => $this->birthDate, 'taxID' => $this->taxID, 'height' => $this->height, 'deathPlace' => $this->deathPlace, 'award' => $this->award, 'email' => $this->email, 'faxNumber' => $this->faxNumber, 'isicV4' => $this->isicV4, 'netWorth' => $this->netWorth, 'colleague' => $this->colleague, 'globalLocationNumber' => $this->globalLocationNumber, 'relatedTo' => $this->relatedTo, 'worksFor' => $this->worksFor, 'vatID' => $this->vatID, 'hasOccupation' => $this->hasOccupation, 'contactPoint' => $this->contactPoint, 'memberOf' => $this->memberOf, 'additionalName' => $this->additionalName, 'sibling' => $this->sibling, 'brand' => $this->brand, 'hasOfferCatalog' => $this->hasOfferCatalog, 'address' => $this->address, 'familyName' => $this->familyName, 'deathDate' => $this->deathDate, 'interactionStatistic' => $this->interactionStatistic, 'weight' => $this->weight, 'homeLocation' => $this->homeLocation, 'nationality' => $this->nationality, 'birthPlace' => $this->birthPlace, 'honorificSuffix' => $this->honorificSuffix, 'spouse' => $this->spouse, 'performerIn' => $this->performerIn, 'makesOffer' => $this->makesOffer, 'alumniOf' => $this->alumniOf), static function ($value) : bool {
            return $value !== null;
        });
    }
}
