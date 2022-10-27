<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 */
class Utilisateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $telUtilisateur;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $emailUtilisateur;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenomUtilisateur;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nomUtilisateur;

    /**
     * @ORM\OneToMany(targetEntity=ReservationTable::class, mappedBy="utilisateur", orphanRemoval=true)
     */
    private $reservationTables;

    public function __construct()
    {
        $this->reservationTables = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTelUtilisateur(): ?int
    {
        return $this->telUtilisateur;
    }

    public function setTelUtilisateur(int $telUtilisateur): self
    {
        $this->telUtilisateur = $telUtilisateur;

        return $this;
    }

    public function getEmailUtilisateur(): ?string
    {
        return $this->emailUtilisateur;
    }

    public function setEmailUtilisateur(string $emailUtilisateur): self
    {
        $this->emailUtilisateur = $emailUtilisateur;

        return $this;
    }

    public function getPrenomUtilisateur(): ?string
    {
        return $this->prenomUtilisateur;
    }

    public function setPrenomUtilisateur(string $prenomUtilisateur): self
    {
        $this->prenomUtilisateur = $prenomUtilisateur;

        return $this;
    }

    public function getNomUtilisateur(): ?string
    {
        return $this->nomUtilisateur;
    }

    public function setNomUtilisateur(string $nomUtilisateur): self
    {
        $this->nomUtilisateur = $nomUtilisateur;

        return $this;
    }

    /**
     * @return Collection<int, ReservationTable>
     */
    public function getReservationTables(): Collection
    {
        return $this->reservationTables;
    }

    public function addReservationTable(ReservationTable $reservationTable): self
    {
        if (!$this->reservationTables->contains($reservationTable)) {
            $this->reservationTables[] = $reservationTable;
            $reservationTable->setUtilisateur($this);
        }

        return $this;
    }

    public function removeReservationTable(ReservationTable $reservationTable): self
    {
        if ($this->reservationTables->removeElement($reservationTable)) {
            // set the owning side to null (unless already changed)
            if ($reservationTable->getUtilisateur() === $this) {
                $reservationTable->setUtilisateur(null);
            }
        }

        return $this;
    }
}
