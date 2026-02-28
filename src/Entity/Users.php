<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
#[ORM\Table(name: "users")]
#[ORM\HasLifecycleCallbacks]
#[UniqueEntity(fields: ['email'], message: 'This email is already in use.', groups: ['registration', 'update'])]
class Users implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 100)]
    #[Assert\NotBlank(message: "Le nom est obligatoire.", groups: ['registration', 'update'])]
    #[Assert\Length(min: 2, minMessage: "Le nom doit contenir au moins {{ limit }} caractères.", groups: ['registration', 'update'])]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z\s]+$/",
        message: "Le nom ne peut contenir que des lettres et des espaces.",
        groups: ['registration', 'update']
    )]
    private ?string $nom = null;

    #[ORM\Column(type: "string", length: 100)]
    #[Assert\NotBlank(message: "Le prénom est obligatoire.", groups: ['registration', 'update'])]
    #[Assert\Length(min: 2, minMessage: "Le prénom doit contenir au moins {{ limit }} caractères.", groups: ['registration', 'update'])]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z\s]+$/",
        message: "Le prénom ne peut contenir que des lettres et des espaces.",
        groups: ['registration', 'update']
    )]
    private ?string $prenom = null;

    #[ORM\Column(type: "integer", nullable: true)]
    #[Assert\Positive(message: "L'âge doit être un nombre positif.", groups: ['registration', 'update'])]
    #[Assert\GreaterThanOrEqual(value: 18, message: "Vous devez avoir au moins 18 ans.", groups: ['registration', 'update'])]
    private ?int $age = null;

    #[ORM\Column(type: "string", length: 255, nullable: true, name: "adresse_residence")]
    #[Assert\Length(
    max: 255,
    maxMessage: "L'adresse ne peut pas dépasser {{ limit }} caractères.",
    groups: ['registration', 'update']
    )]
    #[Assert\Regex(
    pattern: "/^\d+\s*,\s*[a-zA-Z\s]+,\s*[a-zA-Z\s]+$/",
    message: "L'adresse doit être au format: Numéro, Rue/Avenue, Gouvernorat",
    groups: ['registration', 'update']
    )]
    private ?string $adresseResidence = null;

    #[ORM\Column(type: "string", length: 180, unique: true)]
    #[Assert\NotBlank(message: "L'email est obligatoire.", groups: ['registration', 'update'])]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas un email valide.", groups: ['registration', 'update'])]
    private ?string $email = null;

    #[ORM\Column(type: "string", length: 20, nullable: true)]
    #[Assert\Regex(
        pattern: "/^\+?[0-9\s\-]+$/",
        message: "Le numéro de téléphone n'est pas valide.",
        groups: ['registration', 'update']
    )]
    private ?string $telephone = null;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Le mot de passe est obligatoire.", groups: ['registration'])]
    #[Assert\Length(min: 8, minMessage: "Le mot de passe doit contenir au moins {{ limit }} caractères.", groups: ['registration'])]
    #[Assert\Regex(
        pattern: "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",
        message: "Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial.",
        groups: ['registration']
    )]
    private ?string $password = null;

    #[ORM\Column(type: "string", length: 50)]
    #[Assert\NotBlank(message: "Le rôle est obligatoire.", groups: ['registration', 'update'])]
    #[Assert\Choice(choices: ["Admin", "Etudiant", "Enseignant"], message: "Rôle invalide.", groups: ['registration', 'update'])]
    private ?string $role = null;

    #[ORM\Column(type: "datetime", nullable: true, name: "created_at")]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: "datetime", nullable: true, name: "updated_at")]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        $this->updatedAt = new \DateTime();
    }

    public function getUserIdentifier(): string
    {
        return $this->email;
    }

public function getRoles(): array
    {
        return ['ROLE_' . strtoupper($this->role)];
    }


    public function eraseCredentials(): void
    {
        // Not needed for now
    }

    // Getters and Setters
    public function getId(): ?int { return $this->id; }

    public function getNom(): ?string { return $this->nom; }
    public function setNom(?string $nom): self { $this->nom = $nom; return $this; }

    public function getPrenom(): ?string { return $this->prenom; }
    public function setPrenom(?string $prenom): self { $this->prenom = $prenom; return $this; }

    public function getAge(): ?int { return $this->age; }
    public function setAge(?int $age): self { $this->age = $age; return $this; }

    public function getAdresseResidence(): ?string { return $this->adresseResidence; }
    public function setAdresseResidence(?string $adresseResidence): self { $this->adresseResidence = $adresseResidence; return $this; }

    public function getEmail(): ?string { return $this->email; }
    public function setEmail(?string $email): self { $this->email = $email; return $this; }

    public function getTelephone(): ?string { return $this->telephone; }
    public function setTelephone(?string $telephone): self { $this->telephone = $telephone; return $this; }

    public function getPassword(): ?string { return $this->password; }
    public function setPassword(?string $password): self { $this->password = $password; return $this; }

    public function getRole(): ?string { return $this->role; }
    public function setRole(?string $role): self { $this->role = $role; return $this; }

    public function getCreatedAt(): ?\DateTimeInterface { return $this->createdAt; }
    public function setCreatedAt(?\DateTimeInterface $createdAt): self { $this->createdAt = $createdAt; return $this; }

    public function getUpdatedAt(): ?\DateTimeInterface { return $this->updatedAt; }
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self { $this->updatedAt = $updatedAt; return $this; }
}
