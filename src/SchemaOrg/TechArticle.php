<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A technical article - Example: How-to (task) topics, step-by-step, procedural troubleshooting, specifications, etc.")
 */
class TechArticle extends Article
{
    /**
     * @var string|null
     */
    protected $dependencies;
    /**
     * @var string|null
     */
    protected $proficiencyLevel;
    /**
     * @param string|null $dependencies
     */
    public function setDependencies(?string $dependencies) : void
    {
        $this->dependencies = $dependencies;
    }
    /**
     * @return string|null
     */
    public function getDependencies() : ?string
    {
        return $this->dependencies;
    }
    /**
     * @param string|null $proficiencyLevel
     */
    public function setProficiencyLevel(?string $proficiencyLevel) : void
    {
        $this->proficiencyLevel = $proficiencyLevel;
    }
    /**
     * @return string|null
     */
    public function getProficiencyLevel() : ?string
    {
        return $this->proficiencyLevel;
    }
}
