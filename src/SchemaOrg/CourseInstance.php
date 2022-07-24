<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An instance of a <a class="localLink" href="http://schema.org/Course">Course</a> which is distinct from other instances because it is offered at a different time or location or through different media or modes of study or to a specific section of students.')]
class CourseInstance extends Event implements \JsonSerializable
{
    protected ?Person $instructor = null;
    protected string|\PSX\Uri\Uri|null $courseMode = null;
    public function setInstructor(?Person $instructor) : void
    {
        $this->instructor = $instructor;
    }
    public function getInstructor() : ?Person
    {
        return $this->instructor;
    }
    public function setCourseMode(string|\PSX\Uri\Uri|null $courseMode) : void
    {
        $this->courseMode = $courseMode;
    }
    public function getCourseMode() : string|\PSX\Uri\Uri|null
    {
        return $this->courseMode;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('instructor' => $this->instructor, 'courseMode' => $this->courseMode), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

