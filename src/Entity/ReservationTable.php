<?php

namespace App\Entity;

use App\Repository\ReservationTableRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationTableRepository::class)
 */
class ReservationTable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=350, nullable=true)
     */
    private $messageReservationTable;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateHeuresReservationTable;

    /**
     * @ORM\Column(type="smallint")
     */
    private $nbreDePersReservationTable;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="reservationTables")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessageReservationTable(): ?string
    {
        return $this->messageReservationTable;
    }

    public function setMessageReservationTable(?string $messageReservationTable): self
    {
        $this->messageReservationTable = $messageReservationTable;

        return $this;
    }

    public function getDateHeuresReservationTable(): ?\DateTimeInterface
    {
        return $this->dateHeuresReservationTable;
    }

    public function setDateHeuresReservationTable(\DateTimeInterface $dateHeuresReservationTable): self
    {
        $this->dateHeuresReservationTable = $dateHeuresReservationTable;

        return $this;
    }

    public function getNbreDePersReservationTable(): ?int
    {
        return $this->nbreDePersReservationTable;
    }

    public function setNbreDePersReservationTable(int $nbreDePersReservationTable): self
    {
        $this->nbreDePersReservationTable = $nbreDePersReservationTable;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
}
