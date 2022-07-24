<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Represents additional information about a relationship or property. For example a Role can be used to say that a \'member\' role linking some SportsTeam to a player occurred during a particular time period. Or that a Person\'s \'actor\' role in a Movie was for some particular characterName. Such properties can be attached to a Role entity, which is then associated with the main entities using ordinary properties like \'member\' or \'actor\'.<br/><br/>

See also <a href="http://blog.schema.org/2014/06/introducing-role.html">blog post</a>.')]
class Role extends Intangible implements \JsonSerializable
{
    protected \PSX\DateTime\Date|\DateTime|null $endDate = null;
    protected \DateTime|\PSX\DateTime\Date|null $startDate = null;
    protected string|\PSX\Uri\Uri|null $roleName = null;
    public function setEndDate(\PSX\DateTime\Date|\DateTime|null $endDate) : void
    {
        $this->endDate = $endDate;
    }
    public function getEndDate() : \PSX\DateTime\Date|\DateTime|null
    {
        return $this->endDate;
    }
    public function setStartDate(\DateTime|\PSX\DateTime\Date|null $startDate) : void
    {
        $this->startDate = $startDate;
    }
    public function getStartDate() : \DateTime|\PSX\DateTime\Date|null
    {
        return $this->startDate;
    }
    public function setRoleName(string|\PSX\Uri\Uri|null $roleName) : void
    {
        $this->roleName = $roleName;
    }
    public function getRoleName() : string|\PSX\Uri\Uri|null
    {
        return $this->roleName;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('endDate' => $this->endDate, 'startDate' => $this->startDate, 'roleName' => $this->roleName), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

