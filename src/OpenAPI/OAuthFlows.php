<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;


class OAuthFlows
{
    /**
     * @var OAuthFlow
     */
    protected $implicit;
    /**
     * @var OAuthFlow
     */
    protected $password;
    /**
     * @var OAuthFlow
     */
    protected $clientCredentials;
    /**
     * @var OAuthFlow
     */
    protected $authorizationCode;
    /**
     * @param OAuthFlow $implicit
     */
    public function setImplicit(?OAuthFlow $implicit)
    {
        $this->implicit = $implicit;
    }
    /**
     * @return OAuthFlow
     */
    public function getImplicit() : ?OAuthFlow
    {
        return $this->implicit;
    }
    /**
     * @param OAuthFlow $password
     */
    public function setPassword(?OAuthFlow $password)
    {
        $this->password = $password;
    }
    /**
     * @return OAuthFlow
     */
    public function getPassword() : ?OAuthFlow
    {
        return $this->password;
    }
    /**
     * @param OAuthFlow $clientCredentials
     */
    public function setClientCredentials(?OAuthFlow $clientCredentials)
    {
        $this->clientCredentials = $clientCredentials;
    }
    /**
     * @return OAuthFlow
     */
    public function getClientCredentials() : ?OAuthFlow
    {
        return $this->clientCredentials;
    }
    /**
     * @param OAuthFlow $authorizationCode
     */
    public function setAuthorizationCode(?OAuthFlow $authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;
    }
    /**
     * @return OAuthFlow
     */
    public function getAuthorizationCode() : ?OAuthFlow
    {
        return $this->authorizationCode;
    }
}
