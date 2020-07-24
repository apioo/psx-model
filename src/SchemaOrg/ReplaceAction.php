<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of editing a recipient by replacing an old object with a new object.")
 */
class ReplaceAction extends UpdateAction implements \JsonSerializable
{
    /**
     * @var Thing|null
     */
    protected $replacee;
    /**
     * @var Thing|null
     */
    protected $replacer;
    /**
     * @param Thing|null $replacee
     */
    public function setReplacee(?Thing $replacee) : void
    {
        $this->replacee = $replacee;
    }
    /**
     * @return Thing|null
     */
    public function getReplacee() : ?Thing
    {
        return $this->replacee;
    }
    /**
     * @param Thing|null $replacer
     */
    public function setReplacer(?Thing $replacer) : void
    {
        $this->replacer = $replacer;
    }
    /**
     * @return Thing|null
     */
    public function getReplacer() : ?Thing
    {
        return $this->replacer;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('replacee' => $this->replacee, 'replacer' => $this->replacer), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
