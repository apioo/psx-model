<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An entry point, within some Web-based protocol.')]
class EntryPoint extends Intangible implements \JsonSerializable
{
    protected string|\PSX\Uri\Uri|null $actionPlatform = null;
    protected ?string $contentType = null;
    protected ?string $encodingType = null;
    protected ?string $urlTemplate = null;
    protected ?SoftwareApplication $actionApplication = null;
    protected ?string $httpMethod = null;
    public function setActionPlatform(string|\PSX\Uri\Uri|null $actionPlatform) : void
    {
        $this->actionPlatform = $actionPlatform;
    }
    public function getActionPlatform() : string|\PSX\Uri\Uri|null
    {
        return $this->actionPlatform;
    }
    public function setContentType(?string $contentType) : void
    {
        $this->contentType = $contentType;
    }
    public function getContentType() : ?string
    {
        return $this->contentType;
    }
    public function setEncodingType(?string $encodingType) : void
    {
        $this->encodingType = $encodingType;
    }
    public function getEncodingType() : ?string
    {
        return $this->encodingType;
    }
    public function setUrlTemplate(?string $urlTemplate) : void
    {
        $this->urlTemplate = $urlTemplate;
    }
    public function getUrlTemplate() : ?string
    {
        return $this->urlTemplate;
    }
    public function setActionApplication(?SoftwareApplication $actionApplication) : void
    {
        $this->actionApplication = $actionApplication;
    }
    public function getActionApplication() : ?SoftwareApplication
    {
        return $this->actionApplication;
    }
    public function setHttpMethod(?string $httpMethod) : void
    {
        $this->httpMethod = $httpMethod;
    }
    public function getHttpMethod() : ?string
    {
        return $this->httpMethod;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('actionPlatform' => $this->actionPlatform, 'contentType' => $this->contentType, 'encodingType' => $this->encodingType, 'urlTemplate' => $this->urlTemplate, 'actionApplication' => $this->actionApplication, 'httpMethod' => $this->httpMethod), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

