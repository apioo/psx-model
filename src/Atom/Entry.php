<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Entry implements \JsonSerializable
{
    /**
     * @var array<Person>|null
     */
    protected ?array $author = null;
    /**
     * @var array<Category>|null
     */
    protected ?array $category = null;
    protected ?Text $content = null;
    /**
     * @var array<Person>|null
     */
    protected ?array $contributor = null;
    protected ?string $id = null;
    /**
     * @var array<Link>|null
     */
    protected ?array $link = null;
    protected ?\DateTime $published = null;
    protected ?string $rights = null;
    protected ?Atom $source = null;
    protected ?Text $summary = null;
    protected ?string $title = null;
    protected ?\DateTime $updated = null;
    /**
     * @param array<Person>|null $author
     */
    public function setAuthor(?array $author) : void
    {
        $this->author = $author;
    }
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
    public function getCategory() : ?array
    {
        return $this->category;
    }
    public function setContent(?Text $content) : void
    {
        $this->content = $content;
    }
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
    public function getContributor() : ?array
    {
        return $this->contributor;
    }
    public function setId(?string $id) : void
    {
        $this->id = $id;
    }
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
    public function getLink() : ?array
    {
        return $this->link;
    }
    public function setPublished(?\DateTime $published) : void
    {
        $this->published = $published;
    }
    public function getPublished() : ?\DateTime
    {
        return $this->published;
    }
    public function setRights(?string $rights) : void
    {
        $this->rights = $rights;
    }
    public function getRights() : ?string
    {
        return $this->rights;
    }
    public function setSource(?Atom $source) : void
    {
        $this->source = $source;
    }
    public function getSource() : ?Atom
    {
        return $this->source;
    }
    public function setSummary(?Text $summary) : void
    {
        $this->summary = $summary;
    }
    public function getSummary() : ?Text
    {
        return $this->summary;
    }
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    public function setUpdated(?\DateTime $updated) : void
    {
        $this->updated = $updated;
    }
    public function getUpdated() : ?\DateTime
    {
        return $this->updated;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('author' => $this->author, 'category' => $this->category, 'content' => $this->content, 'contributor' => $this->contributor, 'id' => $this->id, 'link' => $this->link, 'published' => $this->published, 'rights' => $this->rights, 'source' => $this->source, 'summary' => $this->summary, 'title' => $this->title, 'updated' => $this->updated), static function ($value) : bool {
            return $value !== null;
        });
    }
}

