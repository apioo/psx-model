<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("Represents additional information about a relationship or property. For example a Role can be used to say that a 'member' role linking some SportsTeam to a player occurred during a particular time period. Or that a Person's 'actor' role in a Movie was for some particular characterName. Such properties can be attached to a Role entity, which is then associated with the main entities using ordinary properties like 'member' or 'actor'.<br/><br/>

See also <a href=""http://blog.schema.org/2014/06/introducing-role.html"">blog post</a>.")
*/
class Role extends Intangible implements \JsonSerializable
{
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $endDate;
    /**
     * @var \DateTime|\PSX\DateTime\Date|null
     */
    protected $startDate;
    /**
     * @var string|\PSX\Uri\Uri|null
     */
    protected $roleName;
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $endDate
     */
    public function setEndDate($endDate) : void
    {
        $this->endDate = $endDate;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
    /**
     * @param \DateTime|\PSX\DateTime\Date|null $startDate
     */
    public function setStartDate($startDate) : void
    {
        $this->startDate = $startDate;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Date|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    /**
     * @param string|\PSX\Uri\Uri|null $roleName
     */
    public function setRoleName($roleName) : void
    {
        $this->roleName = $roleName;
    }
    /**
     * @return string|\PSX\Uri\Uri|null
     */
    public function getRoleName()
    {
        return $this->roleName;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('endDate' => $this->endDate, 'startDate' => $this->startDate, 'roleName' => $this->roleName), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
