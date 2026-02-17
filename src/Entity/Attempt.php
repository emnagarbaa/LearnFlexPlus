<?php

namespace App\Entity;

use App\Repository\AttemptRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AttemptRepository::class)]
class Attempt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // 👨‍🎓 étudiant
    #[ORM\ManyToOne(inversedBy: 'attempts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $user = null;

    // 🧠 quiz passé
    #[ORM\ManyToOne(inversedBy: 'attempts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Quiz $quiz = null;

    // nombre de bonnes réponses
    #[ORM\Column]
    private ?int $bonnesReponses = 0;

    // nombre total de questions
    #[ORM\Column]
    private ?int $totalQuestions = 0;

    // score en pourcentage
    #[ORM\Column(type: Types::FLOAT)]
    private ?float $score = 0;

    // début du quiz
    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $dateDebut = null;

    // fin du quiz
    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $dateFin = null;

    // ================= GETTERS SETTERS =================

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): static
    {
        $this->user = $user;
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

    public function getBonnesReponses(): ?int
    {
        return $this->bonnesReponses;
    }

    public function setBonnesReponses(int $bonnesReponses): static
    {
        $this->bonnesReponses = $bonnesReponses;
        return $this;
    }

    public function getTotalQuestions(): ?int
    {
        return $this->totalQuestions;
    }

    public function setTotalQuestions(int $totalQuestions): static
    {
        $this->totalQuestions = $totalQuestions;
        return $this;
    }

    public function getScore(): ?float
    {
        return $this->score;
    }

    public function setScore(float $score): static
    {
        $this->score = $score;
        return $this;
    }

    public function getDateDebut(): ?\DateTimeImmutable
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeImmutable $dateDebut): static
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeImmutable
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeImmutable $dateFin): static
    {
        $this->dateFin = $dateFin;
        return $this;
    }
}
