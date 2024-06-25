<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $languesCibles = [];

    #[ORM\Column(length: 255)]
    private ?string $langueOrigine = null;

    #[ORM\ManyToOne(inversedBy: 'projects')]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLanguesCibles(): array
    {
        return $this->languesCibles;
    }

    public function setLanguesCibles(array $languesCibles): static
    {
        $this->languesCibles = $languesCibles;

        return $this;
    }

    public function getLangueOrigine(): ?string
    {
        return $this->langueOrigine;
    }

    public function setLangueOrigine(string $langueOrigine): static
    {
        $this->langueOrigine = $langueOrigine;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}
