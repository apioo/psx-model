<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of conveying information to another person via a communication medium (instrument) such as speech, email, or telephone conversation.")
 */
class CommunicateAction extends InteractAction
{
    /**
     * @var Person|ContactPoint|Organization|Audience|null
     */
    protected $ccRecipient;
    /**
     * @var Organization|ContactPoint|Person|Audience|null
     */
    protected $recipient;
    /**
     * @var string|Language|null
     */
    protected $inLanguage;
    /**
     * @var Thing|null
     */
    protected $about;
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
     * @param string|Language|null $inLanguage
     */
    public function setInLanguage($inLanguage) : void
    {
        $this->inLanguage = $inLanguage;
    }
    /**
     * @return string|Language|null
     */
    public function getInLanguage()
    {
        return $this->inLanguage;
    }
    /**
     * @param Thing|\PSX\Uri\Uri|CreativeWork|null $about
     */
    public function setAbout($about) : void
    {
        $this->about = $about;
    }
    /**
     * @return Thing|\PSX\Uri\Uri|CreativeWork|null
     */
    public function getAbout()
    {
        return $this->about;
    }
}
