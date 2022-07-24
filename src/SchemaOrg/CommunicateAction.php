<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of conveying information to another person via a communication medium (instrument) such as speech, email, or telephone conversation.')]
class CommunicateAction extends InteractAction implements \JsonSerializable
{
    protected Person|ContactPoint|Organization|Audience|null $ccRecipient = null;
    protected Organization|ContactPoint|Person|Audience|null $recipient = null;
    protected string|Language|null $inLanguage = null;
    protected ?Thing $about = null;
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
    public function setInLanguage(string|Language|null $inLanguage) : void
    {
        $this->inLanguage = $inLanguage;
    }
    public function getInLanguage() : string|Language|null
    {
        return $this->inLanguage;
    }
    public function setAbout(?Thing $about) : void
    {
        $this->about = $about;
    }
    public function getAbout() : ?Thing
    {
        return $this->about;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('ccRecipient' => $this->ccRecipient, 'recipient' => $this->recipient, 'inLanguage' => $this->inLanguage, 'about' => $this->about), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

