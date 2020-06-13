<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Computer programming source code. Example: Full (compile ready) solutions, code snippet samples, scripts, templates.")
 */
class SoftwareSourceCode extends CreativeWork
{
    /**
     * @var \PSX\Uri\Uri|null
     */
    protected $codeRepository;
    /**
     * @var string|null
     */
    protected $codeSampleType;
    /**
     * @var string|null
     */
    protected $runtimePlatform;
    /**
     * @var SoftwareApplication|null
     */
    protected $targetProduct;
    /**
     * @var string|ComputerLanguage|null
     */
    protected $programmingLanguage;
    /**
     * @param \PSX\Uri\Uri|null $codeRepository
     */
    public function setCodeRepository(?\PSX\Uri\Uri $codeRepository) : void
    {
        $this->codeRepository = $codeRepository;
    }
    /**
     * @return \PSX\Uri\Uri|null
     */
    public function getCodeRepository() : ?\PSX\Uri\Uri
    {
        return $this->codeRepository;
    }
    /**
     * @param string|null $codeSampleType
     */
    public function setCodeSampleType(?string $codeSampleType) : void
    {
        $this->codeSampleType = $codeSampleType;
    }
    /**
     * @return string|null
     */
    public function getCodeSampleType() : ?string
    {
        return $this->codeSampleType;
    }
    /**
     * @param string|null $runtimePlatform
     */
    public function setRuntimePlatform(?string $runtimePlatform) : void
    {
        $this->runtimePlatform = $runtimePlatform;
    }
    /**
     * @return string|null
     */
    public function getRuntimePlatform() : ?string
    {
        return $this->runtimePlatform;
    }
    /**
     * @param SoftwareApplication|null $targetProduct
     */
    public function setTargetProduct(?SoftwareApplication $targetProduct) : void
    {
        $this->targetProduct = $targetProduct;
    }
    /**
     * @return SoftwareApplication|null
     */
    public function getTargetProduct() : ?SoftwareApplication
    {
        return $this->targetProduct;
    }
    /**
     * @param string|ComputerLanguage|null $programmingLanguage
     */
    public function setProgrammingLanguage($programmingLanguage) : void
    {
        $this->programmingLanguage = $programmingLanguage;
    }
    /**
     * @return string|ComputerLanguage|null
     */
    public function getProgrammingLanguage()
    {
        return $this->programmingLanguage;
    }
}
