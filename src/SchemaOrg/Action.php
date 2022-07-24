<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An action performed by a direct agent and indirect participants upon a direct object. Optionally happens at a location with the help of an inanimate instrument. The execution of the action may produce a result. Specific action sub-type documentation specifies the exact expectation of each argument/role.<br/><br/>

See also <a href="http://blog.schema.org/2014/04/announcing-schemaorg-actions.html">blog post</a> and <a href="http://schema.org/docs/actions.html">Actions overview document</a>.')]
class Action extends Thing implements \JsonSerializable
{
    protected ?Thing $object = null;
    protected Thing|DeliveryMethod|null $deliveryMethod = null;
    protected ?Thing $instrument = null;
    protected string|PostalAddress|Place|null $location = null;
    protected ?EntryPoint $target = null;
    protected Person|Organization|null $participant = null;
    protected Person|Organization|null $agent = null;
    protected Thing|Comment|null $resultComment = null;
    protected ?Thing $result = null;
    protected \PSX\DateTime\Time|\DateTime|null $startTime = null;
    protected \PSX\DateTime\Time|\DateTime|null $endTime = null;
    protected ?ActionStatusType $actionStatus = null;
    protected ?Thing $error = null;
    public function setObject(?Thing $object) : void
    {
        $this->object = $object;
    }
    public function getObject() : ?Thing
    {
        return $this->object;
    }
    public function setDeliveryMethod(Thing|DeliveryMethod|null $deliveryMethod) : void
    {
        $this->deliveryMethod = $deliveryMethod;
    }
    public function getDeliveryMethod() : Thing|DeliveryMethod|null
    {
        return $this->deliveryMethod;
    }
    public function setInstrument(?Thing $instrument) : void
    {
        $this->instrument = $instrument;
    }
    public function getInstrument() : ?Thing
    {
        return $this->instrument;
    }
    public function setLocation(string|PostalAddress|Place|null $location) : void
    {
        $this->location = $location;
    }
    public function getLocation() : string|PostalAddress|Place|null
    {
        return $this->location;
    }
    public function setTarget(?EntryPoint $target) : void
    {
        $this->target = $target;
    }
    public function getTarget() : ?EntryPoint
    {
        return $this->target;
    }
    public function setParticipant(Person|Organization|null $participant) : void
    {
        $this->participant = $participant;
    }
    public function getParticipant() : Person|Organization|null
    {
        return $this->participant;
    }
    public function setAgent(Person|Organization|null $agent) : void
    {
        $this->agent = $agent;
    }
    public function getAgent() : Person|Organization|null
    {
        return $this->agent;
    }
    public function setResultComment(Thing|Comment|null $resultComment) : void
    {
        $this->resultComment = $resultComment;
    }
    public function getResultComment() : Thing|Comment|null
    {
        return $this->resultComment;
    }
    public function setResult(?Thing $result) : void
    {
        $this->result = $result;
    }
    public function getResult() : ?Thing
    {
        return $this->result;
    }
    public function setStartTime(\PSX\DateTime\Time|\DateTime|null $startTime) : void
    {
        $this->startTime = $startTime;
    }
    public function getStartTime() : \PSX\DateTime\Time|\DateTime|null
    {
        return $this->startTime;
    }
    public function setEndTime(\PSX\DateTime\Time|\DateTime|null $endTime) : void
    {
        $this->endTime = $endTime;
    }
    public function getEndTime() : \PSX\DateTime\Time|\DateTime|null
    {
        return $this->endTime;
    }
    public function setActionStatus(?ActionStatusType $actionStatus) : void
    {
        $this->actionStatus = $actionStatus;
    }
    public function getActionStatus() : ?ActionStatusType
    {
        return $this->actionStatus;
    }
    public function setError(?Thing $error) : void
    {
        $this->error = $error;
    }
    public function getError() : ?Thing
    {
        return $this->error;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('object' => $this->object, 'deliveryMethod' => $this->deliveryMethod, 'instrument' => $this->instrument, 'location' => $this->location, 'target' => $this->target, 'participant' => $this->participant, 'agent' => $this->agent, 'resultComment' => $this->resultComment, 'result' => $this->result, 'startTime' => $this->startTime, 'endTime' => $this->endTime, 'actionStatus' => $this->actionStatus, 'error' => $this->error), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

