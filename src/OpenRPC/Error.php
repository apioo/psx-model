<?php

declare(strict_types = 1);

namespace PSX\Model\OpenRPC;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Required;

#[Description('Defines an application level error.')]
#[Required(array('code', 'message'))]
class Error implements \JsonSerializable
{
    protected ?int $code = null;
    protected ?string $message = null;
    protected mixed $data = null;
    public function setCode(?int $code) : void
    {
        $this->code = $code;
    }
    public function getCode() : ?int
    {
        return $this->code;
    }
    public function setMessage(?string $message) : void
    {
        $this->message = $message;
    }
    public function getMessage() : ?string
    {
        return $this->message;
    }
    public function setData(mixed $data) : void
    {
        $this->data = $data;
    }
    public function getData() : mixed
    {
        return $this->data;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('code' => $this->code, 'message' => $this->message, 'data' => $this->data), static function ($value) : bool {
            return $value !== null;
        });
    }
}

