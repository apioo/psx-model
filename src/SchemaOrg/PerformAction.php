<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of participating in performance arts.")
 */
class PerformAction extends PlayAction implements \JsonSerializable
{
    /**
     * @var EntertainmentBusiness|null
     */
    protected $entertainmentBusiness;
    /**
     * @param EntertainmentBusiness|null $entertainmentBusiness
     */
    public function setEntertainmentBusiness(?EntertainmentBusiness $entertainmentBusiness) : void
    {
        $this->entertainmentBusiness = $entertainmentBusiness;
    }
    /**
     * @return EntertainmentBusiness|null
     */
    public function getEntertainmentBusiness() : ?EntertainmentBusiness
    {
        return $this->entertainmentBusiness;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('entertainmentBusiness' => $this->entertainmentBusiness), static function ($value) : bool {
            return $value !== null;
        });
    }
}
