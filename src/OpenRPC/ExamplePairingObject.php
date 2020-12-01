<?php

declare(strict_types = 1);

namespace PSX\Model\OpenRPC;

/**
 * @Description("The example Pairing object consists of a set of example params and result. The result is what you can expect from the JSON-RPC service given the exact params.")
 */
class ExamplePairingObject implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $summary;
    /**
     * @var array<ExampleObject>|null
     */
    protected $params;
    /**
     * @var ExampleObject|null
     */
    protected $result;
    /**
     * @param string|null $name
     */
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    /**
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
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
     * @param string|null $summary
     */
    public function setSummary(?string $summary) : void
    {
        $this->summary = $summary;
    }
    /**
     * @return string|null
     */
    public function getSummary() : ?string
    {
        return $this->summary;
    }
    /**
     * @param array<ExampleObject>|null $params
     */
    public function setParams(?array $params) : void
    {
        $this->params = $params;
    }
    /**
     * @return array<ExampleObject>|null
     */
    public function getParams() : ?array
    {
        return $this->params;
    }
    /**
     * @param ExampleObject|null $result
     */
    public function setResult(?ExampleObject $result) : void
    {
        $this->result = $result;
    }
    /**
     * @return ExampleObject|null
     */
    public function getResult() : ?ExampleObject
    {
        return $this->result;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('name' => $this->name, 'description' => $this->description, 'summary' => $this->summary, 'params' => $this->params, 'result' => $this->result), static function ($value) : bool {
            return $value !== null;
        });
    }
}
