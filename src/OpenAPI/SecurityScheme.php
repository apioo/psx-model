<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;


class SecurityScheme implements \JsonSerializable
{
    protected ?string $type = null;
    protected ?string $description = null;
    protected ?string $name = null;
    protected ?string $in = null;
    protected ?string $scheme = null;
    protected ?string $bearerFormat = null;
    protected ?OAuthFlows $flows = null;
    protected ?string $openIdConnectUrl = null;
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    public function getType() : ?string
    {
        return $this->type;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setIn(?string $in) : void
    {
        $this->in = $in;
    }
    public function getIn() : ?string
    {
        return $this->in;
    }
    public function setScheme(?string $scheme) : void
    {
        $this->scheme = $scheme;
    }
    public function getScheme() : ?string
    {
        return $this->scheme;
    }
    public function setBearerFormat(?string $bearerFormat) : void
    {
        $this->bearerFormat = $bearerFormat;
    }
    public function getBearerFormat() : ?string
    {
        return $this->bearerFormat;
    }
    public function setFlows(?OAuthFlows $flows) : void
    {
        $this->flows = $flows;
    }
    public function getFlows() : ?OAuthFlows
    {
        return $this->flows;
    }
    public function setOpenIdConnectUrl(?string $openIdConnectUrl) : void
    {
        $this->openIdConnectUrl = $openIdConnectUrl;
    }
    public function getOpenIdConnectUrl() : ?string
    {
        return $this->openIdConnectUrl;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('type' => $this->type, 'description' => $this->description, 'name' => $this->name, 'in' => $this->in, 'scheme' => $this->scheme, 'bearerFormat' => $this->bearerFormat, 'flows' => $this->flows, 'openIdConnectUrl' => $this->openIdConnectUrl), static function ($value) : bool {
            return $value !== null;
        });
    }
}

