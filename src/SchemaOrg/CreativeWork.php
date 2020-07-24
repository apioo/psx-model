<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The most generic kind of creative work, including books, movies, photographs, software programs, etc.")
 */
class CreativeWork extends Thing implements \JsonSerializable
{
    /**
     * @var Audience|null
     */
    protected $audience;
    /**
     * @var Person|null
     */
    protected $editor;
    /**
     * @var \PSX\Uri\Uri|Product|CreativeWork|null
     */
    protected $isBasedOn;
    /**
     * @var string|null
     */
    protected $alternativeHeadline;
    /**
     * @var \PSX\DateTime\Date|null
     */
    protected $expires;
    /**
     * @var Place|null
     */
    protected $spatialCoverage;
    /**
     * @var Place|null
     */
    protected $contentLocation;
    /**
     * @var MediaObject|null
     */
    protected $encoding;
    /**
     * @var \PSX\Uri\Uri|CreativeWork|null
     */
    protected $publishingPrinciples;
    /**
     * @var Clip|VideoObject|null
     */
    protected $video;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $datePublished;
    /**
     * @var string|null
     */
    protected $text;
    /**
     * @var Person|Organization|null
     */
    protected $sponsor;
    /**
     * @var ItemList|null
     */
    protected $accessModeSufficient;
    /**
     * @var int|string|null
     */
    protected $position;
    /**
     * @var float|string|null
     */
    protected $version;
    /**
     * @var \PSX\Uri\Uri|string|null
     */
    protected $encodingFormat;
    /**
     * @var Thing|null
     */
    protected $mentions;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $dateModified;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $dateCreated;
    /**
     * @var string|null
     */
    protected $keywords;
    /**
     * @var string|null
     */
    protected $learningResourceType;
    /**
     * @var string|null
     */
    protected $accessMode;
    /**
     * @var PublicationEvent|null
     */
    protected $publication;
    /**
     * @var \PSX\Uri\Uri|null
     */
    protected $discussionUrl;
    /**
     * @var string|null
     */
    protected $accessibilityAPI;
    /**
     * @var string|null
     */
    protected $typicalAgeRange;
    /**
     * @var Organization|Person|null
     */
    protected $provider;
    /**
     * @var Person|Organization|null
     */
    protected $producer;
    /**
     * @var MediaObject|null
     */
    protected $associatedMedia;
    /**
     * @var \PSX\Uri\Uri|CreativeWork|null
     */
    protected $isPartOf;
    /**
     * @var Person|null
     */
    protected $character;
    /**
     * @var bool|null
     */
    protected $isFamilyFriendly;
    /**
     * @var string|CreativeWork|null
     */
    protected $citation;
    /**
     * @var Place|null
     */
    protected $locationCreated;
    /**
     * @var int|null
     */
    protected $commentCount;
    /**
     * @var string|\DateTime|\PSX\Uri\Uri|null
     */
    protected $temporalCoverage;
    /**
     * @var Organization|Person|null
     */
    protected $publisher;
    /**
     * @var \PSX\Uri\Uri|string|Product|null
     */
    protected $material;
    /**
     * @var AggregateRating|null
     */
    protected $aggregateRating;
    /**
     * @var string|null
     */
    protected $accessibilityControl;
    /**
     * @var string|null
     */
    protected $interactivityType;
    /**
     * @var string|Language|null
     */
    protected $inLanguage;
    /**
     * @var string|null
     */
    protected $award;
    /**
     * @var \PSX\Uri\Uri|CreativeWork|null
     */
    protected $license;
    /**
     * @var Review|null
     */
    protected $review;
    /**
     * @var string|null
     */
    protected $educationalUse;
    /**
     * @var Organization|Person|null
     */
    protected $translator;
    /**
     * @var \PSX\Uri\Uri|string|null
     */
    protected $genre;
    /**
     * @var Comment|null
     */
    protected $comment;
    /**
     * @var Person|Organization|null
     */
    protected $author;
    /**
     * @var Clip|AudioObject|MusicRecording|null
     */
    protected $audio;
    /**
     * @var string|null
     */
    protected $accessibilitySummary;
    /**
     * @var Organization|null
     */
    protected $sourceOrganization;
    /**
     * @var string|Rating|null
     */
    protected $contentRating;
    /**
     * @var \DateTime|string|null
     */
    protected $temporal;
    /**
     * @var float|null
     */
    protected $copyrightYear;
    /**
     * @var Organization|Person|null
     */
    protected $creator;
    /**
     * @var Person|null
     */
    protected $accountablePerson;
    /**
     * @var bool|null
     */
    protected $isAccessibleForFree;
    /**
     * @var string|null
     */
    protected $accessibilityFeature;
    /**
     * @var PublicationEvent|null
     */
    protected $releasedEvent;
    /**
     * @var InteractionCounter|null
     */
    protected $interactionStatistic;
    /**
     * @var string|null
     */
    protected $headline;
    /**
     * @var Place|null
     */
    protected $spatial;
    /**
     * @var \PSX\Uri\Uri|string|null
     */
    protected $schemaVersion;
    /**
     * @var Person|Organization|null
     */
    protected $copyrightHolder;
    /**
     * @var string|null
     */
    protected $accessibilityHazard;
    /**
     * @var AlignmentObject|null
     */
    protected $educationalAlignment;
    /**
     * @var Duration|null
     */
    protected $timeRequired;
    /**
     * @var Organization|Person|null
     */
    protected $contributor;
    /**
     * @var \PSX\Uri\Uri|null
     */
    protected $thumbnailUrl;
    /**
     * @var CreativeWork|null
     */
    protected $containsSeason;
    /**
     * @var CreativeWork|null
     */
    protected $hasPart;
    /**
     * @var Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
     */
    protected $itemOffered;
    /**
     * @var Offer|Demand|null
     */
    protected $offers;
    /**
     * @var Event|null
     */
    protected $recordedAt;
    /**
     * @var CreativeWork|null
     */
    protected $workExample;
    /**
     * @var CreativeWork|null
     */
    protected $exampleOfWork;
    /**
     * @param Audience|null $audience
     */
    public function setAudience(?Audience $audience) : void
    {
        $this->audience = $audience;
    }
    /**
     * @return Audience|null
     */
    public function getAudience() : ?Audience
    {
        return $this->audience;
    }
    /**
     * @param Person|null $editor
     */
    public function setEditor(?Person $editor) : void
    {
        $this->editor = $editor;
    }
    /**
     * @return Person|null
     */
    public function getEditor() : ?Person
    {
        return $this->editor;
    }
    /**
     * @param \PSX\Uri\Uri|Product|CreativeWork|null $isBasedOn
     */
    public function setIsBasedOn($isBasedOn) : void
    {
        $this->isBasedOn = $isBasedOn;
    }
    /**
     * @return \PSX\Uri\Uri|Product|CreativeWork|null
     */
    public function getIsBasedOn()
    {
        return $this->isBasedOn;
    }
    /**
     * @param string|null $alternativeHeadline
     */
    public function setAlternativeHeadline(?string $alternativeHeadline) : void
    {
        $this->alternativeHeadline = $alternativeHeadline;
    }
    /**
     * @return string|null
     */
    public function getAlternativeHeadline() : ?string
    {
        return $this->alternativeHeadline;
    }
    /**
     * @param \PSX\DateTime\Date|null $expires
     */
    public function setExpires(?\PSX\DateTime\Date $expires) : void
    {
        $this->expires = $expires;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getExpires() : ?\PSX\DateTime\Date
    {
        return $this->expires;
    }
    /**
     * @param Place|null $spatialCoverage
     */
    public function setSpatialCoverage(?Place $spatialCoverage) : void
    {
        $this->spatialCoverage = $spatialCoverage;
    }
    /**
     * @return Place|null
     */
    public function getSpatialCoverage() : ?Place
    {
        return $this->spatialCoverage;
    }
    /**
     * @param Place|null $contentLocation
     */
    public function setContentLocation(?Place $contentLocation) : void
    {
        $this->contentLocation = $contentLocation;
    }
    /**
     * @return Place|null
     */
    public function getContentLocation() : ?Place
    {
        return $this->contentLocation;
    }
    /**
     * @param MediaObject|null $encoding
     */
    public function setEncoding(?MediaObject $encoding) : void
    {
        $this->encoding = $encoding;
    }
    /**
     * @return MediaObject|null
     */
    public function getEncoding() : ?MediaObject
    {
        return $this->encoding;
    }
    /**
     * @param \PSX\Uri\Uri|CreativeWork|null $publishingPrinciples
     */
    public function setPublishingPrinciples($publishingPrinciples) : void
    {
        $this->publishingPrinciples = $publishingPrinciples;
    }
    /**
     * @return \PSX\Uri\Uri|CreativeWork|null
     */
    public function getPublishingPrinciples()
    {
        return $this->publishingPrinciples;
    }
    /**
     * @param Clip|VideoObject|null $video
     */
    public function setVideo($video) : void
    {
        $this->video = $video;
    }
    /**
     * @return Clip|VideoObject|null
     */
    public function getVideo()
    {
        return $this->video;
    }
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $datePublished
     */
    public function setDatePublished($datePublished) : void
    {
        $this->datePublished = $datePublished;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getDatePublished()
    {
        return $this->datePublished;
    }
    /**
     * @param string|null $text
     */
    public function setText(?string $text) : void
    {
        $this->text = $text;
    }
    /**
     * @return string|null
     */
    public function getText() : ?string
    {
        return $this->text;
    }
    /**
     * @param Person|Organization|null $sponsor
     */
    public function setSponsor($sponsor) : void
    {
        $this->sponsor = $sponsor;
    }
    /**
     * @return Person|Organization|null
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }
    /**
     * @param ItemList|null $accessModeSufficient
     */
    public function setAccessModeSufficient(?ItemList $accessModeSufficient) : void
    {
        $this->accessModeSufficient = $accessModeSufficient;
    }
    /**
     * @return ItemList|null
     */
    public function getAccessModeSufficient() : ?ItemList
    {
        return $this->accessModeSufficient;
    }
    /**
     * @param int|string|null $position
     */
    public function setPosition($position) : void
    {
        $this->position = $position;
    }
    /**
     * @return int|string|null
     */
    public function getPosition()
    {
        return $this->position;
    }
    /**
     * @param float|string|null $version
     */
    public function setVersion($version) : void
    {
        $this->version = $version;
    }
    /**
     * @return float|string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * @param \PSX\Uri\Uri|string|null $encodingFormat
     */
    public function setEncodingFormat($encodingFormat) : void
    {
        $this->encodingFormat = $encodingFormat;
    }
    /**
     * @return \PSX\Uri\Uri|string|null
     */
    public function getEncodingFormat()
    {
        return $this->encodingFormat;
    }
    /**
     * @param Thing|null $mentions
     */
    public function setMentions(?Thing $mentions) : void
    {
        $this->mentions = $mentions;
    }
    /**
     * @return Thing|null
     */
    public function getMentions() : ?Thing
    {
        return $this->mentions;
    }
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $dateModified
     */
    public function setDateModified($dateModified) : void
    {
        $this->dateModified = $dateModified;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $dateCreated
     */
    public function setDateCreated($dateCreated) : void
    {
        $this->dateCreated = $dateCreated;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }
    /**
     * @param string|null $keywords
     */
    public function setKeywords(?string $keywords) : void
    {
        $this->keywords = $keywords;
    }
    /**
     * @return string|null
     */
    public function getKeywords() : ?string
    {
        return $this->keywords;
    }
    /**
     * @param string|null $learningResourceType
     */
    public function setLearningResourceType(?string $learningResourceType) : void
    {
        $this->learningResourceType = $learningResourceType;
    }
    /**
     * @return string|null
     */
    public function getLearningResourceType() : ?string
    {
        return $this->learningResourceType;
    }
    /**
     * @param string|null $accessMode
     */
    public function setAccessMode(?string $accessMode) : void
    {
        $this->accessMode = $accessMode;
    }
    /**
     * @return string|null
     */
    public function getAccessMode() : ?string
    {
        return $this->accessMode;
    }
    /**
     * @param PublicationEvent|null $publication
     */
    public function setPublication(?PublicationEvent $publication) : void
    {
        $this->publication = $publication;
    }
    /**
     * @return PublicationEvent|null
     */
    public function getPublication() : ?PublicationEvent
    {
        return $this->publication;
    }
    /**
     * @param \PSX\Uri\Uri|null $discussionUrl
     */
    public function setDiscussionUrl(?\PSX\Uri\Uri $discussionUrl) : void
    {
        $this->discussionUrl = $discussionUrl;
    }
    /**
     * @return \PSX\Uri\Uri|null
     */
    public function getDiscussionUrl() : ?\PSX\Uri\Uri
    {
        return $this->discussionUrl;
    }
    /**
     * @param string|null $accessibilityAPI
     */
    public function setAccessibilityAPI(?string $accessibilityAPI) : void
    {
        $this->accessibilityAPI = $accessibilityAPI;
    }
    /**
     * @return string|null
     */
    public function getAccessibilityAPI() : ?string
    {
        return $this->accessibilityAPI;
    }
    /**
     * @param string|null $typicalAgeRange
     */
    public function setTypicalAgeRange(?string $typicalAgeRange) : void
    {
        $this->typicalAgeRange = $typicalAgeRange;
    }
    /**
     * @return string|null
     */
    public function getTypicalAgeRange() : ?string
    {
        return $this->typicalAgeRange;
    }
    /**
     * @param Organization|Person|null $provider
     */
    public function setProvider($provider) : void
    {
        $this->provider = $provider;
    }
    /**
     * @return Organization|Person|null
     */
    public function getProvider()
    {
        return $this->provider;
    }
    /**
     * @param Person|Organization|null $producer
     */
    public function setProducer($producer) : void
    {
        $this->producer = $producer;
    }
    /**
     * @return Person|Organization|null
     */
    public function getProducer()
    {
        return $this->producer;
    }
    /**
     * @param MediaObject|null $associatedMedia
     */
    public function setAssociatedMedia(?MediaObject $associatedMedia) : void
    {
        $this->associatedMedia = $associatedMedia;
    }
    /**
     * @return MediaObject|null
     */
    public function getAssociatedMedia() : ?MediaObject
    {
        return $this->associatedMedia;
    }
    /**
     * @param \PSX\Uri\Uri|CreativeWork|null $isPartOf
     */
    public function setIsPartOf($isPartOf) : void
    {
        $this->isPartOf = $isPartOf;
    }
    /**
     * @return \PSX\Uri\Uri|CreativeWork|null
     */
    public function getIsPartOf()
    {
        return $this->isPartOf;
    }
    /**
     * @param Person|null $character
     */
    public function setCharacter(?Person $character) : void
    {
        $this->character = $character;
    }
    /**
     * @return Person|null
     */
    public function getCharacter() : ?Person
    {
        return $this->character;
    }
    /**
     * @param bool|null $isFamilyFriendly
     */
    public function setIsFamilyFriendly(?bool $isFamilyFriendly) : void
    {
        $this->isFamilyFriendly = $isFamilyFriendly;
    }
    /**
     * @return bool|null
     */
    public function getIsFamilyFriendly() : ?bool
    {
        return $this->isFamilyFriendly;
    }
    /**
     * @param string|CreativeWork|null $citation
     */
    public function setCitation($citation) : void
    {
        $this->citation = $citation;
    }
    /**
     * @return string|CreativeWork|null
     */
    public function getCitation()
    {
        return $this->citation;
    }
    /**
     * @param Place|null $locationCreated
     */
    public function setLocationCreated(?Place $locationCreated) : void
    {
        $this->locationCreated = $locationCreated;
    }
    /**
     * @return Place|null
     */
    public function getLocationCreated() : ?Place
    {
        return $this->locationCreated;
    }
    /**
     * @param int|null $commentCount
     */
    public function setCommentCount(?int $commentCount) : void
    {
        $this->commentCount = $commentCount;
    }
    /**
     * @return int|null
     */
    public function getCommentCount() : ?int
    {
        return $this->commentCount;
    }
    /**
     * @param string|\DateTime|\PSX\Uri\Uri|null $temporalCoverage
     */
    public function setTemporalCoverage($temporalCoverage) : void
    {
        $this->temporalCoverage = $temporalCoverage;
    }
    /**
     * @return string|\DateTime|\PSX\Uri\Uri|null
     */
    public function getTemporalCoverage()
    {
        return $this->temporalCoverage;
    }
    /**
     * @param Organization|Person|null $publisher
     */
    public function setPublisher($publisher) : void
    {
        $this->publisher = $publisher;
    }
    /**
     * @return Organization|Person|null
     */
    public function getPublisher()
    {
        return $this->publisher;
    }
    /**
     * @param \PSX\Uri\Uri|string|Product|null $material
     */
    public function setMaterial($material) : void
    {
        $this->material = $material;
    }
    /**
     * @return \PSX\Uri\Uri|string|Product|null
     */
    public function getMaterial()
    {
        return $this->material;
    }
    /**
     * @param AggregateRating|null $aggregateRating
     */
    public function setAggregateRating(?AggregateRating $aggregateRating) : void
    {
        $this->aggregateRating = $aggregateRating;
    }
    /**
     * @return AggregateRating|null
     */
    public function getAggregateRating() : ?AggregateRating
    {
        return $this->aggregateRating;
    }
    /**
     * @param string|null $accessibilityControl
     */
    public function setAccessibilityControl(?string $accessibilityControl) : void
    {
        $this->accessibilityControl = $accessibilityControl;
    }
    /**
     * @return string|null
     */
    public function getAccessibilityControl() : ?string
    {
        return $this->accessibilityControl;
    }
    /**
     * @param string|null $interactivityType
     */
    public function setInteractivityType(?string $interactivityType) : void
    {
        $this->interactivityType = $interactivityType;
    }
    /**
     * @return string|null
     */
    public function getInteractivityType() : ?string
    {
        return $this->interactivityType;
    }
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
    /**
     * @param string|null $award
     */
    public function setAward(?string $award) : void
    {
        $this->award = $award;
    }
    /**
     * @return string|null
     */
    public function getAward() : ?string
    {
        return $this->award;
    }
    /**
     * @param \PSX\Uri\Uri|CreativeWork|null $license
     */
    public function setLicense($license) : void
    {
        $this->license = $license;
    }
    /**
     * @return \PSX\Uri\Uri|CreativeWork|null
     */
    public function getLicense()
    {
        return $this->license;
    }
    /**
     * @param Review|null $review
     */
    public function setReview(?Review $review) : void
    {
        $this->review = $review;
    }
    /**
     * @return Review|null
     */
    public function getReview() : ?Review
    {
        return $this->review;
    }
    /**
     * @param string|null $educationalUse
     */
    public function setEducationalUse(?string $educationalUse) : void
    {
        $this->educationalUse = $educationalUse;
    }
    /**
     * @return string|null
     */
    public function getEducationalUse() : ?string
    {
        return $this->educationalUse;
    }
    /**
     * @param Organization|Person|null $translator
     */
    public function setTranslator($translator) : void
    {
        $this->translator = $translator;
    }
    /**
     * @return Organization|Person|null
     */
    public function getTranslator()
    {
        return $this->translator;
    }
    /**
     * @param \PSX\Uri\Uri|string|null $genre
     */
    public function setGenre($genre) : void
    {
        $this->genre = $genre;
    }
    /**
     * @return \PSX\Uri\Uri|string|null
     */
    public function getGenre()
    {
        return $this->genre;
    }
    /**
     * @param Comment|null $comment
     */
    public function setComment(?Comment $comment) : void
    {
        $this->comment = $comment;
    }
    /**
     * @return Comment|null
     */
    public function getComment() : ?Comment
    {
        return $this->comment;
    }
    /**
     * @param Person|Organization|null $author
     */
    public function setAuthor($author) : void
    {
        $this->author = $author;
    }
    /**
     * @return Person|Organization|null
     */
    public function getAuthor()
    {
        return $this->author;
    }
    /**
     * @param Clip|AudioObject|MusicRecording|null $audio
     */
    public function setAudio($audio) : void
    {
        $this->audio = $audio;
    }
    /**
     * @return Clip|AudioObject|MusicRecording|null
     */
    public function getAudio()
    {
        return $this->audio;
    }
    /**
     * @param string|null $accessibilitySummary
     */
    public function setAccessibilitySummary(?string $accessibilitySummary) : void
    {
        $this->accessibilitySummary = $accessibilitySummary;
    }
    /**
     * @return string|null
     */
    public function getAccessibilitySummary() : ?string
    {
        return $this->accessibilitySummary;
    }
    /**
     * @param Organization|null $sourceOrganization
     */
    public function setSourceOrganization(?Organization $sourceOrganization) : void
    {
        $this->sourceOrganization = $sourceOrganization;
    }
    /**
     * @return Organization|null
     */
    public function getSourceOrganization() : ?Organization
    {
        return $this->sourceOrganization;
    }
    /**
     * @param string|Rating|null $contentRating
     */
    public function setContentRating($contentRating) : void
    {
        $this->contentRating = $contentRating;
    }
    /**
     * @return string|Rating|null
     */
    public function getContentRating()
    {
        return $this->contentRating;
    }
    /**
     * @param \DateTime|string|null $temporal
     */
    public function setTemporal($temporal) : void
    {
        $this->temporal = $temporal;
    }
    /**
     * @return \DateTime|string|null
     */
    public function getTemporal()
    {
        return $this->temporal;
    }
    /**
     * @param float|null $copyrightYear
     */
    public function setCopyrightYear(?float $copyrightYear) : void
    {
        $this->copyrightYear = $copyrightYear;
    }
    /**
     * @return float|null
     */
    public function getCopyrightYear() : ?float
    {
        return $this->copyrightYear;
    }
    /**
     * @param Organization|Person|null $creator
     */
    public function setCreator($creator) : void
    {
        $this->creator = $creator;
    }
    /**
     * @return Organization|Person|null
     */
    public function getCreator()
    {
        return $this->creator;
    }
    /**
     * @param Person|null $accountablePerson
     */
    public function setAccountablePerson(?Person $accountablePerson) : void
    {
        $this->accountablePerson = $accountablePerson;
    }
    /**
     * @return Person|null
     */
    public function getAccountablePerson() : ?Person
    {
        return $this->accountablePerson;
    }
    /**
     * @param bool|null $isAccessibleForFree
     */
    public function setIsAccessibleForFree(?bool $isAccessibleForFree) : void
    {
        $this->isAccessibleForFree = $isAccessibleForFree;
    }
    /**
     * @return bool|null
     */
    public function getIsAccessibleForFree() : ?bool
    {
        return $this->isAccessibleForFree;
    }
    /**
     * @param string|null $accessibilityFeature
     */
    public function setAccessibilityFeature(?string $accessibilityFeature) : void
    {
        $this->accessibilityFeature = $accessibilityFeature;
    }
    /**
     * @return string|null
     */
    public function getAccessibilityFeature() : ?string
    {
        return $this->accessibilityFeature;
    }
    /**
     * @param PublicationEvent|null $releasedEvent
     */
    public function setReleasedEvent(?PublicationEvent $releasedEvent) : void
    {
        $this->releasedEvent = $releasedEvent;
    }
    /**
     * @return PublicationEvent|null
     */
    public function getReleasedEvent() : ?PublicationEvent
    {
        return $this->releasedEvent;
    }
    /**
     * @param InteractionCounter|null $interactionStatistic
     */
    public function setInteractionStatistic(?InteractionCounter $interactionStatistic) : void
    {
        $this->interactionStatistic = $interactionStatistic;
    }
    /**
     * @return InteractionCounter|null
     */
    public function getInteractionStatistic() : ?InteractionCounter
    {
        return $this->interactionStatistic;
    }
    /**
     * @param string|null $headline
     */
    public function setHeadline(?string $headline) : void
    {
        $this->headline = $headline;
    }
    /**
     * @return string|null
     */
    public function getHeadline() : ?string
    {
        return $this->headline;
    }
    /**
     * @param Place|null $spatial
     */
    public function setSpatial(?Place $spatial) : void
    {
        $this->spatial = $spatial;
    }
    /**
     * @return Place|null
     */
    public function getSpatial() : ?Place
    {
        return $this->spatial;
    }
    /**
     * @param \PSX\Uri\Uri|string|null $schemaVersion
     */
    public function setSchemaVersion($schemaVersion) : void
    {
        $this->schemaVersion = $schemaVersion;
    }
    /**
     * @return \PSX\Uri\Uri|string|null
     */
    public function getSchemaVersion()
    {
        return $this->schemaVersion;
    }
    /**
     * @param Person|Organization|null $copyrightHolder
     */
    public function setCopyrightHolder($copyrightHolder) : void
    {
        $this->copyrightHolder = $copyrightHolder;
    }
    /**
     * @return Person|Organization|null
     */
    public function getCopyrightHolder()
    {
        return $this->copyrightHolder;
    }
    /**
     * @param string|null $accessibilityHazard
     */
    public function setAccessibilityHazard(?string $accessibilityHazard) : void
    {
        $this->accessibilityHazard = $accessibilityHazard;
    }
    /**
     * @return string|null
     */
    public function getAccessibilityHazard() : ?string
    {
        return $this->accessibilityHazard;
    }
    /**
     * @param AlignmentObject|null $educationalAlignment
     */
    public function setEducationalAlignment(?AlignmentObject $educationalAlignment) : void
    {
        $this->educationalAlignment = $educationalAlignment;
    }
    /**
     * @return AlignmentObject|null
     */
    public function getEducationalAlignment() : ?AlignmentObject
    {
        return $this->educationalAlignment;
    }
    /**
     * @param Duration|null $timeRequired
     */
    public function setTimeRequired(?Duration $timeRequired) : void
    {
        $this->timeRequired = $timeRequired;
    }
    /**
     * @return Duration|null
     */
    public function getTimeRequired() : ?Duration
    {
        return $this->timeRequired;
    }
    /**
     * @param Organization|Person|null $contributor
     */
    public function setContributor($contributor) : void
    {
        $this->contributor = $contributor;
    }
    /**
     * @return Organization|Person|null
     */
    public function getContributor()
    {
        return $this->contributor;
    }
    /**
     * @param \PSX\Uri\Uri|null $thumbnailUrl
     */
    public function setThumbnailUrl(?\PSX\Uri\Uri $thumbnailUrl) : void
    {
        $this->thumbnailUrl = $thumbnailUrl;
    }
    /**
     * @return \PSX\Uri\Uri|null
     */
    public function getThumbnailUrl() : ?\PSX\Uri\Uri
    {
        return $this->thumbnailUrl;
    }
    /**
     * @param CreativeWork|null $containsSeason
     */
    public function setContainsSeason(?CreativeWork $containsSeason) : void
    {
        $this->containsSeason = $containsSeason;
    }
    /**
     * @return CreativeWork|null
     */
    public function getContainsSeason() : ?CreativeWork
    {
        return $this->containsSeason;
    }
    /**
     * @param CreativeWork|null $hasPart
     */
    public function setHasPart(?CreativeWork $hasPart) : void
    {
        $this->hasPart = $hasPart;
    }
    /**
     * @return CreativeWork|null
     */
    public function getHasPart() : ?CreativeWork
    {
        return $this->hasPart;
    }
    /**
     * @param Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered
     */
    public function setItemOffered($itemOffered) : void
    {
        $this->itemOffered = $itemOffered;
    }
    /**
     * @return Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
     */
    public function getItemOffered()
    {
        return $this->itemOffered;
    }
    /**
     * @param Offer|Demand|null $offers
     */
    public function setOffers($offers) : void
    {
        $this->offers = $offers;
    }
    /**
     * @return Offer|Demand|null
     */
    public function getOffers()
    {
        return $this->offers;
    }
    /**
     * @param Event|null $recordedAt
     */
    public function setRecordedAt(?Event $recordedAt) : void
    {
        $this->recordedAt = $recordedAt;
    }
    /**
     * @return Event|null
     */
    public function getRecordedAt() : ?Event
    {
        return $this->recordedAt;
    }
    /**
     * @param CreativeWork|null $workExample
     */
    public function setWorkExample(?CreativeWork $workExample) : void
    {
        $this->workExample = $workExample;
    }
    /**
     * @return CreativeWork|null
     */
    public function getWorkExample() : ?CreativeWork
    {
        return $this->workExample;
    }
    /**
     * @param CreativeWork|null $exampleOfWork
     */
    public function setExampleOfWork(?CreativeWork $exampleOfWork) : void
    {
        $this->exampleOfWork = $exampleOfWork;
    }
    /**
     * @return CreativeWork|null
     */
    public function getExampleOfWork() : ?CreativeWork
    {
        return $this->exampleOfWork;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('audience' => $this->audience, 'editor' => $this->editor, 'isBasedOn' => $this->isBasedOn, 'alternativeHeadline' => $this->alternativeHeadline, 'expires' => $this->expires, 'spatialCoverage' => $this->spatialCoverage, 'contentLocation' => $this->contentLocation, 'encoding' => $this->encoding, 'publishingPrinciples' => $this->publishingPrinciples, 'video' => $this->video, 'datePublished' => $this->datePublished, 'text' => $this->text, 'sponsor' => $this->sponsor, 'accessModeSufficient' => $this->accessModeSufficient, 'position' => $this->position, 'version' => $this->version, 'encodingFormat' => $this->encodingFormat, 'mentions' => $this->mentions, 'dateModified' => $this->dateModified, 'dateCreated' => $this->dateCreated, 'keywords' => $this->keywords, 'learningResourceType' => $this->learningResourceType, 'accessMode' => $this->accessMode, 'publication' => $this->publication, 'discussionUrl' => $this->discussionUrl, 'accessibilityAPI' => $this->accessibilityAPI, 'typicalAgeRange' => $this->typicalAgeRange, 'provider' => $this->provider, 'producer' => $this->producer, 'associatedMedia' => $this->associatedMedia, 'isPartOf' => $this->isPartOf, 'character' => $this->character, 'isFamilyFriendly' => $this->isFamilyFriendly, 'citation' => $this->citation, 'locationCreated' => $this->locationCreated, 'commentCount' => $this->commentCount, 'temporalCoverage' => $this->temporalCoverage, 'publisher' => $this->publisher, 'material' => $this->material, 'aggregateRating' => $this->aggregateRating, 'accessibilityControl' => $this->accessibilityControl, 'interactivityType' => $this->interactivityType, 'inLanguage' => $this->inLanguage, 'award' => $this->award, 'license' => $this->license, 'review' => $this->review, 'educationalUse' => $this->educationalUse, 'translator' => $this->translator, 'genre' => $this->genre, 'comment' => $this->comment, 'author' => $this->author, 'audio' => $this->audio, 'accessibilitySummary' => $this->accessibilitySummary, 'sourceOrganization' => $this->sourceOrganization, 'contentRating' => $this->contentRating, 'temporal' => $this->temporal, 'copyrightYear' => $this->copyrightYear, 'creator' => $this->creator, 'accountablePerson' => $this->accountablePerson, 'isAccessibleForFree' => $this->isAccessibleForFree, 'accessibilityFeature' => $this->accessibilityFeature, 'releasedEvent' => $this->releasedEvent, 'interactionStatistic' => $this->interactionStatistic, 'headline' => $this->headline, 'spatial' => $this->spatial, 'schemaVersion' => $this->schemaVersion, 'copyrightHolder' => $this->copyrightHolder, 'accessibilityHazard' => $this->accessibilityHazard, 'educationalAlignment' => $this->educationalAlignment, 'timeRequired' => $this->timeRequired, 'contributor' => $this->contributor, 'thumbnailUrl' => $this->thumbnailUrl, 'about' => $this->about, 'containsSeason' => $this->containsSeason, 'hasPart' => $this->hasPart, 'itemOffered' => $this->itemOffered, 'offers' => $this->offers, 'recordedAt' => $this->recordedAt, 'workExample' => $this->workExample, 'exampleOfWork' => $this->exampleOfWork), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
