<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A technical article - Example: How-to (task) topics, step-by-step, procedural troubleshooting, specifications, etc.')]
class TechArticle extends Article implements \JsonSerializable
{
    protected ?string $dependencies = null;
    protected ?string $proficiencyLevel = null;
    public function setDependencies(?string $dependencies) : void
    {
        $this->dependencies = $dependencies;
    }
    public function getDependencies() : ?string
    {
        return $this->dependencies;
    }
    public function setProficiencyLevel(?string $proficiencyLevel) : void
    {
        $this->proficiencyLevel = $proficiencyLevel;
    }
    public function getProficiencyLevel() : ?string
    {
        return $this->proficiencyLevel;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('dependencies' => $this->dependencies, 'proficiencyLevel' => $this->proficiencyLevel), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

