<?php

namespace App\Entity;

use App\Repository\MatiereRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MatiereRepository::class)]
class Matiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom de la matière est obligatoire.")]
    #[Assert\Length(min: 3, minMessage: "Le nom doit contenir au moins {{ limit }} caractères.")]
    private ?string $nom_matiere = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "La description est obligatoire.")]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La section est obligatoire.")]
    private ?string $section = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le code de la matière est obligatoire.")]
    private ?string $code_matiere = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $date_creation = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le niveau est obligatoire.")]
    private ?string $niveau = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\OneToMany(mappedBy: 'matiere', targetEntity: Cours::class, orphanRemoval: true)]
    private Collection $cours;

    public function __construct()
    {
        $this->cours = new ArrayCollection();
        $this->date_creation = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMatiere(): ?string
    {
        return $this->nom_matiere;
    }

    public function setNomMatiere(string $nom_matiere): static
    {
        $this->nom_matiere = $nom_matiere;

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

    public function getSection(): ?string
    {
        return $this->section;
    }

    public function setSection(string $section): static
    {
        $this->section = $section;

        return $this;
    }

    public function getCodeMatiere(): ?string
    {
        return $this->code_matiere;
    }

    public function setCodeMatiere(string $code_matiere): static
    {
        $this->code_matiere = $code_matiere;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeImmutable
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeImmutable $date_creation): static
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): static
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, Cours>
     */
    public function getCours(): Collection
    {
        return $this->cours;
    }

    public function addCour(Cours $cour): static
    {
        if (!$this->cours->contains($cour)) {
            $this->cours->add($cour);
            $cour->setMatiere($this);
        }

        return $this;
    }

    public function removeCour(Cours $cour): static
    {
        if ($this->cours->removeElement($cour)) {
            // set the owning side to null (unless already changed)
            if ($cour->getMatiere() === $this) {
                $cour->setMatiere(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->nom_matiere ?? '';
    }
}
