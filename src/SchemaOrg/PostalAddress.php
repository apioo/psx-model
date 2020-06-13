<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The mailing address.")
 */
class PostalAddress extends ContactPoint
{
    /**
     * @var string|Country|null
     */
    protected $addressCountry;
    /**
     * @var string|null
     */
    protected $addressLocality;
    /**
     * @var string|null
     */
    protected $postalCode;
    /**
     * @var string|null
     */
    protected $addressRegion;
    /**
     * @var string|null
     */
    protected $streetAddress;
    /**
     * @var string|null
     */
    protected $postOfficeBoxNumber;
    /**
     * @param string|Country|null $addressCountry
     */
    public function setAddressCountry($addressCountry) : void
    {
        $this->addressCountry = $addressCountry;
    }
    /**
     * @return string|Country|null
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }
    /**
     * @param string|null $addressLocality
     */
    public function setAddressLocality(?string $addressLocality) : void
    {
        $this->addressLocality = $addressLocality;
    }
    /**
     * @return string|null
     */
    public function getAddressLocality() : ?string
    {
        return $this->addressLocality;
    }
    /**
     * @param string|null $postalCode
     */
    public function setPostalCode(?string $postalCode) : void
    {
        $this->postalCode = $postalCode;
    }
    /**
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * @param string|null $addressRegion
     */
    public function setAddressRegion(?string $addressRegion) : void
    {
        $this->addressRegion = $addressRegion;
    }
    /**
     * @return string|null
     */
    public function getAddressRegion() : ?string
    {
        return $this->addressRegion;
    }
    /**
     * @param string|null $streetAddress
     */
    public function setStreetAddress(?string $streetAddress) : void
    {
        $this->streetAddress = $streetAddress;
    }
    /**
     * @return string|null
     */
    public function getStreetAddress() : ?string
    {
        return $this->streetAddress;
    }
    /**
     * @param string|null $postOfficeBoxNumber
     */
    public function setPostOfficeBoxNumber(?string $postOfficeBoxNumber) : void
    {
        $this->postOfficeBoxNumber = $postOfficeBoxNumber;
    }
    /**
     * @return string|null
     */
    public function getPostOfficeBoxNumber() : ?string
    {
        return $this->postOfficeBoxNumber;
    }
}
