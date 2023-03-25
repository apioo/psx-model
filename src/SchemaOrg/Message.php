<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A single message from a sender to one or more organizations or people.')]
class Message extends CreativeWork implements \JsonSerializable
{
    protected \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalDate|null $dateRead = null;
    protected Person|ContactPoint|Organization|Audience|null $ccRecipient = null;
    protected Organization|ContactPoint|Person|Audience|null $recipient = null;
    protected ?CreativeWork $messageAttachment = null;
    protected ?\PSX\DateTime\LocalDateTime $dateSent = null;
    protected Organization|Person|ContactPoint|null $bccRecipient = null;
    protected Person|Audience|Organization|null $sender = null;
    protected Person|Organization|ContactPoint|Audience|null $toRecipient = null;
    protected ?\PSX\DateTime\LocalDateTime $dateReceived = null;
    public function setDateRead(\PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalDate|null $dateRead) : void
    {
        $this->dateRead = $dateRead;
    }
    public function getDateRead() : \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalDate|null
    {
        return $this->dateRead;
    }
    public function setCcRecipient(Person|ContactPoint|Organization|Audience|null $ccRecipient) : void
    {
        $this->ccRecipient = $ccRecipient;
    }
    public function getCcRecipient() : Person|ContactPoint|Organization|Audience|null
    {
        return $this->ccRecipient;
    }
    public function setRecipient(Organization|ContactPoint|Person|Audience|null $recipient) : void
    {
        $this->recipient = $recipient;
    }
    public function getRecipient() : Organization|ContactPoint|Person|Audience|null
    {
        return $this->recipient;
    }
    public function setMessageAttachment(?CreativeWork $messageAttachment) : void
    {
        $this->messageAttachment = $messageAttachment;
    }
    public function getMessageAttachment() : ?CreativeWork
    {
        return $this->messageAttachment;
    }
    public function setDateSent(?\PSX\DateTime\LocalDateTime $dateSent) : void
    {
        $this->dateSent = $dateSent;
    }
    public function getDateSent() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->dateSent;
    }
    public function setBccRecipient(Organization|Person|ContactPoint|null $bccRecipient) : void
    {
        $this->bccRecipient = $bccRecipient;
    }
    public function getBccRecipient() : Organization|Person|ContactPoint|null
    {
        return $this->bccRecipient;
    }
    public function setSender(Person|Audience|Organization|null $sender) : void
    {
        $this->sender = $sender;
    }
    public function getSender() : Person|Audience|Organization|null
    {
        return $this->sender;
    }
    public function setToRecipient(Person|Organization|ContactPoint|Audience|null $toRecipient) : void
    {
        $this->toRecipient = $toRecipient;
    }
    public function getToRecipient() : Person|Organization|ContactPoint|Audience|null
    {
        return $this->toRecipient;
    }
    public function setDateReceived(?\PSX\DateTime\LocalDateTime $dateReceived) : void
    {
        $this->dateReceived = $dateReceived;
    }
    public function getDateReceived() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->dateReceived;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('dateRead' => $this->dateRead, 'ccRecipient' => $this->ccRecipient, 'recipient' => $this->recipient, 'messageAttachment' => $this->messageAttachment, 'dateSent' => $this->dateSent, 'bccRecipient' => $this->bccRecipient, 'sender' => $this->sender, 'toRecipient' => $this->toRecipient, 'dateReceived' => $this->dateReceived), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

