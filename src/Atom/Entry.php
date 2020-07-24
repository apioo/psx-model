<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Entry implements \JsonSerializable
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
     * @var Text|null
     */
    protected $content;
    /**
     * @var array<Person>|null
     */
    protected $contributor;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var array<Link>|null
     */
    protected $link;
    /**
     * @var \DateTime|null
     */
    protected $published;
    /**
     * @var string|null
     */
    protected $rights;
    /**
     * @var Atom|null
     */
    protected $source;
    /**
     * @var Text|null
     */
    protected $summary;
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var \DateTime|null
     */
    protected $updated;
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
     * @param Text|null $content
     */
    public function setContent(?Text $content) : void
    {
        $this->content = $content;
    }
    /**
     * @return Text|null
     */
    public function getContent() : ?Text
    {
        return $this->content;
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
     * @param \DateTime|null $published
     */
    public function setPublished(?\DateTime $published) : void
    {
        $this->published = $published;
    }
    /**
     * @return \DateTime|null
     */
    public function getPublished() : ?\DateTime
    {
        return $this->published;
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
     * @param Atom|null $source
     */
    public function setSource(?Atom $source) : void
    {
        $this->source = $source;
    }
    /**
     * @return Atom|null
     */
    public function getSource() : ?Atom
    {
        return $this->source;
    }
    /**
     * @param Text|null $summary
     */
    public function setSummary(?Text $summary) : void
    {
        $this->summary = $summary;
    }
    /**
     * @return Text|null
     */
    public function getSummary() : ?Text
    {
        return $this->summary;
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
    public function jsonSerialize()
    {
        return array_filter(array('author' => $this->author, 'category' => $this->category, 'content' => $this->content, 'contributor' => $this->contributor, 'id' => $this->id, 'link' => $this->link, 'published' => $this->published, 'rights' => $this->rights, 'source' => $this->source, 'summary' => $this->summary, 'title' => $this->title, 'updated' => $this->updated), static function ($value) : bool {
            return $value !== null;
        });
    }
}
