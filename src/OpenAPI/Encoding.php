<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("A single encoding definition applied to a single schema property.")
 */
class Encoding
{
    /**
     * @var string
     */
    protected $contentType;
    /**
     * @var Headers
     */
    protected $headers;
    /**
     * @var string
     */
    protected $style;
    /**
     * @var bool
     */
    protected $explode;
    /**
     * @var bool
     */
    protected $allowReserved;
    /**
     * @param string $contentType
     */
    public function setContentType(?string $contentType)
    {
        $this->contentType = $contentType;
    }
    /**
     * @return string
     */
    public function getContentType() : ?string
    {
        return $this->contentType;
    }
    /**
     * @param Headers $headers
     */
    public function setHeaders(?Headers $headers)
    {
        $this->headers = $headers;
    }
    /**
     * @return Headers
     */
    public function getHeaders() : ?Headers
    {
        return $this->headers;
    }
    /**
     * @param string $style
     */
    public function setStyle(?string $style)
    {
        $this->style = $style;
    }
    /**
     * @return string
     */
    public function getStyle() : ?string
    {
        return $this->style;
    }
    /**
     * @param bool $explode
     */
    public function setExplode(?bool $explode)
    {
        $this->explode = $explode;
    }
    /**
     * @return bool
     */
    public function getExplode() : ?bool
    {
        return $this->explode;
    }
    /**
     * @param bool $allowReserved
     */
    public function setAllowReserved(?bool $allowReserved)
    {
        $this->allowReserved = $allowReserved;
    }
    /**
     * @return bool
     */
    public function getAllowReserved() : ?bool
    {
        return $this->allowReserved;
    }
}
