<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of planning the execution of an event/task/action/reservation/plan to a future date.")
 */
class PlanAction extends OrganizeAction
{
    /**
     * @var \DateTime|null
     */
    protected $scheduledTime;
    /**
     * @param \DateTime|null $scheduledTime
     */
    public function setScheduledTime(?\DateTime $scheduledTime) : void
    {
        $this->scheduledTime = $scheduledTime;
    }
    /**
     * @return \DateTime|null
     */
    public function getScheduledTime() : ?\DateTime
    {
        return $this->scheduledTime;
    }
}
