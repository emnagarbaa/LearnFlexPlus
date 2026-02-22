<?php

namespace App\Entity;

use App\Repository\CheatLogRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CheatLogRepository::class)]
class CheatLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Examen::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Examen $examen = null;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?Users $etudiant = null;

    #[ORM\Column(length: 50)]
    private ?string $type = null;

    #[ORM\Column]
    private ?int $count = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTime $createdAt = null;

    // ===== ID =====
    public function getId(): ?int
    {
        return $this->id;
    }

    // ===== EXAMEN =====
    public function getExamen(): ?Examen
    {
        return $this->examen;
    }

    public function setExamen(?Examen $examen): static
    {
        $this->examen = $examen;
        return $this;
    }

    // ===== ETUDIANT =====
    public function getEtudiant(): ?Users
    {
        return $this->etudiant;
    }

    public function setEtudiant(?Users $etudiant): static
    {
        $this->etudiant = $etudiant;
        return $this;
    }

    // ===== TYPE =====
    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    // ===== COUNT =====
    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(int $count): static
    {
        $this->count = $count;
        return $this;
    }

    // ===== CREATED AT =====
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}