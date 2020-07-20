<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of notifying an event organizer as to whether you expect to attend the event.")
 */
class RsvpAction extends InformAction implements \JsonSerializable
{
    /**
     * @var Comment|null
     */
    protected $comment;
    /**
     * @var RsvpResponseType|null
     */
    protected $rsvpResponse;
    /**
     * @var float|null
     */
    protected $additionalNumberOfGuests;
    /**
     * @param Comment|null $comment
     */
    public function setComment(?Comment $comment) : void
    {
        $this->comment = $comment;
    }
    /**
     * @return Comment|null
     */
    public function getComment() : ?Comment
    {
        return $this->comment;
    }
    /**
     * @param RsvpResponseType|null $rsvpResponse
     */
    public function setRsvpResponse(?RsvpResponseType $rsvpResponse) : void
    {
        $this->rsvpResponse = $rsvpResponse;
    }
    /**
     * @return RsvpResponseType|null
     */
    public function getRsvpResponse() : ?RsvpResponseType
    {
        return $this->rsvpResponse;
    }
    /**
     * @param float|null $additionalNumberOfGuests
     */
    public function setAdditionalNumberOfGuests(?float $additionalNumberOfGuests) : void
    {
        $this->additionalNumberOfGuests = $additionalNumberOfGuests;
    }
    /**
     * @return float|null
     */
    public function getAdditionalNumberOfGuests() : ?float
    {
        return $this->additionalNumberOfGuests;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('comment' => $this->comment, 'rsvpResponse' => $this->rsvpResponse, 'additionalNumberOfGuests' => $this->additionalNumberOfGuests), static function ($value) : bool {
            return $value !== null;
        });
    }
}
