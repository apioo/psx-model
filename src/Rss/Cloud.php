<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Cloud
{
    /**
     * @var string|null
     */
    protected $domain;
    /**
     * @var int|null
     */
    protected $port;
    /**
     * @var string|null
     */
    protected $path;
    /**
     * @var string|null
     */
    protected $registerProcedure;
    /**
     * @var string|null
     */
    protected $protocol;
    /**
     * @param string|null $domain
     */
    public function setDomain(?string $domain) : void
    {
        $this->domain = $domain;
    }
    /**
     * @return string|null
     */
    public function getDomain() : ?string
    {
        return $this->domain;
    }
    /**
     * @param int|null $port
     */
    public function setPort(?int $port) : void
    {
        $this->port = $port;
    }
    /**
     * @return int|null
     */
    public function getPort() : ?int
    {
        return $this->port;
    }
    /**
     * @param string|null $path
     */
    public function setPath(?string $path) : void
    {
        $this->path = $path;
    }
    /**
     * @return string|null
     */
    public function getPath() : ?string
    {
        return $this->path;
    }
    /**
     * @param string|null $registerProcedure
     */
    public function setRegisterProcedure(?string $registerProcedure) : void
    {
        $this->registerProcedure = $registerProcedure;
    }
    /**
     * @return string|null
     */
    public function getRegisterProcedure() : ?string
    {
        return $this->registerProcedure;
    }
    /**
     * @param string|null $protocol
     */
    public function setProtocol(?string $protocol) : void
    {
        $this->protocol = $protocol;
    }
    /**
     * @return string|null
     */
    public function getProtocol() : ?string
    {
        return $this->protocol;
    }
}
