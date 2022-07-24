<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;
use PSX\Schema\Attribute\Required;

#[Description('A simple object to allow referencing other components in the specification, internally and externally.  The Reference Object is defined by JSON Reference and follows the same structure, behavior and rules.   For this specification, reference resolution is accomplished as defined by the JSON Reference specification and not by the JSON Schema specification.')]
#[Required(array('$ref'))]
class Reference implements \JsonSerializable
{
    #[Key('$ref')]
    protected ?string $ref = null;
    public function setRef(?string $ref) : void
    {
        $this->ref = $ref;
    }
    public function getRef() : ?string
    {
        return $this->ref;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('$ref' => $this->ref), static function ($value) : bool {
            return $value !== null;
        });
    }
}

