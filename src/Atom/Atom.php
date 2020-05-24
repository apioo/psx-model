<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Atom
{
    /**
     * @var array<Person>
     */
    protected $author;
    /**
     * @var array<Category>
     */
    protected $category;
    /**
     * @var array<Person>
     */
    protected $contributor;
    /**
     * @var Generator
     */
    protected $generator;
    /**
     * @var string
     */
    protected $icon;
    /**
     * @var string
     */
    protected $logo;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var array<Link>
     */
    protected $link;
    /**
     * @var string
     */
    protected $rights;
    /**
     * @var Text
     */
    protected $subTitle;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var \DateTime
     */
    protected $updated;
    /**
     * @var array<Entry>
     */
    protected $entry;
    /**
     * @param array<Person> $author
     */
    public function setAuthor(?array $author)
    {
        $this->author = $author;
    }
    /**
     * @return array<Person>
     */
    public function getAuthor() : ?array
    {
        return $this->author;
    }
    /**
     * @param array<Category> $category
     */
    public function setCategory(?array $category)
    {
        $this->category = $category;
    }
    /**
     * @return array<Category>
     */
    public function getCategory() : ?array
    {
        return $this->category;
    }
    /**
     * @param array<Person> $contributor
     */
    public function setContributor(?array $contributor)
    {
        $this->contributor = $contributor;
    }
    /**
     * @return array<Person>
     */
    public function getContributor() : ?array
    {
        return $this->contributor;
    }
    /**
     * @param Generator $generator
     */
    public function setGenerator(?Generator $generator)
    {
        $this->generator = $generator;
    }
    /**
     * @return Generator
     */
    public function getGenerator() : ?Generator
    {
        return $this->generator;
    }
    /**
     * @param string $icon
     */
    public function setIcon(?string $icon)
    {
        $this->icon = $icon;
    }
    /**
     * @return string
     */
    public function getIcon() : ?string
    {
        return $this->icon;
    }
    /**
     * @param string $logo
     */
    public function setLogo(?string $logo)
    {
        $this->logo = $logo;
    }
    /**
     * @return string
     */
    public function getLogo() : ?string
    {
        return $this->logo;
    }
    /**
     * @param string $id
     */
    public function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param array<Link> $link
     */
    public function setLink(?array $link)
    {
        $this->link = $link;
    }
    /**
     * @return array<Link>
     */
    public function getLink() : ?array
    {
        return $this->link;
    }
    /**
     * @param string $rights
     */
    public function setRights(?string $rights)
    {
        $this->rights = $rights;
    }
    /**
     * @return string
     */
    public function getRights() : ?string
    {
        return $this->rights;
    }
    /**
     * @param Text $subTitle
     */
    public function setSubTitle(?Text $subTitle)
    {
        $this->subTitle = $subTitle;
    }
    /**
     * @return Text
     */
    public function getSubTitle() : ?Text
    {
        return $this->subTitle;
    }
    /**
     * @param string $title
     */
    public function setTitle(?string $title)
    {
        $this->title = $title;
    }
    /**
     * @return string
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param \DateTime $updated
     */
    public function setUpdated(?\DateTime $updated)
    {
        $this->updated = $updated;
    }
    /**
     * @return \DateTime
     */
    public function getUpdated() : ?\DateTime
    {
        return $this->updated;
    }
    /**
     * @param array<Entry> $entry
     */
    public function setEntry(?array $entry)
    {
        $this->entry = $entry;
    }
    /**
     * @return array<Entry>
     */
    public function getEntry() : ?array
    {
        return $this->entry;
    }
}
