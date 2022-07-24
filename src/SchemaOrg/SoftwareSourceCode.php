<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Computer programming source code. Example: Full (compile ready) solutions, code snippet samples, scripts, templates.')]
class SoftwareSourceCode extends CreativeWork implements \JsonSerializable
{
    protected ?\PSX\Uri\Uri $codeRepository = null;
    protected ?string $codeSampleType = null;
    protected ?string $runtimePlatform = null;
    protected ?SoftwareApplication $targetProduct = null;
    protected string|ComputerLanguage|null $programmingLanguage = null;
    public function setCodeRepository(?\PSX\Uri\Uri $codeRepository) : void
    {
        $this->codeRepository = $codeRepository;
    }
    public function getCodeRepository() : ?\PSX\Uri\Uri
    {
        return $this->codeRepository;
    }
    public function setCodeSampleType(?string $codeSampleType) : void
    {
        $this->codeSampleType = $codeSampleType;
    }
    public function getCodeSampleType() : ?string
    {
        return $this->codeSampleType;
    }
    public function setRuntimePlatform(?string $runtimePlatform) : void
    {
        $this->runtimePlatform = $runtimePlatform;
    }
    public function getRuntimePlatform() : ?string
    {
        return $this->runtimePlatform;
    }
    public function setTargetProduct(?SoftwareApplication $targetProduct) : void
    {
        $this->targetProduct = $targetProduct;
    }
    public function getTargetProduct() : ?SoftwareApplication
    {
        return $this->targetProduct;
    }
    public function setProgrammingLanguage(string|ComputerLanguage|null $programmingLanguage) : void
    {
        $this->programmingLanguage = $programmingLanguage;
    }
    public function getProgrammingLanguage() : string|ComputerLanguage|null
    {
        return $this->programmingLanguage;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('codeRepository' => $this->codeRepository, 'codeSampleType' => $this->codeSampleType, 'runtimePlatform' => $this->runtimePlatform, 'targetProduct' => $this->targetProduct, 'programmingLanguage' => $this->programmingLanguage), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

