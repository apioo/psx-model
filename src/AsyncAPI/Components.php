<?php

declare(strict_types = 1);

namespace PSX\Model\AsyncAPI;

use PSX\Schema\Attribute\Description;

#[Description('Holds a set of reusable objects for different aspects of the OAS. All objects defined within the components object will have no effect on the API unless they are explicitly referenced from properties outside the components object.')]
class Components implements \JsonSerializable
{
    protected ?Schemas $schemas = null;
    protected ?Messages $messages = null;
    public function setSchemas(?Schemas $schemas) : void
    {
        $this->schemas = $schemas;
    }
    public function getSchemas() : ?Schemas
    {
        return $this->schemas;
    }
    public function setMessages(?Messages $messages) : void
    {
        $this->messages = $messages;
    }
    public function getMessages() : ?Messages
    {
        return $this->messages;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('schemas' => $this->schemas, 'messages' => $this->messages), static function ($value) : bool {
            return $value !== null;
        });
    }
}

