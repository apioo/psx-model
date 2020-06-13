<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An EducationalAudience.")
 */
class EducationalAudience extends Audience
{
    /**
     * @var string|null
     */
    protected $educationalRole;
    /**
     * @param string|null $educationalRole
     */
    public function setEducationalRole(?string $educationalRole) : void
    {
        $this->educationalRole = $educationalRole;
    }
    /**
     * @return string|null
     */
    public function getEducationalRole() : ?string
    {
        return $this->educationalRole;
    }
}
