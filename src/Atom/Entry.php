<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Entry
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
     * @var Text
     */
    protected $content;
    /**
     * @var array<Person>
     */
    protected $contributor;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var array<Link>
     */
    protected $link;
    /**
     * @var \DateTime
     */
    protected $published;
    /**
     * @var string
     */
    protected $rights;
    /**
     * @var Atom
     */
    protected $source;
    /**
     * @var Text
     */
    protected $summary;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var \DateTime
     */
    protected $updated;
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
     * @param Text $content
     */
    public function setContent(?Text $content)
    {
        $this->content = $content;
    }
    /**
     * @return Text
     */
    public function getContent() : ?Text
    {
        return $this->content;
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
     * @param \DateTime $published
     */
    public function setPublished(?\DateTime $published)
    {
        $this->published = $published;
    }
    /**
     * @return \DateTime
     */
    public function getPublished() : ?\DateTime
    {
        return $this->published;
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
     * @param Atom $source
     */
    public function setSource(?Atom $source)
    {
        $this->source = $source;
    }
    /**
     * @return Atom
     */
    public function getSource() : ?Atom
    {
        return $this->source;
    }
    /**
     * @param Text $summary
     */
    public function setSummary(?Text $summary)
    {
        $this->summary = $summary;
    }
    /**
     * @return Text
     */
    public function getSummary() : ?Text
    {
        return $this->summary;
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
}
