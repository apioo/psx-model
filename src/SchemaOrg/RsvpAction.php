<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of notifying an event organizer as to whether you expect to attend the event.')]
class RsvpAction extends InformAction implements \JsonSerializable
{
    protected ?Comment $comment = null;
    protected ?RsvpResponseType $rsvpResponse = null;
    protected ?float $additionalNumberOfGuests = null;
    public function setComment(?Comment $comment) : void
    {
        $this->comment = $comment;
    }
    public function getComment() : ?Comment
    {
        return $this->comment;
    }
    public function setRsvpResponse(?RsvpResponseType $rsvpResponse) : void
    {
        $this->rsvpResponse = $rsvpResponse;
    }
    public function getRsvpResponse() : ?RsvpResponseType
    {
        return $this->rsvpResponse;
    }
    public function setAdditionalNumberOfGuests(?float $additionalNumberOfGuests) : void
    {
        $this->additionalNumberOfGuests = $additionalNumberOfGuests;
    }
    public function getAdditionalNumberOfGuests() : ?float
    {
        return $this->additionalNumberOfGuests;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('comment' => $this->comment, 'rsvpResponse' => $this->rsvpResponse, 'additionalNumberOfGuests' => $this->additionalNumberOfGuests), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

