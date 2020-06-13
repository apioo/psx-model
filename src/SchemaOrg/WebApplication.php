<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Web applications.")
 */
class WebApplication extends SoftwareApplication
{
    /**
     * @var string|null
     */
    protected $browserRequirements;
    /**
     * @param string|null $browserRequirements
     */
    public function setBrowserRequirements(?string $browserRequirements) : void
    {
        $this->browserRequirements = $browserRequirements;
    }
    /**
     * @return string|null
     */
    public function getBrowserRequirements() : ?string
    {
        return $this->browserRequirements;
    }
}
