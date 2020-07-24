<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("The act of obtaining an object under an agreement to return it at a later date. Reciprocal of LendAction.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class=""localLink"" href=""http://schema.org/LendAction"">LendAction</a>: Reciprocal of BorrowAction.</li>
</ul>
")
*/
class BorrowAction extends TransferAction implements \JsonSerializable
{
    /**
     * @var Organization|Person|null
     */
    protected $lender;
    /**
     * @param Organization|Person|null $lender
     */
    public function setLender($lender) : void
    {
        $this->lender = $lender;
    }
    /**
     * @return Organization|Person|null
     */
    public function getLender()
    {
        return $this->lender;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('lender' => $this->lender), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
