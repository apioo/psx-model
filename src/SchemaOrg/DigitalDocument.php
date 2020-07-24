<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An electronic file or document.")
 */
class DigitalDocument extends CreativeWork implements \JsonSerializable
{
    /**
     * @var DigitalDocumentPermission|null
     */
    protected $hasDigitalDocumentPermission;
    /**
     * @param DigitalDocumentPermission|null $hasDigitalDocumentPermission
     */
    public function setHasDigitalDocumentPermission(?DigitalDocumentPermission $hasDigitalDocumentPermission) : void
    {
        $this->hasDigitalDocumentPermission = $hasDigitalDocumentPermission;
    }
    /**
     * @return DigitalDocumentPermission|null
     */
    public function getHasDigitalDocumentPermission() : ?DigitalDocumentPermission
    {
        return $this->hasDigitalDocumentPermission;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('hasDigitalDocumentPermission' => $this->hasDigitalDocumentPermission), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
