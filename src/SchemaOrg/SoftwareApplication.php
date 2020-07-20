<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A software application.")
 */
class SoftwareApplication extends CreativeWork implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $operatingSystem;
    /**
     * @var string|null
     */
    protected $availableOnDevice;
    /**
     * @var \PSX\Uri\Uri|ImageObject|null
     */
    protected $screenshot;
    /**
     * @var \PSX\Uri\Uri|string|null
     */
    protected $releaseNotes;
    /**
     * @var string|\PSX\Uri\Uri|null
     */
    protected $featureList;
    /**
     * @var string|null
     */
    protected $softwareVersion;
    /**
     * @var string|null
     */
    protected $countriesNotSupported;
    /**
     * @var string|\PSX\Uri\Uri|null
     */
    protected $memoryRequirements;
    /**
     * @var string|\PSX\Uri\Uri|null
     */
    protected $softwareRequirements;
    /**
     * @var CreativeWork|null
     */
    protected $softwareHelp;
    /**
     * @var string|null
     */
    protected $fileSize;
    /**
     * @var string|null
     */
    protected $permissions;
    /**
     * @var string|null
     */
    protected $countriesSupported;
    /**
     * @var string|\PSX\Uri\Uri|null
     */
    protected $storageRequirements;
    /**
     * @var string|\PSX\Uri\Uri|null
     */
    protected $applicationCategory;
    /**
     * @var SoftwareApplication|null
     */
    protected $softwareAddOn;
    /**
     * @var string|null
     */
    protected $applicationSuite;
    /**
     * @var \PSX\Uri\Uri|string|null
     */
    protected $applicationSubCategory;
    /**
     * @var \PSX\Uri\Uri|null
     */
    protected $installUrl;
    /**
     * @var \PSX\Uri\Uri|null
     */
    protected $downloadUrl;
    /**
     * @var DataFeed|null
     */
    protected $supportingData;
    /**
     * @var string|null
     */
    protected $processorRequirements;
    /**
     * @param string|null $operatingSystem
     */
    public function setOperatingSystem(?string $operatingSystem) : void
    {
        $this->operatingSystem = $operatingSystem;
    }
    /**
     * @return string|null
     */
    public function getOperatingSystem() : ?string
    {
        return $this->operatingSystem;
    }
    /**
     * @param string|null $availableOnDevice
     */
    public function setAvailableOnDevice(?string $availableOnDevice) : void
    {
        $this->availableOnDevice = $availableOnDevice;
    }
    /**
     * @return string|null
     */
    public function getAvailableOnDevice() : ?string
    {
        return $this->availableOnDevice;
    }
    /**
     * @param \PSX\Uri\Uri|ImageObject|null $screenshot
     */
    public function setScreenshot($screenshot) : void
    {
        $this->screenshot = $screenshot;
    }
    /**
     * @return \PSX\Uri\Uri|ImageObject|null
     */
    public function getScreenshot()
    {
        return $this->screenshot;
    }
    /**
     * @param \PSX\Uri\Uri|string|null $releaseNotes
     */
    public function setReleaseNotes($releaseNotes) : void
    {
        $this->releaseNotes = $releaseNotes;
    }
    /**
     * @return \PSX\Uri\Uri|string|null
     */
    public function getReleaseNotes()
    {
        return $this->releaseNotes;
    }
    /**
     * @param string|\PSX\Uri\Uri|null $featureList
     */
    public function setFeatureList($featureList) : void
    {
        $this->featureList = $featureList;
    }
    /**
     * @return string|\PSX\Uri\Uri|null
     */
    public function getFeatureList()
    {
        return $this->featureList;
    }
    /**
     * @param string|null $softwareVersion
     */
    public function setSoftwareVersion(?string $softwareVersion) : void
    {
        $this->softwareVersion = $softwareVersion;
    }
    /**
     * @return string|null
     */
    public function getSoftwareVersion() : ?string
    {
        return $this->softwareVersion;
    }
    /**
     * @param string|null $countriesNotSupported
     */
    public function setCountriesNotSupported(?string $countriesNotSupported) : void
    {
        $this->countriesNotSupported = $countriesNotSupported;
    }
    /**
     * @return string|null
     */
    public function getCountriesNotSupported() : ?string
    {
        return $this->countriesNotSupported;
    }
    /**
     * @param string|\PSX\Uri\Uri|null $memoryRequirements
     */
    public function setMemoryRequirements($memoryRequirements) : void
    {
        $this->memoryRequirements = $memoryRequirements;
    }
    /**
     * @return string|\PSX\Uri\Uri|null
     */
    public function getMemoryRequirements()
    {
        return $this->memoryRequirements;
    }
    /**
     * @param string|\PSX\Uri\Uri|null $softwareRequirements
     */
    public function setSoftwareRequirements($softwareRequirements) : void
    {
        $this->softwareRequirements = $softwareRequirements;
    }
    /**
     * @return string|\PSX\Uri\Uri|null
     */
    public function getSoftwareRequirements()
    {
        return $this->softwareRequirements;
    }
    /**
     * @param CreativeWork|null $softwareHelp
     */
    public function setSoftwareHelp(?CreativeWork $softwareHelp) : void
    {
        $this->softwareHelp = $softwareHelp;
    }
    /**
     * @return CreativeWork|null
     */
    public function getSoftwareHelp() : ?CreativeWork
    {
        return $this->softwareHelp;
    }
    /**
     * @param string|null $fileSize
     */
    public function setFileSize(?string $fileSize) : void
    {
        $this->fileSize = $fileSize;
    }
    /**
     * @return string|null
     */
    public function getFileSize() : ?string
    {
        return $this->fileSize;
    }
    /**
     * @param string|null $permissions
     */
    public function setPermissions(?string $permissions) : void
    {
        $this->permissions = $permissions;
    }
    /**
     * @return string|null
     */
    public function getPermissions() : ?string
    {
        return $this->permissions;
    }
    /**
     * @param string|null $countriesSupported
     */
    public function setCountriesSupported(?string $countriesSupported) : void
    {
        $this->countriesSupported = $countriesSupported;
    }
    /**
     * @return string|null
     */
    public function getCountriesSupported() : ?string
    {
        return $this->countriesSupported;
    }
    /**
     * @param string|\PSX\Uri\Uri|null $storageRequirements
     */
    public function setStorageRequirements($storageRequirements) : void
    {
        $this->storageRequirements = $storageRequirements;
    }
    /**
     * @return string|\PSX\Uri\Uri|null
     */
    public function getStorageRequirements()
    {
        return $this->storageRequirements;
    }
    /**
     * @param string|\PSX\Uri\Uri|null $applicationCategory
     */
    public function setApplicationCategory($applicationCategory) : void
    {
        $this->applicationCategory = $applicationCategory;
    }
    /**
     * @return string|\PSX\Uri\Uri|null
     */
    public function getApplicationCategory()
    {
        return $this->applicationCategory;
    }
    /**
     * @param SoftwareApplication|null $softwareAddOn
     */
    public function setSoftwareAddOn(?SoftwareApplication $softwareAddOn) : void
    {
        $this->softwareAddOn = $softwareAddOn;
    }
    /**
     * @return SoftwareApplication|null
     */
    public function getSoftwareAddOn() : ?SoftwareApplication
    {
        return $this->softwareAddOn;
    }
    /**
     * @param string|null $applicationSuite
     */
    public function setApplicationSuite(?string $applicationSuite) : void
    {
        $this->applicationSuite = $applicationSuite;
    }
    /**
     * @return string|null
     */
    public function getApplicationSuite() : ?string
    {
        return $this->applicationSuite;
    }
    /**
     * @param \PSX\Uri\Uri|string|null $applicationSubCategory
     */
    public function setApplicationSubCategory($applicationSubCategory) : void
    {
        $this->applicationSubCategory = $applicationSubCategory;
    }
    /**
     * @return \PSX\Uri\Uri|string|null
     */
    public function getApplicationSubCategory()
    {
        return $this->applicationSubCategory;
    }
    /**
     * @param \PSX\Uri\Uri|null $installUrl
     */
    public function setInstallUrl(?\PSX\Uri\Uri $installUrl) : void
    {
        $this->installUrl = $installUrl;
    }
    /**
     * @return \PSX\Uri\Uri|null
     */
    public function getInstallUrl() : ?\PSX\Uri\Uri
    {
        return $this->installUrl;
    }
    /**
     * @param \PSX\Uri\Uri|null $downloadUrl
     */
    public function setDownloadUrl(?\PSX\Uri\Uri $downloadUrl) : void
    {
        $this->downloadUrl = $downloadUrl;
    }
    /**
     * @return \PSX\Uri\Uri|null
     */
    public function getDownloadUrl() : ?\PSX\Uri\Uri
    {
        return $this->downloadUrl;
    }
    /**
     * @param DataFeed|null $supportingData
     */
    public function setSupportingData(?DataFeed $supportingData) : void
    {
        $this->supportingData = $supportingData;
    }
    /**
     * @return DataFeed|null
     */
    public function getSupportingData() : ?DataFeed
    {
        return $this->supportingData;
    }
    /**
     * @param string|null $processorRequirements
     */
    public function setProcessorRequirements(?string $processorRequirements) : void
    {
        $this->processorRequirements = $processorRequirements;
    }
    /**
     * @return string|null
     */
    public function getProcessorRequirements() : ?string
    {
        return $this->processorRequirements;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('operatingSystem' => $this->operatingSystem, 'availableOnDevice' => $this->availableOnDevice, 'screenshot' => $this->screenshot, 'releaseNotes' => $this->releaseNotes, 'featureList' => $this->featureList, 'softwareVersion' => $this->softwareVersion, 'countriesNotSupported' => $this->countriesNotSupported, 'memoryRequirements' => $this->memoryRequirements, 'softwareRequirements' => $this->softwareRequirements, 'softwareHelp' => $this->softwareHelp, 'fileSize' => $this->fileSize, 'permissions' => $this->permissions, 'countriesSupported' => $this->countriesSupported, 'storageRequirements' => $this->storageRequirements, 'applicationCategory' => $this->applicationCategory, 'softwareAddOn' => $this->softwareAddOn, 'applicationSuite' => $this->applicationSuite, 'applicationSubCategory' => $this->applicationSubCategory, 'installUrl' => $this->installUrl, 'downloadUrl' => $this->downloadUrl, 'supportingData' => $this->supportingData, 'processorRequirements' => $this->processorRequirements), static function ($value) : bool {
            return $value !== null;
        });
    }
}
