<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of authoring written creative content.")
 */
class WriteAction extends CreateAction
{
    /**
     * @var string|Language|null
     */
    protected $inLanguage;
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
}
