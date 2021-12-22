<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A software application.')]
class SoftwareApplication extends CreativeWork implements \JsonSerializable
{
    protected ?string $operatingSystem = null;
    protected ?string $availableOnDevice = null;
    protected \PSX\Uri\Uri|ImageObject|null $screenshot = null;
    protected \PSX\Uri\Uri|string|null $releaseNotes = null;
    protected string|\PSX\Uri\Uri|null $featureList = null;
    protected ?string $softwareVersion = null;
    protected ?string $countriesNotSupported = null;
    protected string|\PSX\Uri\Uri|null $memoryRequirements = null;
    protected string|\PSX\Uri\Uri|null $softwareRequirements = null;
    protected ?CreativeWork $softwareHelp = null;
    protected ?string $fileSize = null;
    protected ?string $permissions = null;
    protected ?string $countriesSupported = null;
    protected string|\PSX\Uri\Uri|null $storageRequirements = null;
    protected string|\PSX\Uri\Uri|null $applicationCategory = null;
    protected ?SoftwareApplication $softwareAddOn = null;
    protected ?string $applicationSuite = null;
    protected \PSX\Uri\Uri|string|null $applicationSubCategory = null;
    protected ?\PSX\Uri\Uri $installUrl = null;
    protected ?\PSX\Uri\Uri $downloadUrl = null;
    protected ?DataFeed $supportingData = null;
    protected ?string $processorRequirements = null;
    public function setOperatingSystem(?string $operatingSystem) : void
    {
        $this->operatingSystem = $operatingSystem;
    }
    public function getOperatingSystem() : ?string
    {
        return $this->operatingSystem;
    }
    public function setAvailableOnDevice(?string $availableOnDevice) : void
    {
        $this->availableOnDevice = $availableOnDevice;
    }
    public function getAvailableOnDevice() : ?string
    {
        return $this->availableOnDevice;
    }
    public function setScreenshot(\PSX\Uri\Uri|ImageObject|null $screenshot) : void
    {
        $this->screenshot = $screenshot;
    }
    public function getScreenshot() : \PSX\Uri\Uri|ImageObject|null
    {
        return $this->screenshot;
    }
    public function setReleaseNotes(\PSX\Uri\Uri|string|null $releaseNotes) : void
    {
        $this->releaseNotes = $releaseNotes;
    }
    public function getReleaseNotes() : \PSX\Uri\Uri|string|null
    {
        return $this->releaseNotes;
    }
    public function setFeatureList(string|\PSX\Uri\Uri|null $featureList) : void
    {
        $this->featureList = $featureList;
    }
    public function getFeatureList() : string|\PSX\Uri\Uri|null
    {
        return $this->featureList;
    }
    public function setSoftwareVersion(?string $softwareVersion) : void
    {
        $this->softwareVersion = $softwareVersion;
    }
    public function getSoftwareVersion() : ?string
    {
        return $this->softwareVersion;
    }
    public function setCountriesNotSupported(?string $countriesNotSupported) : void
    {
        $this->countriesNotSupported = $countriesNotSupported;
    }
    public function getCountriesNotSupported() : ?string
    {
        return $this->countriesNotSupported;
    }
    public function setMemoryRequirements(string|\PSX\Uri\Uri|null $memoryRequirements) : void
    {
        $this->memoryRequirements = $memoryRequirements;
    }
    public function getMemoryRequirements() : string|\PSX\Uri\Uri|null
    {
        return $this->memoryRequirements;
    }
    public function setSoftwareRequirements(string|\PSX\Uri\Uri|null $softwareRequirements) : void
    {
        $this->softwareRequirements = $softwareRequirements;
    }
    public function getSoftwareRequirements() : string|\PSX\Uri\Uri|null
    {
        return $this->softwareRequirements;
    }
    public function setSoftwareHelp(?CreativeWork $softwareHelp) : void
    {
        $this->softwareHelp = $softwareHelp;
    }
    public function getSoftwareHelp() : ?CreativeWork
    {
        return $this->softwareHelp;
    }
    public function setFileSize(?string $fileSize) : void
    {
        $this->fileSize = $fileSize;
    }
    public function getFileSize() : ?string
    {
        return $this->fileSize;
    }
    public function setPermissions(?string $permissions) : void
    {
        $this->permissions = $permissions;
    }
    public function getPermissions() : ?string
    {
        return $this->permissions;
    }
    public function setCountriesSupported(?string $countriesSupported) : void
    {
        $this->countriesSupported = $countriesSupported;
    }
    public function getCountriesSupported() : ?string
    {
        return $this->countriesSupported;
    }
    public function setStorageRequirements(string|\PSX\Uri\Uri|null $storageRequirements) : void
    {
        $this->storageRequirements = $storageRequirements;
    }
    public function getStorageRequirements() : string|\PSX\Uri\Uri|null
    {
        return $this->storageRequirements;
    }
    public function setApplicationCategory(string|\PSX\Uri\Uri|null $applicationCategory) : void
    {
        $this->applicationCategory = $applicationCategory;
    }
    public function getApplicationCategory() : string|\PSX\Uri\Uri|null
    {
        return $this->applicationCategory;
    }
    public function setSoftwareAddOn(?SoftwareApplication $softwareAddOn) : void
    {
        $this->softwareAddOn = $softwareAddOn;
    }
    public function getSoftwareAddOn() : ?SoftwareApplication
    {
        return $this->softwareAddOn;
    }
    public function setApplicationSuite(?string $applicationSuite) : void
    {
        $this->applicationSuite = $applicationSuite;
    }
    public function getApplicationSuite() : ?string
    {
        return $this->applicationSuite;
    }
    public function setApplicationSubCategory(\PSX\Uri\Uri|string|null $applicationSubCategory) : void
    {
        $this->applicationSubCategory = $applicationSubCategory;
    }
    public function getApplicationSubCategory() : \PSX\Uri\Uri|string|null
    {
        return $this->applicationSubCategory;
    }
    public function setInstallUrl(?\PSX\Uri\Uri $installUrl) : void
    {
        $this->installUrl = $installUrl;
    }
    public function getInstallUrl() : ?\PSX\Uri\Uri
    {
        return $this->installUrl;
    }
    public function setDownloadUrl(?\PSX\Uri\Uri $downloadUrl) : void
    {
        $this->downloadUrl = $downloadUrl;
    }
    public function getDownloadUrl() : ?\PSX\Uri\Uri
    {
        return $this->downloadUrl;
    }
    public function setSupportingData(?DataFeed $supportingData) : void
    {
        $this->supportingData = $supportingData;
    }
    public function getSupportingData() : ?DataFeed
    {
        return $this->supportingData;
    }
    public function setProcessorRequirements(?string $processorRequirements) : void
    {
        $this->processorRequirements = $processorRequirements;
    }
    public function getProcessorRequirements() : ?string
    {
        return $this->processorRequirements;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('operatingSystem' => $this->operatingSystem, 'availableOnDevice' => $this->availableOnDevice, 'screenshot' => $this->screenshot, 'releaseNotes' => $this->releaseNotes, 'featureList' => $this->featureList, 'softwareVersion' => $this->softwareVersion, 'countriesNotSupported' => $this->countriesNotSupported, 'memoryRequirements' => $this->memoryRequirements, 'softwareRequirements' => $this->softwareRequirements, 'softwareHelp' => $this->softwareHelp, 'fileSize' => $this->fileSize, 'permissions' => $this->permissions, 'countriesSupported' => $this->countriesSupported, 'storageRequirements' => $this->storageRequirements, 'applicationCategory' => $this->applicationCategory, 'softwareAddOn' => $this->softwareAddOn, 'applicationSuite' => $this->applicationSuite, 'applicationSubCategory' => $this->applicationSubCategory, 'installUrl' => $this->installUrl, 'downloadUrl' => $this->downloadUrl, 'supportingData' => $this->supportingData, 'processorRequirements' => $this->processorRequirements), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

