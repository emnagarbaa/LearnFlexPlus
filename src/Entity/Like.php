<?php

namespace App\Entity;

use App\Repository\LikeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LikeRepository::class)]
#[ORM\Table(name: '`like`')]
#[ORM\UniqueConstraint(name: 'unique_user_publication', columns: ['id_user', 'id_publication'])]
#[ORM\UniqueConstraint(name: 'unique_user_communication', columns: ['id_user', 'id_communication'])]
class Like
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_user = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_publication = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_communication = null;

    #[ORM\Column(type: 'boolean')]
    private bool $is_like = true; // true = like, false = dislike

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $date_creation = null;

    public function __construct()
    {
        $this->date_creation = new \DateTime();
    }

    // Getters et Setters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): self
    {
        $this->id_user = $id_user;
        return $this;
    }

    public function getIdPublication(): ?int
    {
        return $this->id_publication;
    }

    public function setIdPublication(?int $id_publication): self
    {
        $this->id_publication = $id_publication;
        return $this;
    }

    public function getIdCommunication(): ?int
    {
        return $this->id_communication;
    }

    public function setIdCommunication(?int $id_communication): self
    {
        $this->id_communication = $id_communication;
        return $this;
    }

    public function getIsLike(): bool
    {
        return $this->is_like;
    }

    public function setIsLike(bool $is_like): self
    {
        $this->is_like = $is_like;
        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): self
    {
        $this->date_creation = $date_creation;
        return $this;
    }
}