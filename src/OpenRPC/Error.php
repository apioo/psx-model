<?php

declare(strict_types = 1);

namespace PSX\Model\OpenRPC;

/**
 * @Description("Defines an application level error.")
 * @Required({"code", "message"})
 */
class Error implements \JsonSerializable
{
    /**
     * @var int|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $message;
    /**
     * @var mixed|null
     */
    protected $data;
    /**
     * @param int|null $code
     */
    public function setCode(?int $code) : void
    {
        $this->code = $code;
    }
    /**
     * @return int|null
     */
    public function getCode() : ?int
    {
        return $this->code;
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
     * @param mixed|null $data
     */
    public function setData($data) : void
    {
        $this->data = $data;
    }
    /**
     * @return mixed|null
     */
    public function getData()
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
