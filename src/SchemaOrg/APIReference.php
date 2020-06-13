<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Reference documentation for application programming interfaces (APIs).")
 */
class APIReference extends TechArticle
{
    /**
     * @var string|null
     */
    protected $targetPlatform;
    /**
     * @var string|null
     */
    protected $programmingModel;
    /**
     * @var string|null
     */
    protected $assemblyVersion;
    /**
     * @var string|null
     */
    protected $executableLibraryName;
    /**
     * @param string|null $targetPlatform
     */
    public function setTargetPlatform(?string $targetPlatform) : void
    {
        $this->targetPlatform = $targetPlatform;
    }
    /**
     * @return string|null
     */
    public function getTargetPlatform() : ?string
    {
        return $this->targetPlatform;
    }
    /**
     * @param string|null $programmingModel
     */
    public function setProgrammingModel(?string $programmingModel) : void
    {
        $this->programmingModel = $programmingModel;
    }
    /**
     * @return string|null
     */
    public function getProgrammingModel() : ?string
    {
        return $this->programmingModel;
    }
    /**
     * @param string|null $assemblyVersion
     */
    public function setAssemblyVersion(?string $assemblyVersion) : void
    {
        $this->assemblyVersion = $assemblyVersion;
    }
    /**
     * @return string|null
     */
    public function getAssemblyVersion() : ?string
    {
        return $this->assemblyVersion;
    }
    /**
     * @param string|null $executableLibraryName
     */
    public function setExecutableLibraryName(?string $executableLibraryName) : void
    {
        $this->executableLibraryName = $executableLibraryName;
    }
    /**
     * @return string|null
     */
    public function getExecutableLibraryName() : ?string
    {
        return $this->executableLibraryName;
    }
}
