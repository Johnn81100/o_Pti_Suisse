<?php

namespace App\Entity;

use App\Repository\MenuRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MenuRepository::class)
 */
class Menu
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $texteMenu;

    /**
     * @ORM\Column(type="date")
     */
    private $jourMenu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexteMenu(): ?string
    {
        return $this->texteMenu;
    }

    public function setTexteMenu(string $texteMenu): self
    {
        $this->texteMenu = $texteMenu;

        return $this;
    }

    public function getJourMenu(): ?\DateTimeInterface
    {
        return $this->jourMenu;
    }

    public function setJourMenu(\DateTimeInterface $jourMenu): self
    {
        $this->jourMenu = $jourMenu;

        return $this;
    }
}
