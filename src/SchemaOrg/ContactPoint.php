<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A contact point&#x2014;for example, a Customer Complaints department.")
 */
class ContactPoint extends StructuredValue implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $telephone;
    /**
     * @var ContactPointOption|null
     */
    protected $contactOption;
    /**
     * @var string|Language|null
     */
    protected $availableLanguage;
    /**
     * @var string|Product|null
     */
    protected $productSupported;
    /**
     * @var string|Place|GeoShape|null
     */
    protected $areaServed;
    /**
     * @var string|null
     */
    protected $contactType;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @var string|null
     */
    protected $faxNumber;
    /**
     * @var OpeningHoursSpecification|null
     */
    protected $hoursAvailable;
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
     * @param ContactPointOption|null $contactOption
     */
    public function setContactOption(?ContactPointOption $contactOption) : void
    {
        $this->contactOption = $contactOption;
    }
    /**
     * @return ContactPointOption|null
     */
    public function getContactOption() : ?ContactPointOption
    {
        return $this->contactOption;
    }
    /**
     * @param string|Language|null $availableLanguage
     */
    public function setAvailableLanguage($availableLanguage) : void
    {
        $this->availableLanguage = $availableLanguage;
    }
    /**
     * @return string|Language|null
     */
    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
    }
    /**
     * @param string|Product|null $productSupported
     */
    public function setProductSupported($productSupported) : void
    {
        $this->productSupported = $productSupported;
    }
    /**
     * @return string|Product|null
     */
    public function getProductSupported()
    {
        return $this->productSupported;
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
     * @param string|null $contactType
     */
    public function setContactType(?string $contactType) : void
    {
        $this->contactType = $contactType;
    }
    /**
     * @return string|null
     */
    public function getContactType() : ?string
    {
        return $this->contactType;
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
     * @param OpeningHoursSpecification|null $hoursAvailable
     */
    public function setHoursAvailable(?OpeningHoursSpecification $hoursAvailable) : void
    {
        $this->hoursAvailable = $hoursAvailable;
    }
    /**
     * @return OpeningHoursSpecification|null
     */
    public function getHoursAvailable() : ?OpeningHoursSpecification
    {
        return $this->hoursAvailable;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('telephone' => $this->telephone, 'contactOption' => $this->contactOption, 'availableLanguage' => $this->availableLanguage, 'productSupported' => $this->productSupported, 'areaServed' => $this->areaServed, 'contactType' => $this->contactType, 'email' => $this->email, 'faxNumber' => $this->faxNumber, 'hoursAvailable' => $this->hoursAvailable), static function ($value) : bool {
            return $value !== null;
        });
    }
}
