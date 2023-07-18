<?php

namespace App\Entity;

use App\Repository\ModeleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModeleRepository::class)]
class Modele
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $modele = null;

    #[ORM\Column]
    private ?int $prix = null;

    #[ORM\Column]
    private ?int $circulation = null;

    #[ORM\Column]
    private ?int $kilometrage = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\ManyToOne(inversedBy: 'modeles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Vehicule $Vehicules = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): static
    {
        $this->modele = $modele;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCirculation(): ?int
    {
        return $this->circulation;
    }

    public function setCirculation(int $circulation): static
    {
        $this->circulation = $circulation;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(int $kilometrage): static
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getVehicules(): ?Vehicule
    {
        return $this->Vehicules;
    }

    public function setVehicules(?Vehicule $Vehicules): static
    {
        $this->Vehicules = $Vehicules;

        return $this;
    }
}
