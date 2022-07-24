<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An educational organization.')]
class EducationalOrganization extends Organization implements \JsonSerializable
{
    protected Organization|Person|null $alumniOf = null;
    protected ?Person $alumni = null;
    public function setAlumniOf(Organization|Person|null $alumniOf) : void
    {
        $this->alumniOf = $alumniOf;
    }
    public function getAlumniOf() : Organization|Person|null
    {
        return $this->alumniOf;
    }
    public function setAlumni(?Person $alumni) : void
    {
        $this->alumni = $alumni;
    }
    public function getAlumni() : ?Person
    {
        return $this->alumni;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('alumniOf' => $this->alumniOf, 'alumni' => $this->alumni), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

