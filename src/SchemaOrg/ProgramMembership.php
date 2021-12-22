<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Used to describe membership in a loyalty programs (e.g. "StarAliance"), traveler clubs (e.g. "AAA"), purchase clubs ("Safeway Club"), etc.')]
class ProgramMembership extends Intangible implements \JsonSerializable
{
    protected Person|Organization|null $member = null;
    protected ?string $membershipNumber = null;
    protected ?Organization $hostingOrganization = null;
    protected ?string $programName = null;
    public function setMember(Person|Organization|null $member) : void
    {
        $this->member = $member;
    }
    public function getMember() : Person|Organization|null
    {
        return $this->member;
    }
    public function setMembershipNumber(?string $membershipNumber) : void
    {
        $this->membershipNumber = $membershipNumber;
    }
    public function getMembershipNumber() : ?string
    {
        return $this->membershipNumber;
    }
    public function setHostingOrganization(?Organization $hostingOrganization) : void
    {
        $this->hostingOrganization = $hostingOrganization;
    }
    public function getHostingOrganization() : ?Organization
    {
        return $this->hostingOrganization;
    }
    public function setProgramName(?string $programName) : void
    {
        $this->programName = $programName;
    }
    public function getProgramName() : ?string
    {
        return $this->programName;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('member' => $this->member, 'membershipNumber' => $this->membershipNumber, 'hostingOrganization' => $this->hostingOrganization, 'programName' => $this->programName), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

