<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Atom implements \JsonSerializable
{
    /**
     * @var array<Person>|null
     */
    protected $author;
    /**
     * @var array<Category>|null
     */
    protected $category;
    /**
     * @var array<Person>|null
     */
    protected $contributor;
    /**
     * @var Generator|null
     */
    protected $generator;
    /**
     * @var string|null
     */
    protected $icon;
    /**
     * @var string|null
     */
    protected $logo;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var array<Link>|null
     */
    protected $link;
    /**
     * @var string|null
     */
    protected $rights;
    /**
     * @var Text|null
     */
    protected $subTitle;
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var \DateTime|null
     */
    protected $updated;
    /**
     * @var array<Entry>|null
     */
    protected $entry;
    /**
     * @param array<Person>|null $author
     */
    public function setAuthor(?array $author) : void
    {
        $this->author = $author;
    }
    /**
     * @return array<Person>|null
     */
    public function getAuthor() : ?array
    {
        return $this->author;
    }
    /**
     * @param array<Category>|null $category
     */
    public function setCategory(?array $category) : void
    {
        $this->category = $category;
    }
    /**
     * @return array<Category>|null
     */
    public function getCategory() : ?array
    {
        return $this->category;
    }
    /**
     * @param array<Person>|null $contributor
     */
    public function setContributor(?array $contributor) : void
    {
        $this->contributor = $contributor;
    }
    /**
     * @return array<Person>|null
     */
    public function getContributor() : ?array
    {
        return $this->contributor;
    }
    /**
     * @param Generator|null $generator
     */
    public function setGenerator(?Generator $generator) : void
    {
        $this->generator = $generator;
    }
    /**
     * @return Generator|null
     */
    public function getGenerator() : ?Generator
    {
        return $this->generator;
    }
    /**
     * @param string|null $icon
     */
    public function setIcon(?string $icon) : void
    {
        $this->icon = $icon;
    }
    /**
     * @return string|null
     */
    public function getIcon() : ?string
    {
        return $this->icon;
    }
    /**
     * @param string|null $logo
     */
    public function setLogo(?string $logo) : void
    {
        $this->logo = $logo;
    }
    /**
     * @return string|null
     */
    public function getLogo() : ?string
    {
        return $this->logo;
    }
    /**
     * @param string|null $id
     */
    public function setId(?string $id) : void
    {
        $this->id = $id;
    }
    /**
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param array<Link>|null $link
     */
    public function setLink(?array $link) : void
    {
        $this->link = $link;
    }
    /**
     * @return array<Link>|null
     */
    public function getLink() : ?array
    {
        return $this->link;
    }
    /**
     * @param string|null $rights
     */
    public function setRights(?string $rights) : void
    {
        $this->rights = $rights;
    }
    /**
     * @return string|null
     */
    public function getRights() : ?string
    {
        return $this->rights;
    }
    /**
     * @param Text|null $subTitle
     */
    public function setSubTitle(?Text $subTitle) : void
    {
        $this->subTitle = $subTitle;
    }
    /**
     * @return Text|null
     */
    public function getSubTitle() : ?Text
    {
        return $this->subTitle;
    }
    /**
     * @param string|null $title
     */
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    /**
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param \DateTime|null $updated
     */
    public function setUpdated(?\DateTime $updated) : void
    {
        $this->updated = $updated;
    }
    /**
     * @return \DateTime|null
     */
    public function getUpdated() : ?\DateTime
    {
        return $this->updated;
    }
    /**
     * @param array<Entry>|null $entry
     */
    public function setEntry(?array $entry) : void
    {
        $this->entry = $entry;
    }
    /**
     * @return array<Entry>|null
     */
    public function getEntry() : ?array
    {
        return $this->entry;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('author' => $this->author, 'category' => $this->category, 'contributor' => $this->contributor, 'generator' => $this->generator, 'icon' => $this->icon, 'logo' => $this->logo, 'id' => $this->id, 'link' => $this->link, 'rights' => $this->rights, 'subTitle' => $this->subTitle, 'title' => $this->title, 'updated' => $this->updated, 'entry' => $this->entry), static function ($value) : bool {
            return $value !== null;
        });
    }
}
