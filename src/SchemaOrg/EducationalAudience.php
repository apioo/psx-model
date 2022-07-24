<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An EducationalAudience.')]
class EducationalAudience extends Audience implements \JsonSerializable
{
    protected ?string $educationalRole = null;
    public function setEducationalRole(?string $educationalRole) : void
    {
        $this->educationalRole = $educationalRole;
    }
    public function getEducationalRole() : ?string
    {
        return $this->educationalRole;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('educationalRole' => $this->educationalRole), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

