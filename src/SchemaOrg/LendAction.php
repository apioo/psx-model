<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("The act of providing an object under an agreement that it will be returned at a later date. Reciprocal of BorrowAction.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class=""localLink"" href=""http://schema.org/BorrowAction"">BorrowAction</a>: Reciprocal of LendAction.</li>
</ul>
")
*/
class LendAction extends TransferAction implements \JsonSerializable
{
    /**
     * @var Person|null
     */
    protected $borrower;
    /**
     * @param Person|null $borrower
     */
    public function setBorrower(?Person $borrower) : void
    {
        $this->borrower = $borrower;
    }
    /**
     * @return Person|null
     */
    public function getBorrower() : ?Person
    {
        return $this->borrower;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('borrower' => $this->borrower), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
