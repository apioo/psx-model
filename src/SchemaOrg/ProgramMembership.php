<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Used to describe membership in a loyalty programs (e.g. ""StarAliance""), traveler clubs (e.g. ""AAA""), purchase clubs (""Safeway Club""), etc.")
 */
class ProgramMembership extends Intangible
{
    /**
     * @var Person|Organization|null
     */
    protected $member;
    /**
     * @var string|null
     */
    protected $membershipNumber;
    /**
     * @var Organization|null
     */
    protected $hostingOrganization;
    /**
     * @var string|null
     */
    protected $programName;
    /**
     * @param Person|Organization|null $member
     */
    public function setMember($member) : void
    {
        $this->member = $member;
    }
    /**
     * @return Person|Organization|null
     */
    public function getMember()
    {
        return $this->member;
    }
    /**
     * @param string|null $membershipNumber
     */
    public function setMembershipNumber(?string $membershipNumber) : void
    {
        $this->membershipNumber = $membershipNumber;
    }
    /**
     * @return string|null
     */
    public function getMembershipNumber() : ?string
    {
        return $this->membershipNumber;
    }
    /**
     * @param Organization|null $hostingOrganization
     */
    public function setHostingOrganization(?Organization $hostingOrganization) : void
    {
        $this->hostingOrganization = $hostingOrganization;
    }
    /**
     * @return Organization|null
     */
    public function getHostingOrganization() : ?Organization
    {
        return $this->hostingOrganization;
    }
    /**
     * @param string|null $programName
     */
    public function setProgramName(?string $programName) : void
    {
        $this->programName = $programName;
    }
    /**
     * @return string|null
     */
    public function getProgramName() : ?string
    {
        return $this->programName;
    }
}
