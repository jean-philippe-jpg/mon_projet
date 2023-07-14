<?php

namespace App\Entity;

use App\Repository\AnnéesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnnéesRepository::class)]
class Années
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $libelle = null;

    #[ORM\Column(length: 30)]
    private ?string $no = null;

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

    public function getNo(): ?string
    {
        return $this->no;
    }

    public function setNo(string $no): static
    {
        $this->no = $no;

        return $this;
    }
}
