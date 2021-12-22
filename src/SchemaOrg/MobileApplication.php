<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A software application designed specifically to work well on a mobile device such as a telephone.')]
class MobileApplication extends SoftwareApplication implements \JsonSerializable
{
    protected ?string $carrierRequirements = null;
    public function setCarrierRequirements(?string $carrierRequirements) : void
    {
        $this->carrierRequirements = $carrierRequirements;
    }
    public function getCarrierRequirements() : ?string
    {
        return $this->carrierRequirements;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('carrierRequirements' => $this->carrierRequirements), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

