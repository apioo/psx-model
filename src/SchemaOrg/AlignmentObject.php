<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("An intangible item that describes an alignment between a learning resource and a node in an educational framework.<br/><br/>

Should not be used where the nature of the alignment can be described using a simple property, for example to express that a resource <a class=""localLink"" href=""http://schema.org/teaches"">teaches</a> or <a class=""localLink"" href=""http://schema.org/assesses"">assesses</a> a competency.")
*/
class AlignmentObject extends Intangible implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $alignmentType;
    /**
     * @var string|null
     */
    protected $targetDescription;
    /**
     * @var \PSX\Uri\Uri|null
     */
    protected $targetUrl;
    /**
     * @var string|null
     */
    protected $targetName;
    /**
     * @var string|null
     */
    protected $educationalFramework;
    /**
     * @param string|null $alignmentType
     */
    public function setAlignmentType(?string $alignmentType) : void
    {
        $this->alignmentType = $alignmentType;
    }
    /**
     * @return string|null
     */
    public function getAlignmentType() : ?string
    {
        return $this->alignmentType;
    }
    /**
     * @param string|null $targetDescription
     */
    public function setTargetDescription(?string $targetDescription) : void
    {
        $this->targetDescription = $targetDescription;
    }
    /**
     * @return string|null
     */
    public function getTargetDescription() : ?string
    {
        return $this->targetDescription;
    }
    /**
     * @param \PSX\Uri\Uri|null $targetUrl
     */
    public function setTargetUrl(?\PSX\Uri\Uri $targetUrl) : void
    {
        $this->targetUrl = $targetUrl;
    }
    /**
     * @return \PSX\Uri\Uri|null
     */
    public function getTargetUrl() : ?\PSX\Uri\Uri
    {
        return $this->targetUrl;
    }
    /**
     * @param string|null $targetName
     */
    public function setTargetName(?string $targetName) : void
    {
        $this->targetName = $targetName;
    }
    /**
     * @return string|null
     */
    public function getTargetName() : ?string
    {
        return $this->targetName;
    }
    /**
     * @param string|null $educationalFramework
     */
    public function setEducationalFramework(?string $educationalFramework) : void
    {
        $this->educationalFramework = $educationalFramework;
    }
    /**
     * @return string|null
     */
    public function getEducationalFramework() : ?string
    {
        return $this->educationalFramework;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('alignmentType' => $this->alignmentType, 'targetDescription' => $this->targetDescription, 'targetUrl' => $this->targetUrl, 'targetName' => $this->targetName, 'educationalFramework' => $this->educationalFramework), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
