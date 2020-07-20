<?php

declare(strict_types = 1);

namespace PSX\Model\Common;


class Error
{
    /**
     * @var bool|null
     */
    protected $success;
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var string|null
     */
    protected $message;
    /**
     * @var string|null
     */
    protected $trace;
    /**
     * @var string|null
     */
    protected $context;
    /**
     * @param bool|null $success
     */
    public function setSuccess(?bool $success) : void
    {
        $this->success = $success;
    }
    /**
     * @return bool|null
     */
    public function getSuccess() : ?bool
    {
        return $this->success;
    }
    /**
     * @param string|null $title
     */
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    /**
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param string|null $message
     */
    public function setMessage(?string $message) : void
    {
        $this->message = $message;
    }
    /**
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * @param string|null $trace
     */
    public function setTrace(?string $trace) : void
    {
        $this->trace = $trace;
    }
    /**
     * @return string|null
     */
    public function getTrace() : ?string
    {
        return $this->trace;
    }
    /**
     * @param string|null $context
     */
    public function setContext(?string $context) : void
    {
        $this->context = $context;
    }
    /**
     * @return string|null
     */
    public function getContext() : ?string
    {
        return $this->context;
    }
}
