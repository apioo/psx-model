<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An entry point, within some Web-based protocol.")
 */
class EntryPoint extends Intangible
{
    /**
     * @var string|\PSX\Uri\Uri|null
     */
    protected $actionPlatform;
    /**
     * @var string|null
     */
    protected $contentType;
    /**
     * @var string|null
     */
    protected $encodingType;
    /**
     * @var string|null
     */
    protected $urlTemplate;
    /**
     * @var SoftwareApplication|null
     */
    protected $actionApplication;
    /**
     * @var string|null
     */
    protected $httpMethod;
    /**
     * @param string|\PSX\Uri\Uri|null $actionPlatform
     */
    public function setActionPlatform($actionPlatform) : void
    {
        $this->actionPlatform = $actionPlatform;
    }
    /**
     * @return string|\PSX\Uri\Uri|null
     */
    public function getActionPlatform()
    {
        return $this->actionPlatform;
    }
    /**
     * @param string|null $contentType
     */
    public function setContentType(?string $contentType) : void
    {
        $this->contentType = $contentType;
    }
    /**
     * @return string|null
     */
    public function getContentType() : ?string
    {
        return $this->contentType;
    }
    /**
     * @param string|null $encodingType
     */
    public function setEncodingType(?string $encodingType) : void
    {
        $this->encodingType = $encodingType;
    }
    /**
     * @return string|null
     */
    public function getEncodingType() : ?string
    {
        return $this->encodingType;
    }
    /**
     * @param string|null $urlTemplate
     */
    public function setUrlTemplate(?string $urlTemplate) : void
    {
        $this->urlTemplate = $urlTemplate;
    }
    /**
     * @return string|null
     */
    public function getUrlTemplate() : ?string
    {
        return $this->urlTemplate;
    }
    /**
     * @param SoftwareApplication|null $actionApplication
     */
    public function setActionApplication(?SoftwareApplication $actionApplication) : void
    {
        $this->actionApplication = $actionApplication;
    }
    /**
     * @return SoftwareApplication|null
     */
    public function getActionApplication() : ?SoftwareApplication
    {
        return $this->actionApplication;
    }
    /**
     * @param string|null $httpMethod
     */
    public function setHttpMethod(?string $httpMethod) : void
    {
        $this->httpMethod = $httpMethod;
    }
    /**
     * @return string|null
     */
    public function getHttpMethod() : ?string
    {
        return $this->httpMethod;
    }
}
