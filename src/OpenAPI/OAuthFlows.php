<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;


class OAuthFlows
{
    /**
     * @var OAuthFlow|null
     */
    protected $implicit;
    /**
     * @var OAuthFlow|null
     */
    protected $password;
    /**
     * @var OAuthFlow|null
     */
    protected $clientCredentials;
    /**
     * @var OAuthFlow|null
     */
    protected $authorizationCode;
    /**
     * @param OAuthFlow|null $implicit
     */
    public function setImplicit(?OAuthFlow $implicit) : void
    {
        $this->implicit = $implicit;
    }
    /**
     * @return OAuthFlow|null
     */
    public function getImplicit() : ?OAuthFlow
    {
        return $this->implicit;
    }
    /**
     * @param OAuthFlow|null $password
     */
    public function setPassword(?OAuthFlow $password) : void
    {
        $this->password = $password;
    }
    /**
     * @return OAuthFlow|null
     */
    public function getPassword() : ?OAuthFlow
    {
        return $this->password;
    }
    /**
     * @param OAuthFlow|null $clientCredentials
     */
    public function setClientCredentials(?OAuthFlow $clientCredentials) : void
    {
        $this->clientCredentials = $clientCredentials;
    }
    /**
     * @return OAuthFlow|null
     */
    public function getClientCredentials() : ?OAuthFlow
    {
        return $this->clientCredentials;
    }
    /**
     * @param OAuthFlow|null $authorizationCode
     */
    public function setAuthorizationCode(?OAuthFlow $authorizationCode) : void
    {
        $this->authorizationCode = $authorizationCode;
    }
    /**
     * @return OAuthFlow|null
     */
    public function getAuthorizationCode() : ?OAuthFlow
    {
        return $this->authorizationCode;
    }
}
