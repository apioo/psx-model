<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An instance of a <a class=""localLink"" href=""http://schema.org/Course"">Course</a> which is distinct from other instances because it is offered at a different time or location or through different media or modes of study or to a specific section of students.")
 */
class CourseInstance extends Event implements \JsonSerializable
{
    /**
     * @var Person|null
     */
    protected $instructor;
    /**
     * @var string|\PSX\Uri\Uri|null
     */
    protected $courseMode;
    /**
     * @param Person|null $instructor
     */
    public function setInstructor(?Person $instructor) : void
    {
        $this->instructor = $instructor;
    }
    /**
     * @return Person|null
     */
    public function getInstructor() : ?Person
    {
        return $this->instructor;
    }
    /**
     * @param string|\PSX\Uri\Uri|null $courseMode
     */
    public function setCourseMode($courseMode) : void
    {
        $this->courseMode = $courseMode;
    }
    /**
     * @return string|\PSX\Uri\Uri|null
     */
    public function getCourseMode()
    {
        return $this->courseMode;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('instructor' => $this->instructor, 'courseMode' => $this->courseMode), static function ($value) : bool {
            return $value !== null;
        });
    }
}
