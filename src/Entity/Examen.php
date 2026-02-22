<?php

namespace App\Entity;

use App\Repository\ExamenRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Timestampable\Traits\TimestampableEntity;

#[ORM\Entity(repositoryClass: ExamenRepository::class)]
class Examen
{
    use TimestampableEntity;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 50)]
    private ?string $matiere = null;

    #[ORM\Column(length: 50)]
    private ?string $niveauexamen = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $datedebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $datefin = null;

    #[ORM\Column]
    private ?int $duree = null;

    #[ORM\Column]
    private ?int $nbquestion = null;

    #[ORM\Column]
    private ?float $scoretotal = null;

    #[ORM\Column]
    private ?float $coefficient = null;

    #[ORM\Column(length: 50)]
    private ?string $typeexamen = null;

    #[ORM\Column(length: 50)]
    private ?string $etat = null;

    /**
     * @var Collection<int, Commentaire>
     */
    #[ORM\OneToMany(targetEntity: Commentaire::class, mappedBy: 'examen', orphanRemoval: true)]
    private Collection $commentaires;

    /**
     * @var Collection<int, Challenge>
     */
    #[ORM\OneToMany(targetEntity: Challenge::class, mappedBy: 'examen')]
    private Collection $challenges;

    #[ORM\Column(length: 255)]
    private ?string $pdf = null;

   #[ORM\Column(type: 'text', nullable: true)]
private ?string $questions = null;

    /**
     * @var Collection<int, ReponseExamen>
     */
    #[ORM\OneToMany(targetEntity: ReponseExamen::class, mappedBy: 'examen')]
    private Collection $reponseExamens;

  

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
        $this->challenges = new ArrayCollection();
        $this->reponseExamens = new ArrayCollection();
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

    public function getMatiere(): ?string
    {
        return $this->matiere;
    }

    public function setMatiere(string $matiere): static
    {
        $this->matiere = $matiere;

        return $this;
    }

    public function getNiveauexamen(): ?string
    {
        return $this->niveauexamen;
    }

    public function setNiveauexamen(string $niveauexamen): static
    {
        $this->niveauexamen = $niveauexamen;

        return $this;
    }

    public function getDatedebut(): ?\DateTime
    {
        return $this->datedebut;
    }

    public function setDatedebut(\DateTime $datedebut): static
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?\DateTime
    {
        return $this->datefin;
    }

    public function setDatefin(\DateTime $datefin): static
    {
        $this->datefin = $datefin;

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

    public function getNbquestion(): ?int
    {
        return $this->nbquestion;
    }

    public function setNbquestion(int $nbquestion): static
    {
        $this->nbquestion = $nbquestion;

        return $this;
    }

    public function getScoretotal(): ?float
    {
        return $this->scoretotal;
    }

    public function setScoretotal(float $scoretotal): static
    {
        $this->scoretotal = $scoretotal;

        return $this;
    }

    public function getCoefficient(): ?float
    {
        return $this->coefficient;
    }

    public function setCoefficient(float $coefficient): static
    {
        $this->coefficient = $coefficient;

        return $this;
    }

    public function getTypeexamen(): ?string
    {
        return $this->typeexamen;
    }

    public function setTypeexamen(string $typeexamen): static
    {
        $this->typeexamen = $typeexamen;

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
     * @return Collection<int, Commentaire>
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): static
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires->add($commentaire);
            $commentaire->setExamen($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): static
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getExamen() === $this) {
                $commentaire->setExamen(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Challenge>
     */
    public function getChallenges(): Collection
    {
        return $this->challenges;
    }

    public function addChallenge(Challenge $challenge): static
    {
        if (!$this->challenges->contains($challenge)) {
            $this->challenges->add($challenge);
            $challenge->setExamen($this);
        }

        return $this;
    }

    public function removeChallenge(Challenge $challenge): static
    {
        if ($this->challenges->removeElement($challenge)) {
            // set the owning side to null (unless already changed)
            if ($challenge->getExamen() === $this) {
                $challenge->setExamen(null);
            }
        }

        return $this;
    }

    public function getPdf(): ?string
    {
        return $this->pdf;
    }

    public function setPdf(string $pdf): static
    {
        $this->pdf = $pdf;

        return $this;
    }

    public function getQuestions(): ?string
    {
        return $this->questions;
    }

    public function setQuestions(string $questions): static
    {
        $this->questions = $questions;

        return $this;
    }

    /**
     * @return Collection<int, ReponseExamen>
     */
    public function getReponseExamens(): Collection
    {
        return $this->reponseExamens;
    }

    public function addReponseExamen(ReponseExamen $reponseExamen): static
    {
        if (!$this->reponseExamens->contains($reponseExamen)) {
            $this->reponseExamens->add($reponseExamen);
            $reponseExamen->setExamen($this);
        }

        return $this;
    }

    public function removeReponseExamen(ReponseExamen $reponseExamen): static
    {
        if ($this->reponseExamens->removeElement($reponseExamen)) {
            // set the owning side to null (unless already changed)
            if ($reponseExamen->getExamen() === $this) {
                $reponseExamen->setExamen(null);
            }
        }

        return $this;
    }

   
}
