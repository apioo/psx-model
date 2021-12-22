<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An intangible item that describes an alignment between a learning resource and a node in an educational framework.<br/><br/>

Should not be used where the nature of the alignment can be described using a simple property, for example to express that a resource <a class="localLink" href="http://schema.org/teaches">teaches</a> or <a class="localLink" href="http://schema.org/assesses">assesses</a> a competency.')]
class AlignmentObject extends Intangible implements \JsonSerializable
{
    protected ?string $alignmentType = null;
    protected ?string $targetDescription = null;
    protected ?\PSX\Uri\Uri $targetUrl = null;
    protected ?string $targetName = null;
    protected ?string $educationalFramework = null;
    public function setAlignmentType(?string $alignmentType) : void
    {
        $this->alignmentType = $alignmentType;
    }
    public function getAlignmentType() : ?string
    {
        return $this->alignmentType;
    }
    public function setTargetDescription(?string $targetDescription) : void
    {
        $this->targetDescription = $targetDescription;
    }
    public function getTargetDescription() : ?string
    {
        return $this->targetDescription;
    }
    public function setTargetUrl(?\PSX\Uri\Uri $targetUrl) : void
    {
        $this->targetUrl = $targetUrl;
    }
    public function getTargetUrl() : ?\PSX\Uri\Uri
    {
        return $this->targetUrl;
    }
    public function setTargetName(?string $targetName) : void
    {
        $this->targetName = $targetName;
    }
    public function getTargetName() : ?string
    {
        return $this->targetName;
    }
    public function setEducationalFramework(?string $educationalFramework) : void
    {
        $this->educationalFramework = $educationalFramework;
    }
    public function getEducationalFramework() : ?string
    {
        return $this->educationalFramework;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('alignmentType' => $this->alignmentType, 'targetDescription' => $this->targetDescription, 'targetUrl' => $this->targetUrl, 'targetName' => $this->targetName, 'educationalFramework' => $this->educationalFramework), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

