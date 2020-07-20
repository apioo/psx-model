<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("An action performed by a direct agent and indirect participants upon a direct object. Optionally happens at a location with the help of an inanimate instrument. The execution of the action may produce a result. Specific action sub-type documentation specifies the exact expectation of each argument/role.<br/><br/>

See also <a href=""http://blog.schema.org/2014/04/announcing-schemaorg-actions.html"">blog post</a> and <a href=""http://schema.org/docs/actions.html"">Actions overview document</a>.")
*/
class Action extends Thing implements \JsonSerializable
{
    /**
     * @var Thing|null
     */
    protected $object;
    /**
     * @var Thing|DeliveryMethod|null
     */
    protected $deliveryMethod;
    /**
     * @var Thing|null
     */
    protected $instrument;
    /**
     * @var string|PostalAddress|Place|null
     */
    protected $location;
    /**
     * @var EntryPoint|null
     */
    protected $target;
    /**
     * @var Person|Organization|null
     */
    protected $participant;
    /**
     * @var Person|Organization|null
     */
    protected $agent;
    /**
     * @var Thing|Comment|null
     */
    protected $resultComment;
    /**
     * @var Thing|null
     */
    protected $result;
    /**
     * @var \PSX\DateTime\Time|\DateTime|null
     */
    protected $startTime;
    /**
     * @var \PSX\DateTime\Time|\DateTime|null
     */
    protected $endTime;
    /**
     * @var ActionStatusType|null
     */
    protected $actionStatus;
    /**
     * @var Thing|null
     */
    protected $error;
    /**
     * @param Thing|null $object
     */
    public function setObject(?Thing $object) : void
    {
        $this->object = $object;
    }
    /**
     * @return Thing|null
     */
    public function getObject() : ?Thing
    {
        return $this->object;
    }
    /**
     * @param Thing|DeliveryMethod|null $deliveryMethod
     */
    public function setDeliveryMethod($deliveryMethod) : void
    {
        $this->deliveryMethod = $deliveryMethod;
    }
    /**
     * @return Thing|DeliveryMethod|null
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }
    /**
     * @param Thing|null $instrument
     */
    public function setInstrument(?Thing $instrument) : void
    {
        $this->instrument = $instrument;
    }
    /**
     * @return Thing|null
     */
    public function getInstrument() : ?Thing
    {
        return $this->instrument;
    }
    /**
     * @param string|PostalAddress|Place|null $location
     */
    public function setLocation($location) : void
    {
        $this->location = $location;
    }
    /**
     * @return string|PostalAddress|Place|null
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * @param EntryPoint|null $target
     */
    public function setTarget(?EntryPoint $target) : void
    {
        $this->target = $target;
    }
    /**
     * @return EntryPoint|null
     */
    public function getTarget() : ?EntryPoint
    {
        return $this->target;
    }
    /**
     * @param Person|Organization|null $participant
     */
    public function setParticipant($participant) : void
    {
        $this->participant = $participant;
    }
    /**
     * @return Person|Organization|null
     */
    public function getParticipant()
    {
        return $this->participant;
    }
    /**
     * @param Person|Organization|null $agent
     */
    public function setAgent($agent) : void
    {
        $this->agent = $agent;
    }
    /**
     * @return Person|Organization|null
     */
    public function getAgent()
    {
        return $this->agent;
    }
    /**
     * @param Thing|Comment|null $resultComment
     */
    public function setResultComment($resultComment) : void
    {
        $this->resultComment = $resultComment;
    }
    /**
     * @return Thing|Comment|null
     */
    public function getResultComment()
    {
        return $this->resultComment;
    }
    /**
     * @param Thing|null $result
     */
    public function setResult(?Thing $result) : void
    {
        $this->result = $result;
    }
    /**
     * @return Thing|null
     */
    public function getResult() : ?Thing
    {
        return $this->result;
    }
    /**
     * @param \PSX\DateTime\Time|\DateTime|null $startTime
     */
    public function setStartTime($startTime) : void
    {
        $this->startTime = $startTime;
    }
    /**
     * @return \PSX\DateTime\Time|\DateTime|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
    /**
     * @param \PSX\DateTime\Time|\DateTime|null $endTime
     */
    public function setEndTime($endTime) : void
    {
        $this->endTime = $endTime;
    }
    /**
     * @return \PSX\DateTime\Time|\DateTime|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }
    /**
     * @param ActionStatusType|null $actionStatus
     */
    public function setActionStatus(?ActionStatusType $actionStatus) : void
    {
        $this->actionStatus = $actionStatus;
    }
    /**
     * @return ActionStatusType|null
     */
    public function getActionStatus() : ?ActionStatusType
    {
        return $this->actionStatus;
    }
    /**
     * @param Thing|null $error
     */
    public function setError(?Thing $error) : void
    {
        $this->error = $error;
    }
    /**
     * @return Thing|null
     */
    public function getError() : ?Thing
    {
        return $this->error;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('object' => $this->object, 'deliveryMethod' => $this->deliveryMethod, 'instrument' => $this->instrument, 'location' => $this->location, 'target' => $this->target, 'participant' => $this->participant, 'agent' => $this->agent, 'resultComment' => $this->resultComment, 'result' => $this->result, 'startTime' => $this->startTime, 'endTime' => $this->endTime, 'actionStatus' => $this->actionStatus, 'error' => $this->error), static function ($value) : bool {
            return $value !== null;
        });
    }
}
