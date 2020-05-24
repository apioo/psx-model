<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("An object representing a Server.")
 * @Required({"url"})
 */
class Server
{
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var ServerVariables
     */
    protected $variables;
    /**
     * @param string $url
     */
    public function setUrl(?string $url)
    {
        $this->url = $url;
    }
    /**
     * @return string
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
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
     * @param ServerVariables $variables
     */
    public function setVariables(?ServerVariables $variables)
    {
        $this->variables = $variables;
    }
    /**
     * @return ServerVariables
     */
    public function getVariables() : ?ServerVariables
    {
        return $this->variables;
    }
}
