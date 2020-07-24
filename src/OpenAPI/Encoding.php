<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("A single encoding definition applied to a single schema property.")
 */
class Encoding implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $contentType;
    /**
     * @var Headers|null
     */
    protected $headers;
    /**
     * @var string|null
     */
    protected $style;
    /**
     * @var bool|null
     */
    protected $explode;
    /**
     * @var bool|null
     */
    protected $allowReserved;
    /**
     * @param string|null $contentType
     */
    public function setContentType(?string $contentType) : void
    {
        $this->contentType = $contentType;
    }
    /**
     * @return string|null
     */
    public function getContentType() : ?string
    {
        return $this->contentType;
    }
    /**
     * @param Headers|null $headers
     */
    public function setHeaders(?Headers $headers) : void
    {
        $this->headers = $headers;
    }
    /**
     * @return Headers|null
     */
    public function getHeaders() : ?Headers
    {
        return $this->headers;
    }
    /**
     * @param string|null $style
     */
    public function setStyle(?string $style) : void
    {
        $this->style = $style;
    }
    /**
     * @return string|null
     */
    public function getStyle() : ?string
    {
        return $this->style;
    }
    /**
     * @param bool|null $explode
     */
    public function setExplode(?bool $explode) : void
    {
        $this->explode = $explode;
    }
    /**
     * @return bool|null
     */
    public function getExplode() : ?bool
    {
        return $this->explode;
    }
    /**
     * @param bool|null $allowReserved
     */
    public function setAllowReserved(?bool $allowReserved) : void
    {
        $this->allowReserved = $allowReserved;
    }
    /**
     * @return bool|null
     */
    public function getAllowReserved() : ?bool
    {
        return $this->allowReserved;
    }
    public function jsonSerialize()
    {
        return array_filter(array('contentType' => $this->contentType, 'headers' => $this->headers, 'style' => $this->style, 'explode' => $this->explode, 'allowReserved' => $this->allowReserved), static function ($value) : bool {
            return $value !== null;
        });
    }
}
