<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Web applications.")
 */
class WebApplication extends SoftwareApplication implements \JsonSerializable
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
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('browserRequirements' => $this->browserRequirements), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
