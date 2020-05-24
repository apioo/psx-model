<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("The `Link object` represents a possible design-time link for a response. The presence of a link does not guarantee the caller's ability to successfully invoke it, rather it provides a known relationship and traversal mechanism between responses and other operations.  Unlike _dynamic_ links (i.e. links provided **in** the response payload), the OAS linking mechanism does not require link information in the runtime response.  For computing links, and providing instructions to execute them, a runtime expression is used for accessing values in an operation and using them as parameters while invoking the linked operation.")
 */
class Link
{
    /**
     * @var string
     */
    protected $operationRef;
    /**
     * @var string
     */
    protected $operationId;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var Server
     */
    protected $server;
    /**
     * @param string $operationRef
     */
    public function setOperationRef(?string $operationRef)
    {
        $this->operationRef = $operationRef;
    }
    /**
     * @return string
     */
    public function getOperationRef() : ?string
    {
        return $this->operationRef;
    }
    /**
     * @param string $operationId
     */
    public function setOperationId(?string $operationId)
    {
        $this->operationId = $operationId;
    }
    /**
     * @return string
     */
    public function getOperationId() : ?string
    {
        return $this->operationId;
    }
    /**
     * @param string $description
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param Server $server
     */
    public function setServer(?Server $server)
    {
        $this->server = $server;
    }
    /**
     * @return Server
     */
    public function getServer() : ?Server
    {
        return $this->server;
    }
}
