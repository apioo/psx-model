<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;


class OAuthFlow
{
    /**
     * @var string|null
     */
    protected $authorizationUrl;
    /**
     * @var string|null
     */
    protected $tokenUrl;
    /**
     * @var string|null
     */
    protected $refreshUrl;
    /**
     * @var Scopes|null
     */
    protected $scopes;
    /**
     * @param string|null $authorizationUrl
     */
    public function setAuthorizationUrl(?string $authorizationUrl) : void
    {
        $this->authorizationUrl = $authorizationUrl;
    }
    /**
     * @return string|null
     */
    public function getAuthorizationUrl() : ?string
    {
        return $this->authorizationUrl;
    }
    /**
     * @param string|null $tokenUrl
     */
    public function setTokenUrl(?string $tokenUrl) : void
    {
        $this->tokenUrl = $tokenUrl;
    }
    /**
     * @return string|null
     */
    public function getTokenUrl() : ?string
    {
        return $this->tokenUrl;
    }
    /**
     * @param string|null $refreshUrl
     */
    public function setRefreshUrl(?string $refreshUrl) : void
    {
        $this->refreshUrl = $refreshUrl;
    }
    /**
     * @return string|null
     */
    public function getRefreshUrl() : ?string
    {
        return $this->refreshUrl;
    }
    /**
     * @param Scopes|null $scopes
     */
    public function setScopes(?Scopes $scopes) : void
    {
        $this->scopes = $scopes;
    }
    /**
     * @return Scopes|null
     */
    public function getScopes() : ?Scopes
    {
        return $this->scopes;
    }
}
