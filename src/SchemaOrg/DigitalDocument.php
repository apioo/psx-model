<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An electronic file or document.')]
class DigitalDocument extends CreativeWork implements \JsonSerializable
{
    protected ?DigitalDocumentPermission $hasDigitalDocumentPermission = null;
    public function setHasDigitalDocumentPermission(?DigitalDocumentPermission $hasDigitalDocumentPermission) : void
    {
        $this->hasDigitalDocumentPermission = $hasDigitalDocumentPermission;
    }
    public function getHasDigitalDocumentPermission() : ?DigitalDocumentPermission
    {
        return $this->hasDigitalDocumentPermission;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('hasDigitalDocumentPermission' => $this->hasDigitalDocumentPermission), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

