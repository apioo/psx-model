<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A single message from a sender to one or more organizations or people.")
 */
class Message extends CreativeWork implements \JsonSerializable
{
    /**
     * @var \DateTime|\PSX\DateTime\Date|null
     */
    protected $dateRead;
    /**
     * @var Person|ContactPoint|Organization|Audience|null
     */
    protected $ccRecipient;
    /**
     * @var Organization|ContactPoint|Person|Audience|null
     */
    protected $recipient;
    /**
     * @var CreativeWork|null
     */
    protected $messageAttachment;
    /**
     * @var \DateTime|null
     */
    protected $dateSent;
    /**
     * @var Organization|Person|ContactPoint|null
     */
    protected $bccRecipient;
    /**
     * @var Person|Audience|Organization|null
     */
    protected $sender;
    /**
     * @var Person|Organization|ContactPoint|Audience|null
     */
    protected $toRecipient;
    /**
     * @var \DateTime|null
     */
    protected $dateReceived;
    /**
     * @param \DateTime|\PSX\DateTime\Date|null $dateRead
     */
    public function setDateRead($dateRead) : void
    {
        $this->dateRead = $dateRead;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Date|null
     */
    public function getDateRead()
    {
        return $this->dateRead;
    }
    /**
     * @param Person|ContactPoint|Organization|Audience|null $ccRecipient
     */
    public function setCcRecipient($ccRecipient) : void
    {
        $this->ccRecipient = $ccRecipient;
    }
    /**
     * @return Person|ContactPoint|Organization|Audience|null
     */
    public function getCcRecipient()
    {
        return $this->ccRecipient;
    }
    /**
     * @param Organization|ContactPoint|Person|Audience|null $recipient
     */
    public function setRecipient($recipient) : void
    {
        $this->recipient = $recipient;
    }
    /**
     * @return Organization|ContactPoint|Person|Audience|null
     */
    public function getRecipient()
    {
        return $this->recipient;
    }
    /**
     * @param CreativeWork|null $messageAttachment
     */
    public function setMessageAttachment(?CreativeWork $messageAttachment) : void
    {
        $this->messageAttachment = $messageAttachment;
    }
    /**
     * @return CreativeWork|null
     */
    public function getMessageAttachment() : ?CreativeWork
    {
        return $this->messageAttachment;
    }
    /**
     * @param \DateTime|null $dateSent
     */
    public function setDateSent(?\DateTime $dateSent) : void
    {
        $this->dateSent = $dateSent;
    }
    /**
     * @return \DateTime|null
     */
    public function getDateSent() : ?\DateTime
    {
        return $this->dateSent;
    }
    /**
     * @param Organization|Person|ContactPoint|null $bccRecipient
     */
    public function setBccRecipient($bccRecipient) : void
    {
        $this->bccRecipient = $bccRecipient;
    }
    /**
     * @return Organization|Person|ContactPoint|null
     */
    public function getBccRecipient()
    {
        return $this->bccRecipient;
    }
    /**
     * @param Person|Audience|Organization|null $sender
     */
    public function setSender($sender) : void
    {
        $this->sender = $sender;
    }
    /**
     * @return Person|Audience|Organization|null
     */
    public function getSender()
    {
        return $this->sender;
    }
    /**
     * @param Person|Organization|ContactPoint|Audience|null $toRecipient
     */
    public function setToRecipient($toRecipient) : void
    {
        $this->toRecipient = $toRecipient;
    }
    /**
     * @return Person|Organization|ContactPoint|Audience|null
     */
    public function getToRecipient()
    {
        return $this->toRecipient;
    }
    /**
     * @param \DateTime|null $dateReceived
     */
    public function setDateReceived(?\DateTime $dateReceived) : void
    {
        $this->dateReceived = $dateReceived;
    }
    /**
     * @return \DateTime|null
     */
    public function getDateReceived() : ?\DateTime
    {
        return $this->dateReceived;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('dateRead' => $this->dateRead, 'ccRecipient' => $this->ccRecipient, 'recipient' => $this->recipient, 'messageAttachment' => $this->messageAttachment, 'dateSent' => $this->dateSent, 'bccRecipient' => $this->bccRecipient, 'sender' => $this->sender, 'toRecipient' => $this->toRecipient, 'dateReceived' => $this->dateReceived), static function ($value) : bool {
            return $value !== null;
        });
    }
}
