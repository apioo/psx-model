<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Reference documentation for application programming interfaces (APIs).')]
class APIReference extends TechArticle implements \JsonSerializable
{
    protected ?string $targetPlatform = null;
    protected ?string $programmingModel = null;
    protected ?string $assemblyVersion = null;
    protected ?string $executableLibraryName = null;
    public function setTargetPlatform(?string $targetPlatform) : void
    {
        $this->targetPlatform = $targetPlatform;
    }
    public function getTargetPlatform() : ?string
    {
        return $this->targetPlatform;
    }
    public function setProgrammingModel(?string $programmingModel) : void
    {
        $this->programmingModel = $programmingModel;
    }
    public function getProgrammingModel() : ?string
    {
        return $this->programmingModel;
    }
    public function setAssemblyVersion(?string $assemblyVersion) : void
    {
        $this->assemblyVersion = $assemblyVersion;
    }
    public function getAssemblyVersion() : ?string
    {
        return $this->assemblyVersion;
    }
    public function setExecutableLibraryName(?string $executableLibraryName) : void
    {
        $this->executableLibraryName = $executableLibraryName;
    }
    public function getExecutableLibraryName() : ?string
    {
        return $this->executableLibraryName;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('targetPlatform' => $this->targetPlatform, 'programmingModel' => $this->programmingModel, 'assemblyVersion' => $this->assemblyVersion, 'executableLibraryName' => $this->executableLibraryName), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

