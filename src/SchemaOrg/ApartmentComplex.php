<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Residence type: Apartment complex.')]
class ApartmentComplex extends Residence implements \JsonSerializable
{
    protected bool|string|null $petsAllowed = null;
    public function setPetsAllowed(bool|string|null $petsAllowed) : void
    {
        $this->petsAllowed = $petsAllowed;
    }
    public function getPetsAllowed() : bool|string|null
    {
        return $this->petsAllowed;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('petsAllowed' => $this->petsAllowed), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

