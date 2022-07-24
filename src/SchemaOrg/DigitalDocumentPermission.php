<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A permission for a particular person or group to access a particular file.')]
class DigitalDocumentPermission extends Intangible implements \JsonSerializable
{
    protected ?DigitalDocumentPermissionType $permissionType = null;
    protected Organization|ContactPoint|Audience|Person|null $grantee = null;
    public function setPermissionType(?DigitalDocumentPermissionType $permissionType) : void
    {
        $this->permissionType = $permissionType;
    }
    public function getPermissionType() : ?DigitalDocumentPermissionType
    {
        return $this->permissionType;
    }
    public function setGrantee(Organization|ContactPoint|Audience|Person|null $grantee) : void
    {
        $this->grantee = $grantee;
    }
    public function getGrantee() : Organization|ContactPoint|Audience|Person|null
    {
        return $this->grantee;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('permissionType' => $this->permissionType, 'grantee' => $this->grantee), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

