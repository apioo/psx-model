<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A description of an educational course which may be offered as distinct instances at which take place at different times or take place at different locations, or be offered through different media or modes of study. An educational course is a sequence of one or more educational events and/or creative works which aims to build knowledge, competence or ability of learners.')]
class Course extends CreativeWork implements \JsonSerializable
{
    protected ?string $courseCode = null;
    protected string|AlignmentObject|Course|null $coursePrerequisites = null;
    protected \PSX\Uri\Uri|string|null $educationalCredentialAwarded = null;
    protected ?CourseInstance $hasCourseInstance = null;
    public function setCourseCode(?string $courseCode) : void
    {
        $this->courseCode = $courseCode;
    }
    public function getCourseCode() : ?string
    {
        return $this->courseCode;
    }
    public function setCoursePrerequisites(string|AlignmentObject|Course|null $coursePrerequisites) : void
    {
        $this->coursePrerequisites = $coursePrerequisites;
    }
    public function getCoursePrerequisites() : string|AlignmentObject|Course|null
    {
        return $this->coursePrerequisites;
    }
    public function setEducationalCredentialAwarded(\PSX\Uri\Uri|string|null $educationalCredentialAwarded) : void
    {
        $this->educationalCredentialAwarded = $educationalCredentialAwarded;
    }
    public function getEducationalCredentialAwarded() : \PSX\Uri\Uri|string|null
    {
        return $this->educationalCredentialAwarded;
    }
    public function setHasCourseInstance(?CourseInstance $hasCourseInstance) : void
    {
        $this->hasCourseInstance = $hasCourseInstance;
    }
    public function getHasCourseInstance() : ?CourseInstance
    {
        return $this->hasCourseInstance;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('courseCode' => $this->courseCode, 'coursePrerequisites' => $this->coursePrerequisites, 'educationalCredentialAwarded' => $this->educationalCredentialAwarded, 'hasCourseInstance' => $this->hasCourseInstance), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

