<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The most generic kind of creative work, including books, movies, photographs, software programs, etc.')]
class CreativeWork extends Thing implements \JsonSerializable
{
    protected ?Audience $audience = null;
    protected ?Person $editor = null;
    protected \PSX\Uri\Uri|Product|CreativeWork|null $isBasedOn = null;
    protected ?string $alternativeHeadline = null;
    protected ?\PSX\DateTime\Date $expires = null;
    protected ?Place $spatialCoverage = null;
    protected ?Place $contentLocation = null;
    protected ?MediaObject $encoding = null;
    protected \PSX\Uri\Uri|CreativeWork|null $publishingPrinciples = null;
    protected Clip|VideoObject|null $video = null;
    protected \PSX\DateTime\Date|\DateTime|null $datePublished = null;
    protected ?string $text = null;
    protected Person|Organization|null $sponsor = null;
    protected ?ItemList $accessModeSufficient = null;
    protected int|string|null $position = null;
    protected float|string|null $version = null;
    protected \PSX\Uri\Uri|string|null $encodingFormat = null;
    protected ?Thing $mentions = null;
    protected \PSX\DateTime\Date|\DateTime|null $dateModified = null;
    protected \PSX\DateTime\Date|\DateTime|null $dateCreated = null;
    protected ?string $keywords = null;
    protected ?string $learningResourceType = null;
    protected ?string $accessMode = null;
    protected ?PublicationEvent $publication = null;
    protected ?\PSX\Uri\Uri $discussionUrl = null;
    protected ?string $accessibilityAPI = null;
    protected ?string $typicalAgeRange = null;
    protected Organization|Person|null $provider = null;
    protected Person|Organization|null $producer = null;
    protected ?MediaObject $associatedMedia = null;
    protected \PSX\Uri\Uri|CreativeWork|null $isPartOf = null;
    protected ?Person $character = null;
    protected ?bool $isFamilyFriendly = null;
    protected string|CreativeWork|null $citation = null;
    protected ?Place $locationCreated = null;
    protected ?int $commentCount = null;
    protected string|\DateTime|\PSX\Uri\Uri|null $temporalCoverage = null;
    protected Organization|Person|null $publisher = null;
    protected \PSX\Uri\Uri|string|Product|null $material = null;
    protected ?AggregateRating $aggregateRating = null;
    protected ?string $accessibilityControl = null;
    protected ?string $interactivityType = null;
    protected string|Language|null $inLanguage = null;
    protected ?string $award = null;
    protected \PSX\Uri\Uri|CreativeWork|null $license = null;
    protected ?Review $review = null;
    protected ?string $educationalUse = null;
    protected Organization|Person|null $translator = null;
    protected \PSX\Uri\Uri|string|null $genre = null;
    protected ?Comment $comment = null;
    protected Person|Organization|null $author = null;
    protected Clip|AudioObject|MusicRecording|null $audio = null;
    protected ?string $accessibilitySummary = null;
    protected ?Organization $sourceOrganization = null;
    protected string|Rating|null $contentRating = null;
    protected \DateTime|string|null $temporal = null;
    protected ?float $copyrightYear = null;
    protected Organization|Person|null $creator = null;
    protected ?Person $accountablePerson = null;
    protected ?bool $isAccessibleForFree = null;
    protected ?string $accessibilityFeature = null;
    protected ?PublicationEvent $releasedEvent = null;
    protected ?InteractionCounter $interactionStatistic = null;
    protected ?string $headline = null;
    protected ?Place $spatial = null;
    protected \PSX\Uri\Uri|string|null $schemaVersion = null;
    protected Person|Organization|null $copyrightHolder = null;
    protected ?string $accessibilityHazard = null;
    protected ?AlignmentObject $educationalAlignment = null;
    protected ?Duration $timeRequired = null;
    protected Organization|Person|null $contributor = null;
    protected ?\PSX\Uri\Uri $thumbnailUrl = null;
    protected ?CreativeWork $containsSeason = null;
    protected ?CreativeWork $hasPart = null;
    protected Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered = null;
    protected Offer|Demand|null $offers = null;
    protected ?Event $recordedAt = null;
    protected ?CreativeWork $workExample = null;
    protected ?CreativeWork $exampleOfWork = null;
    public function setAudience(?Audience $audience) : void
    {
        $this->audience = $audience;
    }
    public function getAudience() : ?Audience
    {
        return $this->audience;
    }
    public function setEditor(?Person $editor) : void
    {
        $this->editor = $editor;
    }
    public function getEditor() : ?Person
    {
        return $this->editor;
    }
    public function setIsBasedOn(\PSX\Uri\Uri|Product|CreativeWork|null $isBasedOn) : void
    {
        $this->isBasedOn = $isBasedOn;
    }
    public function getIsBasedOn() : \PSX\Uri\Uri|Product|CreativeWork|null
    {
        return $this->isBasedOn;
    }
    public function setAlternativeHeadline(?string $alternativeHeadline) : void
    {
        $this->alternativeHeadline = $alternativeHeadline;
    }
    public function getAlternativeHeadline() : ?string
    {
        return $this->alternativeHeadline;
    }
    public function setExpires(?\PSX\DateTime\Date $expires) : void
    {
        $this->expires = $expires;
    }
    public function getExpires() : ?\PSX\DateTime\Date
    {
        return $this->expires;
    }
    public function setSpatialCoverage(?Place $spatialCoverage) : void
    {
        $this->spatialCoverage = $spatialCoverage;
    }
    public function getSpatialCoverage() : ?Place
    {
        return $this->spatialCoverage;
    }
    public function setContentLocation(?Place $contentLocation) : void
    {
        $this->contentLocation = $contentLocation;
    }
    public function getContentLocation() : ?Place
    {
        return $this->contentLocation;
    }
    public function setEncoding(?MediaObject $encoding) : void
    {
        $this->encoding = $encoding;
    }
    public function getEncoding() : ?MediaObject
    {
        return $this->encoding;
    }
    public function setPublishingPrinciples(\PSX\Uri\Uri|CreativeWork|null $publishingPrinciples) : void
    {
        $this->publishingPrinciples = $publishingPrinciples;
    }
    public function getPublishingPrinciples() : \PSX\Uri\Uri|CreativeWork|null
    {
        return $this->publishingPrinciples;
    }
    public function setVideo(Clip|VideoObject|null $video) : void
    {
        $this->video = $video;
    }
    public function getVideo() : Clip|VideoObject|null
    {
        return $this->video;
    }
    public function setDatePublished(\PSX\DateTime\Date|\DateTime|null $datePublished) : void
    {
        $this->datePublished = $datePublished;
    }
    public function getDatePublished() : \PSX\DateTime\Date|\DateTime|null
    {
        return $this->datePublished;
    }
    public function setText(?string $text) : void
    {
        $this->text = $text;
    }
    public function getText() : ?string
    {
        return $this->text;
    }
    public function setSponsor(Person|Organization|null $sponsor) : void
    {
        $this->sponsor = $sponsor;
    }
    public function getSponsor() : Person|Organization|null
    {
        return $this->sponsor;
    }
    public function setAccessModeSufficient(?ItemList $accessModeSufficient) : void
    {
        $this->accessModeSufficient = $accessModeSufficient;
    }
    public function getAccessModeSufficient() : ?ItemList
    {
        return $this->accessModeSufficient;
    }
    public function setPosition(int|string|null $position) : void
    {
        $this->position = $position;
    }
    public function getPosition() : int|string|null
    {
        return $this->position;
    }
    public function setVersion(float|string|null $version) : void
    {
        $this->version = $version;
    }
    public function getVersion() : float|string|null
    {
        return $this->version;
    }
    public function setEncodingFormat(\PSX\Uri\Uri|string|null $encodingFormat) : void
    {
        $this->encodingFormat = $encodingFormat;
    }
    public function getEncodingFormat() : \PSX\Uri\Uri|string|null
    {
        return $this->encodingFormat;
    }
    public function setMentions(?Thing $mentions) : void
    {
        $this->mentions = $mentions;
    }
    public function getMentions() : ?Thing
    {
        return $this->mentions;
    }
    public function setDateModified(\PSX\DateTime\Date|\DateTime|null $dateModified) : void
    {
        $this->dateModified = $dateModified;
    }
    public function getDateModified() : \PSX\DateTime\Date|\DateTime|null
    {
        return $this->dateModified;
    }
    public function setDateCreated(\PSX\DateTime\Date|\DateTime|null $dateCreated) : void
    {
        $this->dateCreated = $dateCreated;
    }
    public function getDateCreated() : \PSX\DateTime\Date|\DateTime|null
    {
        return $this->dateCreated;
    }
    public function setKeywords(?string $keywords) : void
    {
        $this->keywords = $keywords;
    }
    public function getKeywords() : ?string
    {
        return $this->keywords;
    }
    public function setLearningResourceType(?string $learningResourceType) : void
    {
        $this->learningResourceType = $learningResourceType;
    }
    public function getLearningResourceType() : ?string
    {
        return $this->learningResourceType;
    }
    public function setAccessMode(?string $accessMode) : void
    {
        $this->accessMode = $accessMode;
    }
    public function getAccessMode() : ?string
    {
        return $this->accessMode;
    }
    public function setPublication(?PublicationEvent $publication) : void
    {
        $this->publication = $publication;
    }
    public function getPublication() : ?PublicationEvent
    {
        return $this->publication;
    }
    public function setDiscussionUrl(?\PSX\Uri\Uri $discussionUrl) : void
    {
        $this->discussionUrl = $discussionUrl;
    }
    public function getDiscussionUrl() : ?\PSX\Uri\Uri
    {
        return $this->discussionUrl;
    }
    public function setAccessibilityAPI(?string $accessibilityAPI) : void
    {
        $this->accessibilityAPI = $accessibilityAPI;
    }
    public function getAccessibilityAPI() : ?string
    {
        return $this->accessibilityAPI;
    }
    public function setTypicalAgeRange(?string $typicalAgeRange) : void
    {
        $this->typicalAgeRange = $typicalAgeRange;
    }
    public function getTypicalAgeRange() : ?string
    {
        return $this->typicalAgeRange;
    }
    public function setProvider(Organization|Person|null $provider) : void
    {
        $this->provider = $provider;
    }
    public function getProvider() : Organization|Person|null
    {
        return $this->provider;
    }
    public function setProducer(Person|Organization|null $producer) : void
    {
        $this->producer = $producer;
    }
    public function getProducer() : Person|Organization|null
    {
        return $this->producer;
    }
    public function setAssociatedMedia(?MediaObject $associatedMedia) : void
    {
        $this->associatedMedia = $associatedMedia;
    }
    public function getAssociatedMedia() : ?MediaObject
    {
        return $this->associatedMedia;
    }
    public function setIsPartOf(\PSX\Uri\Uri|CreativeWork|null $isPartOf) : void
    {
        $this->isPartOf = $isPartOf;
    }
    public function getIsPartOf() : \PSX\Uri\Uri|CreativeWork|null
    {
        return $this->isPartOf;
    }
    public function setCharacter(?Person $character) : void
    {
        $this->character = $character;
    }
    public function getCharacter() : ?Person
    {
        return $this->character;
    }
    public function setIsFamilyFriendly(?bool $isFamilyFriendly) : void
    {
        $this->isFamilyFriendly = $isFamilyFriendly;
    }
    public function getIsFamilyFriendly() : ?bool
    {
        return $this->isFamilyFriendly;
    }
    public function setCitation(string|CreativeWork|null $citation) : void
    {
        $this->citation = $citation;
    }
    public function getCitation() : string|CreativeWork|null
    {
        return $this->citation;
    }
    public function setLocationCreated(?Place $locationCreated) : void
    {
        $this->locationCreated = $locationCreated;
    }
    public function getLocationCreated() : ?Place
    {
        return $this->locationCreated;
    }
    public function setCommentCount(?int $commentCount) : void
    {
        $this->commentCount = $commentCount;
    }
    public function getCommentCount() : ?int
    {
        return $this->commentCount;
    }
    public function setTemporalCoverage(string|\DateTime|\PSX\Uri\Uri|null $temporalCoverage) : void
    {
        $this->temporalCoverage = $temporalCoverage;
    }
    public function getTemporalCoverage() : string|\DateTime|\PSX\Uri\Uri|null
    {
        return $this->temporalCoverage;
    }
    public function setPublisher(Organization|Person|null $publisher) : void
    {
        $this->publisher = $publisher;
    }
    public function getPublisher() : Organization|Person|null
    {
        return $this->publisher;
    }
    public function setMaterial(\PSX\Uri\Uri|string|Product|null $material) : void
    {
        $this->material = $material;
    }
    public function getMaterial() : \PSX\Uri\Uri|string|Product|null
    {
        return $this->material;
    }
    public function setAggregateRating(?AggregateRating $aggregateRating) : void
    {
        $this->aggregateRating = $aggregateRating;
    }
    public function getAggregateRating() : ?AggregateRating
    {
        return $this->aggregateRating;
    }
    public function setAccessibilityControl(?string $accessibilityControl) : void
    {
        $this->accessibilityControl = $accessibilityControl;
    }
    public function getAccessibilityControl() : ?string
    {
        return $this->accessibilityControl;
    }
    public function setInteractivityType(?string $interactivityType) : void
    {
        $this->interactivityType = $interactivityType;
    }
    public function getInteractivityType() : ?string
    {
        return $this->interactivityType;
    }
    public function setInLanguage(string|Language|null $inLanguage) : void
    {
        $this->inLanguage = $inLanguage;
    }
    public function getInLanguage() : string|Language|null
    {
        return $this->inLanguage;
    }
    public function setAward(?string $award) : void
    {
        $this->award = $award;
    }
    public function getAward() : ?string
    {
        return $this->award;
    }
    public function setLicense(\PSX\Uri\Uri|CreativeWork|null $license) : void
    {
        $this->license = $license;
    }
    public function getLicense() : \PSX\Uri\Uri|CreativeWork|null
    {
        return $this->license;
    }
    public function setReview(?Review $review) : void
    {
        $this->review = $review;
    }
    public function getReview() : ?Review
    {
        return $this->review;
    }
    public function setEducationalUse(?string $educationalUse) : void
    {
        $this->educationalUse = $educationalUse;
    }
    public function getEducationalUse() : ?string
    {
        return $this->educationalUse;
    }
    public function setTranslator(Organization|Person|null $translator) : void
    {
        $this->translator = $translator;
    }
    public function getTranslator() : Organization|Person|null
    {
        return $this->translator;
    }
    public function setGenre(\PSX\Uri\Uri|string|null $genre) : void
    {
        $this->genre = $genre;
    }
    public function getGenre() : \PSX\Uri\Uri|string|null
    {
        return $this->genre;
    }
    public function setComment(?Comment $comment) : void
    {
        $this->comment = $comment;
    }
    public function getComment() : ?Comment
    {
        return $this->comment;
    }
    public function setAuthor(Person|Organization|null $author) : void
    {
        $this->author = $author;
    }
    public function getAuthor() : Person|Organization|null
    {
        return $this->author;
    }
    public function setAudio(Clip|AudioObject|MusicRecording|null $audio) : void
    {
        $this->audio = $audio;
    }
    public function getAudio() : Clip|AudioObject|MusicRecording|null
    {
        return $this->audio;
    }
    public function setAccessibilitySummary(?string $accessibilitySummary) : void
    {
        $this->accessibilitySummary = $accessibilitySummary;
    }
    public function getAccessibilitySummary() : ?string
    {
        return $this->accessibilitySummary;
    }
    public function setSourceOrganization(?Organization $sourceOrganization) : void
    {
        $this->sourceOrganization = $sourceOrganization;
    }
    public function getSourceOrganization() : ?Organization
    {
        return $this->sourceOrganization;
    }
    public function setContentRating(string|Rating|null $contentRating) : void
    {
        $this->contentRating = $contentRating;
    }
    public function getContentRating() : string|Rating|null
    {
        return $this->contentRating;
    }
    public function setTemporal(\DateTime|string|null $temporal) : void
    {
        $this->temporal = $temporal;
    }
    public function getTemporal() : \DateTime|string|null
    {
        return $this->temporal;
    }
    public function setCopyrightYear(?float $copyrightYear) : void
    {
        $this->copyrightYear = $copyrightYear;
    }
    public function getCopyrightYear() : ?float
    {
        return $this->copyrightYear;
    }
    public function setCreator(Organization|Person|null $creator) : void
    {
        $this->creator = $creator;
    }
    public function getCreator() : Organization|Person|null
    {
        return $this->creator;
    }
    public function setAccountablePerson(?Person $accountablePerson) : void
    {
        $this->accountablePerson = $accountablePerson;
    }
    public function getAccountablePerson() : ?Person
    {
        return $this->accountablePerson;
    }
    public function setIsAccessibleForFree(?bool $isAccessibleForFree) : void
    {
        $this->isAccessibleForFree = $isAccessibleForFree;
    }
    public function getIsAccessibleForFree() : ?bool
    {
        return $this->isAccessibleForFree;
    }
    public function setAccessibilityFeature(?string $accessibilityFeature) : void
    {
        $this->accessibilityFeature = $accessibilityFeature;
    }
    public function getAccessibilityFeature() : ?string
    {
        return $this->accessibilityFeature;
    }
    public function setReleasedEvent(?PublicationEvent $releasedEvent) : void
    {
        $this->releasedEvent = $releasedEvent;
    }
    public function getReleasedEvent() : ?PublicationEvent
    {
        return $this->releasedEvent;
    }
    public function setInteractionStatistic(?InteractionCounter $interactionStatistic) : void
    {
        $this->interactionStatistic = $interactionStatistic;
    }
    public function getInteractionStatistic() : ?InteractionCounter
    {
        return $this->interactionStatistic;
    }
    public function setHeadline(?string $headline) : void
    {
        $this->headline = $headline;
    }
    public function getHeadline() : ?string
    {
        return $this->headline;
    }
    public function setSpatial(?Place $spatial) : void
    {
        $this->spatial = $spatial;
    }
    public function getSpatial() : ?Place
    {
        return $this->spatial;
    }
    public function setSchemaVersion(\PSX\Uri\Uri|string|null $schemaVersion) : void
    {
        $this->schemaVersion = $schemaVersion;
    }
    public function getSchemaVersion() : \PSX\Uri\Uri|string|null
    {
        return $this->schemaVersion;
    }
    public function setCopyrightHolder(Person|Organization|null $copyrightHolder) : void
    {
        $this->copyrightHolder = $copyrightHolder;
    }
    public function getCopyrightHolder() : Person|Organization|null
    {
        return $this->copyrightHolder;
    }
    public function setAccessibilityHazard(?string $accessibilityHazard) : void
    {
        $this->accessibilityHazard = $accessibilityHazard;
    }
    public function getAccessibilityHazard() : ?string
    {
        return $this->accessibilityHazard;
    }
    public function setEducationalAlignment(?AlignmentObject $educationalAlignment) : void
    {
        $this->educationalAlignment = $educationalAlignment;
    }
    public function getEducationalAlignment() : ?AlignmentObject
    {
        return $this->educationalAlignment;
    }
    public function setTimeRequired(?Duration $timeRequired) : void
    {
        $this->timeRequired = $timeRequired;
    }
    public function getTimeRequired() : ?Duration
    {
        return $this->timeRequired;
    }
    public function setContributor(Organization|Person|null $contributor) : void
    {
        $this->contributor = $contributor;
    }
    public function getContributor() : Organization|Person|null
    {
        return $this->contributor;
    }
    public function setThumbnailUrl(?\PSX\Uri\Uri $thumbnailUrl) : void
    {
        $this->thumbnailUrl = $thumbnailUrl;
    }
    public function getThumbnailUrl() : ?\PSX\Uri\Uri
    {
        return $this->thumbnailUrl;
    }
    public function setContainsSeason(?CreativeWork $containsSeason) : void
    {
        $this->containsSeason = $containsSeason;
    }
    public function getContainsSeason() : ?CreativeWork
    {
        return $this->containsSeason;
    }
    public function setHasPart(?CreativeWork $hasPart) : void
    {
        $this->hasPart = $hasPart;
    }
    public function getHasPart() : ?CreativeWork
    {
        return $this->hasPart;
    }
    public function setItemOffered(Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered) : void
    {
        $this->itemOffered = $itemOffered;
    }
    public function getItemOffered() : Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
    {
        return $this->itemOffered;
    }
    public function setOffers(Offer|Demand|null $offers) : void
    {
        $this->offers = $offers;
    }
    public function getOffers() : Offer|Demand|null
    {
        return $this->offers;
    }
    public function setRecordedAt(?Event $recordedAt) : void
    {
        $this->recordedAt = $recordedAt;
    }
    public function getRecordedAt() : ?Event
    {
        return $this->recordedAt;
    }
    public function setWorkExample(?CreativeWork $workExample) : void
    {
        $this->workExample = $workExample;
    }
    public function getWorkExample() : ?CreativeWork
    {
        return $this->workExample;
    }
    public function setExampleOfWork(?CreativeWork $exampleOfWork) : void
    {
        $this->exampleOfWork = $exampleOfWork;
    }
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

