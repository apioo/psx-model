<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A description of an educational course which may be offered as distinct instances at which take place at different times or take place at different locations, or be offered through different media or modes of study. An educational course is a sequence of one or more educational events and/or creative works which aims to build knowledge, competence or ability of learners.")
 */
class Course extends CreativeWork implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $courseCode;
    /**
     * @var string|AlignmentObject|Course|null
     */
    protected $coursePrerequisites;
    /**
     * @var \PSX\Uri\Uri|string|null
     */
    protected $educationalCredentialAwarded;
    /**
     * @var CourseInstance|null
     */
    protected $hasCourseInstance;
    /**
     * @param string|null $courseCode
     */
    public function setCourseCode(?string $courseCode) : void
    {
        $this->courseCode = $courseCode;
    }
    /**
     * @return string|null
     */
    public function getCourseCode() : ?string
    {
        return $this->courseCode;
    }
    /**
     * @param string|AlignmentObject|Course|null $coursePrerequisites
     */
    public function setCoursePrerequisites($coursePrerequisites) : void
    {
        $this->coursePrerequisites = $coursePrerequisites;
    }
    /**
     * @return string|AlignmentObject|Course|null
     */
    public function getCoursePrerequisites()
    {
        return $this->coursePrerequisites;
    }
    /**
     * @param \PSX\Uri\Uri|string|null $educationalCredentialAwarded
     */
    public function setEducationalCredentialAwarded($educationalCredentialAwarded) : void
    {
        $this->educationalCredentialAwarded = $educationalCredentialAwarded;
    }
    /**
     * @return \PSX\Uri\Uri|string|null
     */
    public function getEducationalCredentialAwarded()
    {
        return $this->educationalCredentialAwarded;
    }
    /**
     * @param CourseInstance|null $hasCourseInstance
     */
    public function setHasCourseInstance(?CourseInstance $hasCourseInstance) : void
    {
        $this->hasCourseInstance = $hasCourseInstance;
    }
    /**
     * @return CourseInstance|null
     */
    public function getHasCourseInstance() : ?CourseInstance
    {
        return $this->hasCourseInstance;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('courseCode' => $this->courseCode, 'coursePrerequisites' => $this->coursePrerequisites, 'educationalCredentialAwarded' => $this->educationalCredentialAwarded, 'hasCourseInstance' => $this->hasCourseInstance), static function ($value) : bool {
            return $value !== null;
        });
    }
}
