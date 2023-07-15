<?php

namespace App\Entity;

use App\Repository\MarqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MarqueRepository::class)]
class Marque
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $libelle = null;

    #[ORM\OneToMany(mappedBy: 'marque', targetEntity: model::class)]
    private Collection $modeles;

    #[ORM\OneToMany(mappedBy: 'marque', targetEntity: prix::class)]
    private Collection $prixs;

    #[ORM\OneToMany(mappedBy: 'marque', targetEntity: Annee::class)]
    private Collection $Annees;

    #[ORM\OneToMany(mappedBy: 'marque', targetEntity: km::class)]
    private Collection $kms;

    public function __construct()
    {
        $this->modeles = new ArrayCollection();
        $this->prixs = new ArrayCollection();
        $this->Annees = new ArrayCollection();
        $this->kms = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection<int, model>
     */
    public function getModeles(): Collection
    {
        return $this->modeles;
    }

    public function addModele(model $modele): static
    {
        if (!$this->modeles->contains($modele)) {
            $this->modeles->add($modele);
            $modele->setMarque($this);
        }

        return $this;
    }

    public function removeModele(model $modele): static
    {
        if ($this->modeles->removeElement($modele)) {
            // set the owning side to null (unless already changed)
            if ($modele->getMarque() === $this) {
                $modele->setMarque(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, prix>
     */
    public function getPrixs(): Collection
    {
        return $this->prixs;
    }

    public function addPrix(prix $prix): static
    {
        if (!$this->prixs->contains($prix)) {
            $this->prixs->add($prix);
            $prix->setMarque($this);
        }

        return $this;
    }

    public function removePrix(prix $prix): static
    {
        if ($this->prixs->removeElement($prix)) {
            // set the owning side to null (unless already changed)
            if ($prix->getMarque() === $this) {
                $prix->setMarque(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Annee>
     */
    public function getAnnees(): Collection
    {
        return $this->Annees;
    }

    public function addAnnee(Annee $annee): static
    {
        if (!$this->Annees->contains($annee)) {
            $this->Annees->add($annee);
            $annee->setMarque($this);
        }

        return $this;
    }

    public function removeAnnee(Annee $annee): static
    {
        if ($this->Annees->removeElement($annee)) {
            // set the owning side to null (unless already changed)
            if ($annee->getMarque() === $this) {
                $annee->setMarque(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, km>
     */
    public function getKms(): Collection
    {
        return $this->kms;
    }

    public function addKm(km $km): static
    {
        if (!$this->kms->contains($km)) {
            $this->kms->add($km);
            $km->setMarque($this);
        }

        return $this;
    }

    public function removeKm(km $km): static
    {
        if ($this->kms->removeElement($km)) {
            // set the owning side to null (unless already changed)
            if ($km->getMarque() === $this) {
                $km->setMarque(null);
            }
        }

        return $this;
    }
}
