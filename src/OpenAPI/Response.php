<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("Describes a single response from an API Operation, including design-time, static  `links` to operations based on the response.")
 * @Required({"description"})
 */
class Response
{
    /**
     * @var string
     */
    protected $description;
    /**
     * @var Header|Reference
     */
    protected $headers;
    /**
     * @var MediaTypes
     */
    protected $content;
    /**
     * @var Link|Reference
     */
    protected $links;
    /**
     * @param string $description
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param Header|Reference $headers
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }
    /**
     * @return Header|Reference
     */
    public function getHeaders()
    {
        return $this->headers;
    }
    /**
     * @param MediaTypes $content
     */
    public function setContent(?MediaTypes $content)
    {
        $this->content = $content;
    }
    /**
     * @return MediaTypes
     */
    public function getContent() : ?MediaTypes
    {
        return $this->content;
    }
    /**
     * @param Link|Reference $links
     */
    public function setLinks($links)
    {
        $this->links = $links;
    }
    /**
     * @return Link|Reference
     */
    public function getLinks()
    {
        return $this->links;
    }
}
