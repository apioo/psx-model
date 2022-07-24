<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of participating in performance arts.')]
class PerformAction extends PlayAction implements \JsonSerializable
{
    protected ?EntertainmentBusiness $entertainmentBusiness = null;
    public function setEntertainmentBusiness(?EntertainmentBusiness $entertainmentBusiness) : void
    {
        $this->entertainmentBusiness = $entertainmentBusiness;
    }
    public function getEntertainmentBusiness() : ?EntertainmentBusiness
    {
        return $this->entertainmentBusiness;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('entertainmentBusiness' => $this->entertainmentBusiness), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

