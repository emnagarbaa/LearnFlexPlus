<?php

namespace App\Entity;

use App\Repository\PublicationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PublicationRepository::class)]
#[ORM\HasLifecycleCallbacks] // AJOUT: Pour les callbacks de cycle de vie
class Publication
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?\DateTime $dateCreation = null;

    #[ORM\Column(length: 100)]
    private ?string $categorie = null;

    #[ORM\Column]
    private ?int $nombreVues = null;

    #[ORM\Column]
    private ?int $nombreLikes = null;

    /**
     * @var Collection<int, Communication>
     */
    #[ORM\OneToMany(targetEntity: Communication::class, mappedBy: 'publication',orphanRemoval: true)]
    private Collection $communications;

    public function __construct()
    {
        $this->communications = new ArrayCollection();
        // Initialiser les valeurs par défaut
        $this->dateCreation = new \DateTime();
        $this->nombreVues = 0;
        $this->nombreLikes = 0;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDateCreation(): ?\DateTime
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTime $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getNombreVues(): ?int
    {
        return $this->nombreVues;
    }

    public function setNombreVues(int $nombreVues): static
    {
        $this->nombreVues = $nombreVues;

        return $this;
    }

    public function getNombreLikes(): ?int
    {
        return $this->nombreLikes;
    }

    public function setNombreLikes(int $nombreLikes): static
    {
        $this->nombreLikes = $nombreLikes;

        return $this;
    }

    /**
     * @return Collection<int, Communication>
     */
    public function getCommunications(): Collection
    {
        return $this->communications;
    }

    public function addCommunication(Communication $communication): static
    {
        if (!$this->communications->contains($communication)) {
            $this->communications->add($communication);
            $communication->setPublication($this);
        }

        return $this;
    }

    public function removeCommunication(Communication $communication): static
    {
        if ($this->communications->removeElement($communication)) {
            // set the owning side to null (unless already changed)
            if ($communication->getPublication() === $this) {
                $communication->setPublication(null);
            }
        }

        return $this;
    }

    // AJOUT: Méthode pour initialiser automatiquement la date de création
    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        if ($this->dateCreation === null) {
            $this->dateCreation = new \DateTime();
        }
        if ($this->nombreVues === null) {
            $this->nombreVues = 0;
        }
        if ($this->nombreLikes === null) {
            $this->nombreLikes = 0;
        }
    }
}