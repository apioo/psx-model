<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of participating in performance arts.")
 */
class PerformAction extends PlayAction
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
}
