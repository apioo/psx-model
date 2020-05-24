<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;


class OAuthFlow
{
    /**
     * @var string
     */
    protected $authorizationUrl;
    /**
     * @var string
     */
    protected $tokenUrl;
    /**
     * @var string
     */
    protected $refreshUrl;
    /**
     * @var Scopes
     */
    protected $scopes;
    /**
     * @param string $authorizationUrl
     */
    public function setAuthorizationUrl(?string $authorizationUrl)
    {
        $this->authorizationUrl = $authorizationUrl;
    }
    /**
     * @return string
     */
    public function getAuthorizationUrl() : ?string
    {
        return $this->authorizationUrl;
    }
    /**
     * @param string $tokenUrl
     */
    public function setTokenUrl(?string $tokenUrl)
    {
        $this->tokenUrl = $tokenUrl;
    }
    /**
     * @return string
     */
    public function getTokenUrl() : ?string
    {
        return $this->tokenUrl;
    }
    /**
     * @param string $refreshUrl
     */
    public function setRefreshUrl(?string $refreshUrl)
    {
        $this->refreshUrl = $refreshUrl;
    }
    /**
     * @return string
     */
    public function getRefreshUrl() : ?string
    {
        return $this->refreshUrl;
    }
    /**
     * @param Scopes $scopes
     */
    public function setScopes(?Scopes $scopes)
    {
        $this->scopes = $scopes;
    }
    /**
     * @return Scopes
     */
    public function getScopes() : ?Scopes
    {
        return $this->scopes;
    }
}
