<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;


class SecurityScheme implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $in;
    /**
     * @var string|null
     */
    protected $scheme;
    /**
     * @var string|null
     */
    protected $bearerFormat;
    /**
     * @var OAuthFlows|null
     */
    protected $flows;
    /**
     * @var string|null
     */
    protected $openIdConnectUrl;
    /**
     * @param string|null $type
     */
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    /**
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * @param string|null $description
     */
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param string|null $name
     */
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    /**
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string|null $in
     */
    public function setIn(?string $in) : void
    {
        $this->in = $in;
    }
    /**
     * @return string|null
     */
    public function getIn() : ?string
    {
        return $this->in;
    }
    /**
     * @param string|null $scheme
     */
    public function setScheme(?string $scheme) : void
    {
        $this->scheme = $scheme;
    }
    /**
     * @return string|null
     */
    public function getScheme() : ?string
    {
        return $this->scheme;
    }
    /**
     * @param string|null $bearerFormat
     */
    public function setBearerFormat(?string $bearerFormat) : void
    {
        $this->bearerFormat = $bearerFormat;
    }
    /**
     * @return string|null
     */
    public function getBearerFormat() : ?string
    {
        return $this->bearerFormat;
    }
    /**
     * @param OAuthFlows|null $flows
     */
    public function setFlows(?OAuthFlows $flows) : void
    {
        $this->flows = $flows;
    }
    /**
     * @return OAuthFlows|null
     */
    public function getFlows() : ?OAuthFlows
    {
        return $this->flows;
    }
    /**
     * @param string|null $openIdConnectUrl
     */
    public function setOpenIdConnectUrl(?string $openIdConnectUrl) : void
    {
        $this->openIdConnectUrl = $openIdConnectUrl;
    }
    /**
     * @return string|null
     */
    public function getOpenIdConnectUrl() : ?string
    {
        return $this->openIdConnectUrl;
    }
    public function jsonSerialize()
    {
        return array_filter(array('type' => $this->type, 'description' => $this->description, 'name' => $this->name, 'in' => $this->in, 'scheme' => $this->scheme, 'bearerFormat' => $this->bearerFormat, 'flows' => $this->flows, 'openIdConnectUrl' => $this->openIdConnectUrl), static function ($value) : bool {
            return $value !== null;
        });
    }
}
