<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A contact point&#x2014;for example, a Customer Complaints department.')]
class ContactPoint extends StructuredValue implements \JsonSerializable
{
    protected ?string $telephone = null;
    protected ?ContactPointOption $contactOption = null;
    protected string|Language|null $availableLanguage = null;
    protected string|Product|null $productSupported = null;
    protected string|Place|GeoShape|null $areaServed = null;
    protected ?string $contactType = null;
    protected ?string $email = null;
    protected ?string $faxNumber = null;
    protected ?OpeningHoursSpecification $hoursAvailable = null;
    public function setTelephone(?string $telephone) : void
    {
        $this->telephone = $telephone;
    }
    public function getTelephone() : ?string
    {
        return $this->telephone;
    }
    public function setContactOption(?ContactPointOption $contactOption) : void
    {
        $this->contactOption = $contactOption;
    }
    public function getContactOption() : ?ContactPointOption
    {
        return $this->contactOption;
    }
    public function setAvailableLanguage(string|Language|null $availableLanguage) : void
    {
        $this->availableLanguage = $availableLanguage;
    }
    public function getAvailableLanguage() : string|Language|null
    {
        return $this->availableLanguage;
    }
    public function setProductSupported(string|Product|null $productSupported) : void
    {
        $this->productSupported = $productSupported;
    }
    public function getProductSupported() : string|Product|null
    {
        return $this->productSupported;
    }
    public function setAreaServed(string|Place|GeoShape|null $areaServed) : void
    {
        $this->areaServed = $areaServed;
    }
    public function getAreaServed() : string|Place|GeoShape|null
    {
        return $this->areaServed;
    }
    public function setContactType(?string $contactType) : void
    {
        $this->contactType = $contactType;
    }
    public function getContactType() : ?string
    {
        return $this->contactType;
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
    public function setHoursAvailable(?OpeningHoursSpecification $hoursAvailable) : void
    {
        $this->hoursAvailable = $hoursAvailable;
    }
    public function getHoursAvailable() : ?OpeningHoursSpecification
    {
        return $this->hoursAvailable;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('telephone' => $this->telephone, 'contactOption' => $this->contactOption, 'availableLanguage' => $this->availableLanguage, 'productSupported' => $this->productSupported, 'areaServed' => $this->areaServed, 'contactType' => $this->contactType, 'email' => $this->email, 'faxNumber' => $this->faxNumber, 'hoursAvailable' => $this->hoursAvailable), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

