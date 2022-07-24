<?php

declare(strict_types = 1);

namespace PSX\Model\Common;


class Error implements \JsonSerializable
{
    protected ?bool $success = null;
    protected ?string $title = null;
    protected ?string $message = null;
    protected ?string $trace = null;
    protected ?string $context = null;
    public function setSuccess(?bool $success) : void
    {
        $this->success = $success;
    }
    public function getSuccess() : ?bool
    {
        return $this->success;
    }
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    public function setMessage(?string $message) : void
    {
        $this->message = $message;
    }
    public function getMessage() : ?string
    {
        return $this->message;
    }
    public function setTrace(?string $trace) : void
    {
        $this->trace = $trace;
    }
    public function getTrace() : ?string
    {
        return $this->trace;
    }
    public function setContext(?string $context) : void
    {
        $this->context = $context;
    }
    public function getContext() : ?string
    {
        return $this->context;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('success' => $this->success, 'title' => $this->title, 'message' => $this->message, 'trace' => $this->trace, 'context' => $this->context), static function ($value) : bool {
            return $value !== null;
        });
    }
}

