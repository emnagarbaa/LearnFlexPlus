<?php

namespace App\Entity;

use App\Repository\QuizRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: QuizRepository::class)]
class Quiz
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: 'text')]
#[Assert\NotBlank(message: "La question est obligatoire.")]
#[Assert\Length(
    min: 5,
    minMessage: "La question doit contenir au moins 5 caractères."
)]
private ?string $question = null;


    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

  #[Assert\NotNull(message: "La durée est obligatoire.")]
#[Assert\Positive(message: "La durée doit être un nombre positif.")]
private ?int $duree = null;


  #[ORM\Column(length: 20)]
#[Assert\NotBlank(message: "L'état est obligatoire.")]
#[Assert\Choice(
    choices: ['active', 'inactive'],
    message: "L'état doit être 'active' ou 'inactive'."
)]
private ?string $etat = null;



    /**
     * @var Collection<int, Reponse>
     */
    #[ORM\OneToMany(targetEntity: Reponse::class, mappedBy: 'quiz', cascade: ['remove'])]
    // ↑ Changé 'Quiz' en 'quiz' pour correspondre à la propriété $quiz dans Reponse
    private Collection $reponses;

    public function __construct()
    {
        $this->etat = 'inactive';
        $this->reponses = new ArrayCollection();
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

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): static
    {
        $this->question = $question;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): static
    {
        $this->duree = $duree;
        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;
        return $this;
    }

    /**
     * @return Collection<int, Reponse>
     */
    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function addReponse(Reponse $reponse): static
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses->add($reponse);
            $reponse->setQuiz($this);
        }

        return $this;
    }

    public function removeReponse(Reponse $reponse): static
    {
        if ($this->reponses->removeElement($reponse)) {
            // set the owning side to null (unless already changed)
            if ($reponse->getQuiz() === $this) {
                $reponse->setQuiz(null);
            }
        }

        return $this;
    }
}