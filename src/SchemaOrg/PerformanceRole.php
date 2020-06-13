<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A PerformanceRole is a Role that some entity places with regard to a theatrical performance, e.g. in a Movie, TVSeries etc.")
 */
class PerformanceRole extends Role
{
    /**
     * @var string|null
     */
    protected $characterName;
    /**
     * @param string|null $characterName
     */
    public function setCharacterName(?string $characterName) : void
    {
        $this->characterName = $characterName;
    }
    /**
     * @return string|null
     */
    public function getCharacterName() : ?string
    {
        return $this->characterName;
    }
}
