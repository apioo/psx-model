<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The mailing address.')]
class PostalAddress extends ContactPoint implements \JsonSerializable
{
    protected string|Country|null $addressCountry = null;
    protected ?string $addressLocality = null;
    protected ?string $postalCode = null;
    protected ?string $addressRegion = null;
    protected ?string $streetAddress = null;
    protected ?string $postOfficeBoxNumber = null;
    public function setAddressCountry(string|Country|null $addressCountry) : void
    {
        $this->addressCountry = $addressCountry;
    }
    public function getAddressCountry() : string|Country|null
    {
        return $this->addressCountry;
    }
    public function setAddressLocality(?string $addressLocality) : void
    {
        $this->addressLocality = $addressLocality;
    }
    public function getAddressLocality() : ?string
    {
        return $this->addressLocality;
    }
    public function setPostalCode(?string $postalCode) : void
    {
        $this->postalCode = $postalCode;
    }
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    public function setAddressRegion(?string $addressRegion) : void
    {
        $this->addressRegion = $addressRegion;
    }
    public function getAddressRegion() : ?string
    {
        return $this->addressRegion;
    }
    public function setStreetAddress(?string $streetAddress) : void
    {
        $this->streetAddress = $streetAddress;
    }
    public function getStreetAddress() : ?string
    {
        return $this->streetAddress;
    }
    public function setPostOfficeBoxNumber(?string $postOfficeBoxNumber) : void
    {
        $this->postOfficeBoxNumber = $postOfficeBoxNumber;
    }
    public function getPostOfficeBoxNumber() : ?string
    {
        return $this->postOfficeBoxNumber;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('addressCountry' => $this->addressCountry, 'addressLocality' => $this->addressLocality, 'postalCode' => $this->postalCode, 'addressRegion' => $this->addressRegion, 'streetAddress' => $this->streetAddress, 'postOfficeBoxNumber' => $this->postOfficeBoxNumber), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

