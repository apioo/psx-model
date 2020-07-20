<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A permission for a particular person or group to access a particular file.")
 */
class DigitalDocumentPermission extends Intangible implements \JsonSerializable
{
    /**
     * @var DigitalDocumentPermissionType|null
     */
    protected $permissionType;
    /**
     * @var Organization|ContactPoint|Audience|Person|null
     */
    protected $grantee;
    /**
     * @param DigitalDocumentPermissionType|null $permissionType
     */
    public function setPermissionType(?DigitalDocumentPermissionType $permissionType) : void
    {
        $this->permissionType = $permissionType;
    }
    /**
     * @return DigitalDocumentPermissionType|null
     */
    public function getPermissionType() : ?DigitalDocumentPermissionType
    {
        return $this->permissionType;
    }
    /**
     * @param Organization|ContactPoint|Audience|Person|null $grantee
     */
    public function setGrantee($grantee) : void
    {
        $this->grantee = $grantee;
    }
    /**
     * @return Organization|ContactPoint|Audience|Person|null
     */
    public function getGrantee()
    {
        return $this->grantee;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('permissionType' => $this->permissionType, 'grantee' => $this->grantee), static function ($value) : bool {
            return $value !== null;
        });
    }
}
