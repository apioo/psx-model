<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Residence type: Apartment complex.")
 */
class ApartmentComplex extends Residence implements \JsonSerializable
{
    /**
     * @var bool|string|null
     */
    protected $petsAllowed;
    /**
     * @param bool|string|null $petsAllowed
     */
    public function setPetsAllowed($petsAllowed) : void
    {
        $this->petsAllowed = $petsAllowed;
    }
    /**
     * @return bool|string|null
     */
    public function getPetsAllowed()
    {
        return $this->petsAllowed;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('petsAllowed' => $this->petsAllowed), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
