<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;


class OAuthFlow implements \JsonSerializable
{
    protected ?string $authorizationUrl = null;
    protected ?string $tokenUrl = null;
    protected ?string $refreshUrl = null;
    protected ?Scopes $scopes = null;
    public function setAuthorizationUrl(?string $authorizationUrl) : void
    {
        $this->authorizationUrl = $authorizationUrl;
    }
    public function getAuthorizationUrl() : ?string
    {
        return $this->authorizationUrl;
    }
    public function setTokenUrl(?string $tokenUrl) : void
    {
        $this->tokenUrl = $tokenUrl;
    }
    public function getTokenUrl() : ?string
    {
        return $this->tokenUrl;
    }
    public function setRefreshUrl(?string $refreshUrl) : void
    {
        $this->refreshUrl = $refreshUrl;
    }
    public function getRefreshUrl() : ?string
    {
        return $this->refreshUrl;
    }
    public function setScopes(?Scopes $scopes) : void
    {
        $this->scopes = $scopes;
    }
    public function getScopes() : ?Scopes
    {
        return $this->scopes;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('authorizationUrl' => $this->authorizationUrl, 'tokenUrl' => $this->tokenUrl, 'refreshUrl' => $this->refreshUrl, 'scopes' => $this->scopes), static function ($value) : bool {
            return $value !== null;
        });
    }
}

