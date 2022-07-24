<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A means for accessing a service, e.g. a government office location, web site, or phone number.')]
class ServiceChannel extends Intangible implements \JsonSerializable
{
    protected string|Language|null $availableLanguage = null;
    protected ?\PSX\Uri\Uri $serviceUrl = null;
    protected ?Place $serviceLocation = null;
    protected ?PostalAddress $servicePostalAddress = null;
    protected ?ContactPoint $serviceSmsNumber = null;
    protected ?ContactPoint $servicePhone = null;
    protected ?Duration $processingTime = null;
    protected ?Service $providesService = null;
    public function setAvailableLanguage(string|Language|null $availableLanguage) : void
    {
        $this->availableLanguage = $availableLanguage;
    }
    public function getAvailableLanguage() : string|Language|null
    {
        return $this->availableLanguage;
    }
    public function setServiceUrl(?\PSX\Uri\Uri $serviceUrl) : void
    {
        $this->serviceUrl = $serviceUrl;
    }
    public function getServiceUrl() : ?\PSX\Uri\Uri
    {
        return $this->serviceUrl;
    }
    public function setServiceLocation(?Place $serviceLocation) : void
    {
        $this->serviceLocation = $serviceLocation;
    }
    public function getServiceLocation() : ?Place
    {
        return $this->serviceLocation;
    }
    public function setServicePostalAddress(?PostalAddress $servicePostalAddress) : void
    {
        $this->servicePostalAddress = $servicePostalAddress;
    }
    public function getServicePostalAddress() : ?PostalAddress
    {
        return $this->servicePostalAddress;
    }
    public function setServiceSmsNumber(?ContactPoint $serviceSmsNumber) : void
    {
        $this->serviceSmsNumber = $serviceSmsNumber;
    }
    public function getServiceSmsNumber() : ?ContactPoint
    {
        return $this->serviceSmsNumber;
    }
    public function setServicePhone(?ContactPoint $servicePhone) : void
    {
        $this->servicePhone = $servicePhone;
    }
    public function getServicePhone() : ?ContactPoint
    {
        return $this->servicePhone;
    }
    public function setProcessingTime(?Duration $processingTime) : void
    {
        $this->processingTime = $processingTime;
    }
    public function getProcessingTime() : ?Duration
    {
        return $this->processingTime;
    }
    public function setProvidesService(?Service $providesService) : void
    {
        $this->providesService = $providesService;
    }
    public function getProvidesService() : ?Service
    {
        return $this->providesService;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('availableLanguage' => $this->availableLanguage, 'serviceUrl' => $this->serviceUrl, 'serviceLocation' => $this->serviceLocation, 'servicePostalAddress' => $this->servicePostalAddress, 'serviceSmsNumber' => $this->serviceSmsNumber, 'servicePhone' => $this->servicePhone, 'processingTime' => $this->processingTime, 'providesService' => $this->providesService), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

