<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of planning the execution of an event/task/action/reservation/plan to a future date.')]
class PlanAction extends OrganizeAction implements \JsonSerializable
{
    protected ?\PSX\DateTime\LocalDateTime $scheduledTime = null;
    public function setScheduledTime(?\PSX\DateTime\LocalDateTime $scheduledTime) : void
    {
        $this->scheduledTime = $scheduledTime;
    }
    public function getScheduledTime() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->scheduledTime;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('scheduledTime' => $this->scheduledTime), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

