<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A means for accessing a service, e.g. a government office location, web site, or phone number.")
 */
class ServiceChannel extends Intangible implements \JsonSerializable
{
    /**
     * @var string|Language|null
     */
    protected $availableLanguage;
    /**
     * @var \PSX\Uri\Uri|null
     */
    protected $serviceUrl;
    /**
     * @var Place|null
     */
    protected $serviceLocation;
    /**
     * @var PostalAddress|null
     */
    protected $servicePostalAddress;
    /**
     * @var ContactPoint|null
     */
    protected $serviceSmsNumber;
    /**
     * @var ContactPoint|null
     */
    protected $servicePhone;
    /**
     * @var Duration|null
     */
    protected $processingTime;
    /**
     * @var Service|null
     */
    protected $providesService;
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
     * @param \PSX\Uri\Uri|null $serviceUrl
     */
    public function setServiceUrl(?\PSX\Uri\Uri $serviceUrl) : void
    {
        $this->serviceUrl = $serviceUrl;
    }
    /**
     * @return \PSX\Uri\Uri|null
     */
    public function getServiceUrl() : ?\PSX\Uri\Uri
    {
        return $this->serviceUrl;
    }
    /**
     * @param Place|null $serviceLocation
     */
    public function setServiceLocation(?Place $serviceLocation) : void
    {
        $this->serviceLocation = $serviceLocation;
    }
    /**
     * @return Place|null
     */
    public function getServiceLocation() : ?Place
    {
        return $this->serviceLocation;
    }
    /**
     * @param PostalAddress|null $servicePostalAddress
     */
    public function setServicePostalAddress(?PostalAddress $servicePostalAddress) : void
    {
        $this->servicePostalAddress = $servicePostalAddress;
    }
    /**
     * @return PostalAddress|null
     */
    public function getServicePostalAddress() : ?PostalAddress
    {
        return $this->servicePostalAddress;
    }
    /**
     * @param ContactPoint|null $serviceSmsNumber
     */
    public function setServiceSmsNumber(?ContactPoint $serviceSmsNumber) : void
    {
        $this->serviceSmsNumber = $serviceSmsNumber;
    }
    /**
     * @return ContactPoint|null
     */
    public function getServiceSmsNumber() : ?ContactPoint
    {
        return $this->serviceSmsNumber;
    }
    /**
     * @param ContactPoint|null $servicePhone
     */
    public function setServicePhone(?ContactPoint $servicePhone) : void
    {
        $this->servicePhone = $servicePhone;
    }
    /**
     * @return ContactPoint|null
     */
    public function getServicePhone() : ?ContactPoint
    {
        return $this->servicePhone;
    }
    /**
     * @param Duration|null $processingTime
     */
    public function setProcessingTime(?Duration $processingTime) : void
    {
        $this->processingTime = $processingTime;
    }
    /**
     * @return Duration|null
     */
    public function getProcessingTime() : ?Duration
    {
        return $this->processingTime;
    }
    /**
     * @param Service|null $providesService
     */
    public function setProvidesService(?Service $providesService) : void
    {
        $this->providesService = $providesService;
    }
    /**
     * @return Service|null
     */
    public function getProvidesService() : ?Service
    {
        return $this->providesService;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('availableLanguage' => $this->availableLanguage, 'serviceUrl' => $this->serviceUrl, 'serviceLocation' => $this->serviceLocation, 'servicePostalAddress' => $this->servicePostalAddress, 'serviceSmsNumber' => $this->serviceSmsNumber, 'servicePhone' => $this->servicePhone, 'processingTime' => $this->processingTime, 'providesService' => $this->providesService), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
