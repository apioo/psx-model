<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An educational organization.")
 */
class EducationalOrganization extends Organization implements \JsonSerializable
{
    /**
     * @var Organization|Person|null
     */
    protected $alumniOf;
    /**
     * @var Person|null
     */
    protected $alumni;
    /**
     * @param Organization|Person|null $alumniOf
     */
    public function setAlumniOf($alumniOf) : void
    {
        $this->alumniOf = $alumniOf;
    }
    /**
     * @return Organization|Person|null
     */
    public function getAlumniOf()
    {
        return $this->alumniOf;
    }
    /**
     * @param Person|null $alumni
     */
    public function setAlumni(?Person $alumni) : void
    {
        $this->alumni = $alumni;
    }
    /**
     * @return Person|null
     */
    public function getAlumni() : ?Person
    {
        return $this->alumni;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('alumniOf' => $this->alumniOf, 'alumni' => $this->alumni), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
