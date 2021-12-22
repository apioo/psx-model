<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Cloud implements \JsonSerializable
{
    protected ?string $domain = null;
    protected ?int $port = null;
    protected ?string $path = null;
    protected ?string $registerProcedure = null;
    protected ?string $protocol = null;
    public function setDomain(?string $domain) : void
    {
        $this->domain = $domain;
    }
    public function getDomain() : ?string
    {
        return $this->domain;
    }
    public function setPort(?int $port) : void
    {
        $this->port = $port;
    }
    public function getPort() : ?int
    {
        return $this->port;
    }
    public function setPath(?string $path) : void
    {
        $this->path = $path;
    }
    public function getPath() : ?string
    {
        return $this->path;
    }
    public function setRegisterProcedure(?string $registerProcedure) : void
    {
        $this->registerProcedure = $registerProcedure;
    }
    public function getRegisterProcedure() : ?string
    {
        return $this->registerProcedure;
    }
    public function setProtocol(?string $protocol) : void
    {
        $this->protocol = $protocol;
    }
    public function getProtocol() : ?string
    {
        return $this->protocol;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('domain' => $this->domain, 'port' => $this->port, 'path' => $this->path, 'registerProcedure' => $this->registerProcedure, 'protocol' => $this->protocol), static function ($value) : bool {
            return $value !== null;
        });
    }
}

