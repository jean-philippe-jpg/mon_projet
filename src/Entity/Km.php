<?php

namespace App\Entity;

use App\Repository\KmRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: KmRepository::class)]
class Km
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $libelle = null;

    #[ORM\ManyToOne(inversedBy: 'kms')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Marque $marque = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?int
    {
        return $this->libelle;
    }

    public function setLibelle(int $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    public function setMarque(?Marque $marque): static
    {
        $this->marque = $marque;

        return $this;
    }
}
