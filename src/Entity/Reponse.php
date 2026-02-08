<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;#[ORM\Column(length: 255)]
#[Assert\NotBlank(message: "Le texte de la réponse ne peut pas être vide.")]
#[Assert\Length(
    max: 255,
    maxMessage: "Le texte de la réponse ne peut pas dépasser {{ limit }} caractères."
)]
private ?string $text = null;

  #[ORM\Column]
    #[Assert\NotNull(message: "Il faut préciser si la réponse est correcte ou non.")]
    private ?bool $estCorrecte = null;

    #[ORM\ManyToOne(inversedBy: 'reponses')]
    #[Assert\NotNull(message: "La réponse doit appartenir à un quiz.")]
    private ?Quiz $quiz = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function isEstCorrecte(): ?bool
    {
        return $this->estCorrecte;
    }

    public function setEstCorrecte(bool $estCorrecte): static
    {
        $this->estCorrecte = $estCorrecte;

        return $this;
    }

    public function getQuiz(): ?Quiz
    {
        return $this->quiz;
    }

    public function setQuiz(?Quiz $quiz): static
    {
        $this->quiz = $quiz;

        return $this;
    }
}
