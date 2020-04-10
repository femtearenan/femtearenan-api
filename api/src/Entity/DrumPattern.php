<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\DrumPatternRepository")
 */
class DrumPattern
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="drumPatterns")
     */
    private $author;

    /**
     * @ORM\Column(type="integer")
     */
    private $bpm;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pattern;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor(?User $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getBpm(): ?int
    {
        return $this->bpm;
    }

    public function setBpm(int $bpm): self
    {
        $this->bpm = $bpm;

        return $this;
    }

    public function getPattern(): ?string
    {
        return $this->pattern;
    }

    public function setPattern(string $pattern): self
    {
        $this->pattern = $pattern;

        return $this;
    }
}
