<?php

declare(strict_types = 1);

namespace PSX\Model\Rss;


class Cloud
{
    /**
     * @var string
     */
    protected $domain;
    /**
     * @var int
     */
    protected $port;
    /**
     * @var string
     */
    protected $path;
    /**
     * @var string
     */
    protected $registerProcedure;
    /**
     * @var string
     */
    protected $protocol;
    /**
     * @param string $domain
     */
    public function setDomain(?string $domain)
    {
        $this->domain = $domain;
    }
    /**
     * @return string
     */
    public function getDomain() : ?string
    {
        return $this->domain;
    }
    /**
     * @param int $port
     */
    public function setPort(?int $port)
    {
        $this->port = $port;
    }
    /**
     * @return int
     */
    public function getPort() : ?int
    {
        return $this->port;
    }
    /**
     * @param string $path
     */
    public function setPath(?string $path)
    {
        $this->path = $path;
    }
    /**
     * @return string
     */
    public function getPath() : ?string
    {
        return $this->path;
    }
    /**
     * @param string $registerProcedure
     */
    public function setRegisterProcedure(?string $registerProcedure)
    {
        $this->registerProcedure = $registerProcedure;
    }
    /**
     * @return string
     */
    public function getRegisterProcedure() : ?string
    {
        return $this->registerProcedure;
    }
    /**
     * @param string $protocol
     */
    public function setProtocol(?string $protocol)
    {
        $this->protocol = $protocol;
    }
    /**
     * @return string
     */
    public function getProtocol() : ?string
    {
        return $this->protocol;
    }
}
