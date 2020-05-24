<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;


class SecurityScheme
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $in;
    /**
     * @var string
     */
    protected $scheme;
    /**
     * @var string
     */
    protected $bearerFormat;
    /**
     * @var OAuthFlows
     */
    protected $flows;
    /**
     * @var string
     */
    protected $openIdConnectUrl;
    /**
     * @param string $type
     */
    public function setType(?string $type)
    {
        $this->type = $type;
    }
    /**
     * @return string
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * @param string $description
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param string $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string $in
     */
    public function setIn(?string $in)
    {
        $this->in = $in;
    }
    /**
     * @return string
     */
    public function getIn() : ?string
    {
        return $this->in;
    }
    /**
     * @param string $scheme
     */
    public function setScheme(?string $scheme)
    {
        $this->scheme = $scheme;
    }
    /**
     * @return string
     */
    public function getScheme() : ?string
    {
        return $this->scheme;
    }
    /**
     * @param string $bearerFormat
     */
    public function setBearerFormat(?string $bearerFormat)
    {
        $this->bearerFormat = $bearerFormat;
    }
    /**
     * @return string
     */
    public function getBearerFormat() : ?string
    {
        return $this->bearerFormat;
    }
    /**
     * @param OAuthFlows $flows
     */
    public function setFlows(?OAuthFlows $flows)
    {
        $this->flows = $flows;
    }
    /**
     * @return OAuthFlows
     */
    public function getFlows() : ?OAuthFlows
    {
        return $this->flows;
    }
    /**
     * @param string $openIdConnectUrl
     */
    public function setOpenIdConnectUrl(?string $openIdConnectUrl)
    {
        $this->openIdConnectUrl = $openIdConnectUrl;
    }
    /**
     * @return string
     */
    public function getOpenIdConnectUrl() : ?string
    {
        return $this->openIdConnectUrl;
    }
}
