<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("The `Link object` represents a possible design-time link for a response. The presence of a link does not guarantee the caller's ability to successfully invoke it, rather it provides a known relationship and traversal mechanism between responses and other operations.  Unlike _dynamic_ links (i.e. links provided **in** the response payload), the OAS linking mechanism does not require link information in the runtime response.  For computing links, and providing instructions to execute them, a runtime expression is used for accessing values in an operation and using them as parameters while invoking the linked operation.")
 */
class Link implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $operationRef;
    /**
     * @var string|null
     */
    protected $operationId;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var Server|null
     */
    protected $server;
    /**
     * @param string|null $operationRef
     */
    public function setOperationRef(?string $operationRef) : void
    {
        $this->operationRef = $operationRef;
    }
    /**
     * @return string|null
     */
    public function getOperationRef() : ?string
    {
        return $this->operationRef;
    }
    /**
     * @param string|null $operationId
     */
    public function setOperationId(?string $operationId) : void
    {
        $this->operationId = $operationId;
    }
    /**
     * @return string|null
     */
    public function getOperationId() : ?string
    {
        return $this->operationId;
    }
    /**
     * @param string|null $description
     */
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param Server|null $server
     */
    public function setServer(?Server $server) : void
    {
        $this->server = $server;
    }
    /**
     * @return Server|null
     */
    public function getServer() : ?Server
    {
        return $this->server;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('operationRef' => $this->operationRef, 'operationId' => $this->operationId, 'description' => $this->description, 'server' => $this->server), static function ($value) : bool {
            return $value !== null;
        });
    }
}
