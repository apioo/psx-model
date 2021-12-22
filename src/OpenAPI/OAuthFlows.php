<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;


class OAuthFlows implements \JsonSerializable
{
    protected ?OAuthFlow $implicit = null;
    protected ?OAuthFlow $password = null;
    protected ?OAuthFlow $clientCredentials = null;
    protected ?OAuthFlow $authorizationCode = null;
    public function setImplicit(?OAuthFlow $implicit) : void
    {
        $this->implicit = $implicit;
    }
    public function getImplicit() : ?OAuthFlow
    {
        return $this->implicit;
    }
    public function setPassword(?OAuthFlow $password) : void
    {
        $this->password = $password;
    }
    public function getPassword() : ?OAuthFlow
    {
        return $this->password;
    }
    public function setClientCredentials(?OAuthFlow $clientCredentials) : void
    {
        $this->clientCredentials = $clientCredentials;
    }
    public function getClientCredentials() : ?OAuthFlow
    {
        return $this->clientCredentials;
    }
    public function setAuthorizationCode(?OAuthFlow $authorizationCode) : void
    {
        $this->authorizationCode = $authorizationCode;
    }
    public function getAuthorizationCode() : ?OAuthFlow
    {
        return $this->authorizationCode;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('implicit' => $this->implicit, 'password' => $this->password, 'clientCredentials' => $this->clientCredentials, 'authorizationCode' => $this->authorizationCode), static function ($value) : bool {
            return $value !== null;
        });
    }
}

