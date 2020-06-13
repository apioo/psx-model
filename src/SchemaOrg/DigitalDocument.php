<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An electronic file or document.")
 */
class DigitalDocument extends CreativeWork
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
}
