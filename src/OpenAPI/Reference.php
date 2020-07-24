<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("A simple object to allow referencing other components in the specification, internally and externally.  The Reference Object is defined by JSON Reference and follows the same structure, behavior and rules.   For this specification, reference resolution is accomplished as defined by the JSON Reference specification and not by the JSON Schema specification.")
 * @Required({"$ref"})
 */
class Reference implements \JsonSerializable
{
    /**
     * @var string|null
     * @Key("$ref")
     */
    protected $ref;
    /**
     * @param string|null $ref
     */
    public function setRef(?string $ref) : void
    {
        $this->ref = $ref;
    }
    /**
     * @return string|null
     */
    public function getRef() : ?string
    {
        return $this->ref;
    }
    public function jsonSerialize()
    {
        return array_filter(array('$ref' => $this->ref), static function ($value) : bool {
            return $value !== null;
        });
    }
}
