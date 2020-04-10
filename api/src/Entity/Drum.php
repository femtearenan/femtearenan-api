<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\DrumRepository")
 */
class Drum
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $char;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $keycode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clip;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChar(): ?string
    {
        return $this->char;
    }

    public function setChar(string $char): self
    {
        $this->char = $char;

        return $this;
    }

    public function getKeycode(): ?string
    {
        return $this->keycode;
    }

    public function setKeycode(string $keycode): self
    {
        $this->keycode = $keycode;

        return $this;
    }

    public function getClip(): ?string
    {
        return $this->clip;
    }

    public function setClip(string $clip): self
    {
        $this->clip = $clip;

        return $this;
    }
}
