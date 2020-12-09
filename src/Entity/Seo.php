<?php

namespace MartenaSoft\Seo\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use MartenaSoft\Seo\Repository\SeoRepository;

/**
 * @ORM\Entity(repositoryClass=SeoRepository::class)
 * @UniqueEntity(
 *     fields={"name"}
 * )
 */
class Seo implements SeoInterface
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;
    
    /** 
     * @Assert\NotBlank()
     * @ORM\Column()
     */
    private ?string $name = "";

    /** @ORM\Column(type="smallint") */
    private ?int $type = SeoInterface::TYPE_DEFAULT;

    /** @ORM\Column(nullable=true) */
    private ?string $author = "";

    /** @ORM\Column(nullable=true) */
    private ?string $h1 = "";

    /** @ORM\Column(nullable=true) */
    private ?string $title = "";

    /** @ORM\Column(nullable=true) */
    private ?string $description = "";

    /** @ORM\Column(nullable=true) */
    private ?string $keywords = "";

    /** @ORM\Column(nullable=true) */
    private ?string $ogTitle = "";

    /** @ORM\Column(nullable=true) */
    private ?string $ogDescription = "";

    /** @ORM\Column(nullable=true) */
    private ?string $ogImage = "";

    /** @ORM\Column(nullable=true) */
    private ?string $ogUrl = "";

    /** @ORM\Column(nullable=true) */
    private ?string $ogSiteName = "";

    /** @ORM\Column(nullable=true) */
    private ?string $twitterImageAlt = "";

    /** @ORM\Column(nullable=true) */
    private ?string $twitterCard = "";

    /** @ORM\Column(nullable=true) */
    private ?string $twitterSite = "";

    /** @ORM\Column(nullable=true) */
    private ?string $copyright = "";

    /** @ORM\Column(nullable=true) */
    private ?string $documentState = "";

    /** @ORM\Column(nullable=true) */
    private ?string $revisit = "";

    /** @ORM\Column(nullable=true) */
    private ?string $url = "";

    /** @ORM\Column(nullable=true) */
    private ?string $viewport = "";

    /** @ORM\Column(nullable=true) */
    private ?string $cacheControl = "";

    /** @ORM\Column(nullable=true) */
    private ?string $expires = "";

    /** @ORM\Column(nullable=true) */
    private ?string $contentLanguage = "";

    /** @ORM\Column(nullable=true) */
    private ?string $charset = "";

    public function getId(): ?int
    {
        return $this->id;
    }
 
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): self
    {
        $this->author = $author;
        return $this;
    }

    public function getH1(): ?string
    {
        return $this->h1;
    }

    public function setH1(?string $h1): self
    {
        $this->h1 = $h1;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(?string $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    public function getOgTitle(): ?string
    {
        return $this->ogTitle;
    }

    public function setOgTitle(?string $ogTitle): self
    {
        $this->ogTitle = $ogTitle;
        return $this;
    }

    public function getOgDescription(): ?string
    {
        return $this->ogDescription;
    }

    public function setOgDescription(?string $ogDescription): self
    {
        $this->ogDescription = $ogDescription;
        return $this;
    }

    public function getOgImage(): ?string
    {
        return $this->ogImage;
    }

    public function setOgImage(?string $ogImage): self
    {
        $this->ogImage = $ogImage;
        return $this;
    }

    public function getOgUrl(): ?string
    {
        return $this->ogUrl;
    }

    public function setOgUrl(?string $ogUrl): self
    {
        $this->ogUrl = $ogUrl;
        return $this;
    }

    public function getOgSiteName(): ?string
    {
        return $this->ogSiteName;
    }

    public function setOgSiteName(?string $ogSiteName): self
    {
        $this->ogSiteName = $ogSiteName;
        return $this;
    }

    public function getTwitterImageAlt(): ?string
    {
        return $this->twitterImageAlt;
    }

    public function setTwitterImageAlt(?string $twitterImageAlt): self
    {
        $this->twitterImageAlt = $twitterImageAlt;
        return $this;
    }

    public function getTwitterCard(): ?string
    {
        return $this->twitterCard;
    }

    public function setTwitterCard(?string $twitterCard): self
    {
        $this->twitterCard = $twitterCard;
        return $this;
    }

    public function getTwitterSite(): ?string
    {
        return $this->twitterSite;
    }

    public function setTwitterSite(?string $twitterSite): self
    {
        $this->twitterSite = $twitterSite;
        return $this;
    }

    public function getCopyright(): ?string
    {
        return $this->copyright;
    }

    public function setCopyright(?string $copyright): self
    {
        $this->copyright = $copyright;
        return $this;
    }

    public function getDocumentState(): ?string
    {
        return $this->documentState;
    }

    public function setDocumentState(?string $documentState): self
    {
        $this->documentState = $documentState;
        return $this;
    }

    public function getRevisit(): ?string
    {
        return $this->revisit;
    }

    public function setRevisit(?string $revisit): self
    {
        $this->revisit = $revisit;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function getViewport(): ?string
    {
        return $this->viewport;
    }

    public function setViewport(?string $viewport): self
    {
        $this->viewport = $viewport;
        return $this;
    }

    public function getCacheControl(): ?string
    {
        return $this->cacheControl;
    }

    public function setCacheControl(?string $cacheControl): self
    {
        $this->cacheControl = $cacheControl;
        return $this;
    }

    public function getExpires(): ?string
    {
        return $this->expires;
    }

    public function setExpires(?string $expires): self
    {
        $this->expires = $expires;
        return $this;
    }

    public function getContentLanguage(): ?string
    {
        return $this->contentLanguage;
    }

    public function setContentLanguage(?string $contentLanguage): self
    {
        $this->contentLanguage = $contentLanguage;
        return $this;
    }

    public function getCharset(): ?string
    {
        return $this->charset;
    }

    public function setCharset(?string $charset): self
    {
        $this->charset = $charset;
        return $this;
    }
}

