<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Intended audience for an item, i.e. the group for whom the item was created.")
 */
class Audience extends Intangible
{
    /**
     * @var AdministrativeArea|null
     */
    protected $geographicArea;
    /**
     * @var string|null
     */
    protected $audienceType;
    /**
     * @param AdministrativeArea|null $geographicArea
     */
    public function setGeographicArea(?AdministrativeArea $geographicArea) : void
    {
        $this->geographicArea = $geographicArea;
    }
    /**
     * @return AdministrativeArea|null
     */
    public function getGeographicArea() : ?AdministrativeArea
    {
        return $this->geographicArea;
    }
    /**
     * @param string|null $audienceType
     */
    public function setAudienceType(?string $audienceType) : void
    {
        $this->audienceType = $audienceType;
    }
    /**
     * @return string|null
     */
    public function getAudienceType() : ?string
    {
        return $this->audienceType;
    }
}
