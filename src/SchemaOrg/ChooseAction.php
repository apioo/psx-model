<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of expressing a preference from a set of options or a large or unbounded set of choices/options.")
 */
class ChooseAction extends AssessAction implements \JsonSerializable
{
    /**
     * @var Thing|string|null
     */
    protected $actionOption;
    /**
     * @param Thing|string|null $actionOption
     */
    public function setActionOption($actionOption) : void
    {
        $this->actionOption = $actionOption;
    }
    /**
     * @return Thing|string|null
     */
    public function getActionOption()
    {
        return $this->actionOption;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('actionOption' => $this->actionOption), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
