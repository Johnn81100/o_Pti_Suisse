<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdminRepository::class)
 * @ORM\Table(name="`admin`")
 */
class Admin
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $loginResponsable;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $mdpResponsable;

    /**
     * @ORM\Column(type="smallint")
     */
    private $statusResponsable;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLoginResponsable(): ?string
    {
        return $this->loginResponsable;
    }

    public function setLoginResponsable(string $loginResponsable): self
    {
        $this->loginResponsable = $loginResponsable;

        return $this;
    }

    public function getMdpResponsable(): ?string
    {
        return $this->mdpResponsable;
    }

    public function setMdpResponsable(string $mdpResponsable): self
    {
        $this->mdpResponsable = $mdpResponsable;

        return $this;
    }

    public function getStatusResponsable(): ?int
    {
        return $this->statusResponsable;
    }

    public function setStatusResponsable(int $statusResponsable): self
    {
        $this->statusResponsable = $statusResponsable;

        return $this;
    }
}
